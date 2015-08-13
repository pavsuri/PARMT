<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\MobileDevice\AddProductsForm;
use Vlreleases\UserBundle\Form\MobileDevice\SearchProductForm;
use Vlreleases\UserBundle\Form\MobileDevice\SearchAssetForm;
use Vlreleases\UserBundle\Entity\Product;
use Doctrine\ORM\EntityManager;

class ProductsController extends Controller
{
    /**
     *
     * @var type string
     */
    private $screenName;
    
    /**
     * set the session.
     * 
     * @var session 
     */
    private $session;

    /**
     * Product Service
     * 
     * @var \Vlreleases\UserBundle\Services\ProductService
     */
    private $productDeviceService;

    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;

    public function indexAction(Request $request)
    {
        $screenName = 'products';
        $criteria = array();
        $session = $request->getSession();
        $user = $this->getUserService()->findOneById($session->get('userId'));
        $userData['userName'] = $session->get('userName');
        $userData['userRole'] = $session->get('userRole');
        if ($user->getPersonalProfile() == '') {
             $userData['photo'] = 'default.jpg'; 
        }
        else if($user->getPersonalProfile()->getPhoto())
        {
            $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        }
        else {
            $userData['photo'] = 'default.jpg';
        }
        $addProductsForm = $this->createForm(new AddProductsForm());
        $searchProductForm = $this->createForm(new SearchProductForm());
        $productService = $this->getProductDeviceService();
        $result = $productService->findBy($criteria);
        //var_dump($result[0]);exit;
        $roleId = $session->get('userRole');
        $userService = $this->get('UserService');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        //var_dump($userData['rolePermission']);exit;
        if ($request->isMethod('GET')) {
            $id = $request->query->get('deviceId');
            if (!empty($id)) {
                $this->getProductDeviceService()->delete($id);
            }
        }
        
        return $this
            ->render('VlreleasesUserBundle:MobileDevice:productsList.html.twig', 
                    array(
                    'userName' => $session->get('userName'),
                    'productListData' => $result,
                    'addProductsForm' => $addProductsForm->createView(),
                    'searchProductForm' => $searchProductForm->createView(),
                    'userData' => $userData,
                    'userType' => $session->get('userType'),
        ));
    }

    /**
     * Retuns the Product Service.
     * 
     * @return \Vlreleases\UserBundle\Services\ProductService
     */
    private function getProductDeviceService() 
    {
        if (!$this->productDeviceService) {
            $this->productDeviceService = $this->get('ProductService');
        }
        
        return $this->productDeviceService;
    }

    /**
     * Retuns the User Service.
     * 
     * @return \Vlreleases\UserBundle\Services\UserService
     */
    private function getUserService()
    {
        if (!$this->userService) {
            $this->userService = $this->get('UserService');
        }
        
        return $this->userService;
    }
  
    /**
     * Register the product .
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function registerAction(Request $request)
    {
        $screenName = 'products';
        $errorValue = 0;
        $productDeviceService = $this->getProductDeviceService();
        $this->session = $request->getSession();
        if ($request->isMethod('GET')) {
            $id = $request->query->get('deviceId');
            if (!empty($id)) {
                $productDevice = $productDeviceService->findOne($id);
            }
        } else if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $productname = $data['addProducts']['productname'];
            $valid = $productDeviceService->findOneName($productname);
            if (!empty($valid)) {
                $errorValue = 1;
            }
            $id = $data['addProducts']['id'];
            if ($id) {
                $valid = $productDeviceService->findByIdName($id, $productname);
                if ($valid == 1) {
                    $errorValue = 1;
                } else {
                    $errorValue = 0;
                }
                $productDevice = $productDeviceService->findOne($id);
            } else {
                $productDevice = new Product();
            }
        }
        $roleId = $this->session->get('userRole');
        $userService = $this->get('UserService');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        $addProductsForm = $this->createForm(new AddProductsForm(), $productDevice);
        if ($request->isMethod('POST')) {
            $addProductsForm->handleRequest($request);
            if ($addProductsForm->isValid()) {
                if ($errorValue == 0) {

                    $productDeviceService->register($productDevice);
                }
                $addProductsForm = $this->getEmptyForm();
            }
        }
        
        return $this
            ->render('VlreleasesUserBundle:MobileDevice:addProducts.html.twig',
                    array(
                    'addProductsForm' => $addProductsForm->createView(),
                    'userName' => $this->session->get('userName'),
                    'userType' => $this->session->get('userType'),
                    'errorValue' => $errorValue
                        )
        );
    }

    /**
     * creates a empty form
     * 
     * @return $addProductsForm object
     */
    private function getEmptyForm() 
    {
        $productDevice = new Product();
        $addProductsForm = $this
                ->createForm(new AddProductsForm(), $productDevice);

        return $addProductsForm;
    }

     /**
     * Loads a new addProducts Form.
     * 
     * @return addCategoryForm 
     */
    public function clickRegisterAction()
    {
        $addProductsForm = $this->getEmptyForm();
        
        return $this
            ->render('VlreleasesUserBundle:MobileDevice:addProducts.html.twig',
                        array(
                    'addProductsForm' => $addProductsForm->createView(),
                        )
        );
    }

    /**
     * Lists the products.
     * 
     * @return type array 
     */
    public function listDeviceAction(Request $request) 
    {
        $screenName = 'products';
        $this->session = $request->getSession();
        $criteria = array();
        $data = $request->request->all();
        if ($data) {
            $category = $data['searchProduct']['category'];
            $productname = $data['searchProduct']['productname'];
        

            if ($category) {
                $criteria['category'] = $category;
            }

            if ($productname) {
                $criteria['productname'] = $productname;
            }

           
        }
        $productService = $this->getProductDeviceService();
        $result = $productService->findBy($criteria);
        $roleId = $this->session->get('userRole');
        $userService = $this->get('UserService');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        
        return $this
        ->render('VlreleasesUserBundle:MobileDevice:displayProductList.html.twig',
                array('userData' => $userData,
                    'productListData' => $result,
                    'userName' => $this->session->get('userName'),
                    'userType' => $this->session->get('userType'),
        ));
    }

    /**
     * Searches a product and set new data after editing.
     * 
     * @return JsonResponse
     * 
     */
    public function listDeviceNameAction() {
        $criteria = array();
        $productService = $this->getProductDeviceService();
        $result = $productService->findBy($criteria);
        foreach ($result as $productDevice) {
            $deviceData[] = array('id' => $productDevice->getId(), 
                'name' => $productDevice->getName());
        }
        $response = new JsonResponse();
        $response->setData($deviceData);

        return $response;
    }

    /**
     * Searches an asset and get its details.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @return JsonResponse
     * 
     */
    public function takeAssetSearchListAction(Request $request)
    {
        $criteria = array();
        $data = $request->request->all();
        if ($data) {

            $category = $data['searchAsset']['category'];
            $productname = $data['searchAsset']['productname'];
            if ($category) {
                $criteria['category'] = $category;
            }

            if ($productname) {
                $criteria['id'] = $productname;
            }


            $criteria['active'] = true;
        }
        $productService = $this->getProductDeviceService();
        $result = $productService->findBy($criteria);
        $data = array();
        $sno = 1;
        $session = $request->getSession();
        $flag = false;
        foreach ($result as $index => $value) {

            $cntrequesters = null;
            $data[$index]['sno'] = $sno;
            $data[$index]['id'] = $value->getId();
            $data[$index]['category'] = $value->getCategory()->getName();
            $data[$index]['productname'] = $value->getProductName();
            $data[$index]['ownername'] = $value->getOwnerName();
            $data[$index]['os'] = $value->getOs();
            $data[$index]['brand'] = $value->getBrand();
            $data[$index]['version'] = $value->getVersion();
            $data[$index]['description'] = $value->getDescription();
            if($value->getDeviceStatus() == '')
                $data[$index]['takenBy'] = '';
            else
                $data[$index]['takenBy'] =
                    (!$value->getAvailable()) ? ucfirst($value
                            ->getDeviceStatus()->getAssignee()
                            ->getUserName()) : null;
            if($value->getDeviceStatus() == '')
                $data[$index]['takenAt'] = '';
            else
                $data[$index]['takenAt'] = 
                    (!$value->getAvailable()) ? $value->getDeviceStatus()
                    ->getStartTime() : null;
            if($value->getDeviceStatus() == '')
                $data[$index]['submittedAt'] = '';
            else
                $data[$index]['submittedAt'] = ($value->getAvailable()) ? $value
                    ->getDeviceStatus()->getSubmittedTime() : null;
            if($value->getDeviceStatus() == '')
                $data[$index]['expectedAt'] = '';
	    else
              $data[$index]['expectedAt'] = (!$value->getAvailable()) ? $value
                    ->getDeviceStatus()->getExpectedEndTime() : null;
            if (count($value->getRequesters()) > 0) {
                $cntrequesters = count($value->getRequesters());
            }

            $data[$index]['queue'] = $cntrequesters;
            $data[$index]['available'] = $value->getAvailable();
            $data[$index]['showRaiseHandOption'] = $productService
                    ->showRaiseHandOption($value);
            $data[$index]['showCancelRequestOption'] = $productService
                    ->isLoggedInUserIsInQueue($value);
            if (!$value->getAvailable() && $value->getDeviceStatus()) {
                if ($session->get('userId') == $value->getDeviceStatus()
                        ->getAssignee()->getId()) {
                    $flag = true;
                }
            }
            $data[$index]['showReturnOption'] = 
                    (!$value->getAvailable()) ? $flag : false;
            $sno++;
        }
        
        return $this
        ->render('VlreleasesUserBundle:MobileDevice:takeAssetSearchList.html.twig', 
                array(
                    'takeAssetListData' => $data,
                    'userName' => $session->get('userName'),
                    'userType' => $session->get('userType'),
        ));
    }
  
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * 
     * @return array 
     */
    public function takeAssetListAction(Request $request)
    {
        $criteria = array();
        $productService = $this->getProductDeviceService();
        $session = $request->getSession();
        $user = $this->getUserService()->findOneById($session->get('userId'));
        $userData['userName'] = $session->get('userName');
        $userData['userRole'] = $session->get('userRole');
        if ($user->getPersonalProfile() == '') {
             $userData['photo'] = 'default.jpg'; 
        }
        else if($user->getPersonalProfile()->getPhoto())
        {
            $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        }
        else {
            $userData['photo'] = 'default.jpg';
        }
        $searchAssetForm = $this->createForm(new SearchAssetForm());
        $category = $request->request->get('category');

        $productname = $request->request->get('productname');


        if (!is_null($category)) {

            $criteria['category'] = $category;
        }

        if (!is_null($productname)) {
            $criteria['id'] = $productname;
        }

        $criteria['active'] = true;
        $result1 = $productService->findBy($criteria);
	
        $data = array();
        $session = $request->getSession();
        $sno = 1;
        foreach ($result1 as $index => $value) {

            $flag = false;
            $cntrequesters = null;
            $data[$index]['sno'] = $sno;
            $data[$index]['id'] = $value->getId();
            $data[$index]['category'] = $value->getCategory()->getName();
            $data[$index]['productname'] = $value->getProductName();
            $data[$index]['ownername'] = $value->getOwnerName();
            $data[$index]['brand'] = $value->getBrand();
            $data[$index]['os'] = $value->getOs();
            $data[$index]['version'] = $value->getVersion();
            $data[$index]['description'] = $value->getDescription();
            if($value->getDeviceStatus() == '')
                $data[$index]['takenBy'] = '';
            else
                $data[$index]['takenBy'] = 
                   (!$value->getAvailable()) ? ucfirst($value->getDeviceStatus()
                            ->getAssignee()->getUserName()) : null;
            if($value->getDeviceStatus() == '')
                $data[$index]['takenAt'] = '';
            else
                $data[$index]['takenAt'] =
                    (!$value->getAvailable()) ? $value->getDeviceStatus()
                    ->getStartTime() : null;
            if($value->getDeviceStatus() == '')
                $data[$index]['submittedAt'] = '';
            else
                $data[$index]['submittedAt'] = ($value->getAvailable()) ? $value
                    ->getDeviceStatus()->getSubmittedTime() : null;
            if($value->getDeviceStatus() == '')
                $data[$index]['expectedAt'] = '';
            else
                $data[$index]['expectedAt'] = (!$value->getAvailable()) ? $value
                    ->getDeviceStatus()->getExpectedEndTime() : null;
            if (count($value->getRequesters()) > 0) {
                $cntrequesters = count($value->getRequesters());
            }
	
            $data[$index]['queue'] = $cntrequesters;
            $data[$index]['available'] = $value->getAvailable();
            $data[$index]['showRaiseHandOption'] = $productService
                    ->showRaiseHandOption($value);
            $data[$index]['showCancelRequestOption'] = $productService
                    ->isLoggedInUserIsInQueue($value);
            if (!$value->getAvailable() && $value->getDeviceStatus()) {
                if (
                        ($session->get('userId') == $value->getDeviceStatus()
                        ->getAssignee()->getId()) &&
                        (!$value->getDeviceStatus()
                                ->getSubmittedTime() instanceof \DateTime)
                ) {
                    $flag = true;
                }
            }
            $data[$index]['showReturnOption'] = 
                    (!$value->getAvailable()) ? $flag : false;
            $sno++;
        }
 
        return $this
               ->render('VlreleasesUserBundle:MobileDevice:takeAsset.html.twig', 
                array(
                    'searchAssetForm' => $searchAssetForm->createView(),
                    'userName' => $session->get('userName'),
                    'userType' => $session->get('userType'),
                    'userData' => $userData,
                    'takeAssetListData' => $data));
    }

    /**
     * take a product .
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function takeAction(Request $request) 
    {
        $response = new JsonResponse();
        $id = $request->query->get('deviceId');
        $this->session = $request->getSession();
        $expectedEndTime = new \DateTime();
        $return = array('status' => $this->getProductDeviceService()
                ->take($id, $expectedEndTime));

        if ($return) {
            $this->sendConfirmationMail($id);
        }
        $response->setData($return);

        return $response;
    }

    /**
     * return a mobile device.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function returnAction(Request $request)
    {

        $response = new JsonResponse();

        $id = $request->query->get('deviceId');
        $submittedTime = new \DateTime();
        $return = array('status' => $this->getProductDeviceService()
                ->returnDevice($id, $submittedTime));
        if ($return) {
            $this->sendMail($id);
        }

        $response->setData($return);
        return $response;
    }

    /**
     * 
     * @param integer $id
     */
    private function sendMail($id) 
    {
        $productDevice = $this->getProductDeviceService()->findOne($id);
        $requesters = $productDevice->getRequesters();

        $to = array();
        foreach ($requesters as $requester) {
            $to[] = $requester->getRequester()->getEmail();
        }
        $message = \Swift_Message::newInstance()
                ->setSubject('Device Available')
                ->setFrom('keerthi.gunda@valuelabs.net')
                ->setTo($to)
                ->setBody(
                $this->renderView(
           'VlreleasesUserBundle:MobileDevice:mailDeviceAvailability.html.twig', 
                        array('devicename' => $productDevice->getProductName(), 
                            'brand' => $productDevice->getBrand())
                )
                );
        
        $this->get('mailer')->send($message);
    }

    /**
     * Will send confirmation mail
     * 
     * @param integer $id
     */
    private function sendConfirmationMail($id) 
    {
        $productDevice = $this->getProductDeviceService()->findOne($id);
        $user = $this->getUserService()
                ->findOneById($this->session->get('userId'));
        $to = $user->getEmail();

        $message = \Swift_Message::newInstance()
                ->setSubject('Device Assigned')
                ->setFrom('keerthi.gunda@valuelabs.net')
                ->setTo($to)
                ->setBody(
                $this->renderView(
                'VlreleasesUserBundle:MobileDevice:mailDeviceAssigned.html.twig', 
                        array('devicename' => $productDevice->getProductName(),
                            'brand' => $productDevice->getBrand())
                )
                )
        ;
        $this->get('mailer')->send($message);
    }

    /**
     * request a mobile device.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function requestAction(Request $request) 
    {
        $response = new JsonResponse();
        $id = $request->query->get('deviceId');
        $return = array('status' => $this->getProductDeviceService()->requestDevice($id));

        $response->setData($return);
        
        return $response;
    }

    /**
     * cancel product  request
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function cancelRequestAction(Request $request)
    {
        $response = new JsonResponse();
        $id = $request->query->get('deviceId');
        $return = array('status' => $this->getProductDeviceService()->cancelRequestDevice($id));
        $response->setData($return);
        
        return $response;
    }

    /**
     * to get queue list for a product
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function queueListAction(Request $request)
    {
        $response = new JsonResponse();
        $id = $request->query->get('deviceId');
        $result = $this->getProductDeviceService()->getRequesterList($id);

        $data = array();
        foreach ($result as $index => $value) {
            $data[$index]['id'] = $value->getRequester()->getId();
            $data[$index]['name'] = ucfirst($value->getRequester()
                    ->getUserName());
            $data[$index]['email'] = $value->getRequester()->getEmail();
            $data[$index]['extension'] = ($value->getRequester()
                    ->getWorkProfile()) ? $value->getRequester()
                    ->getWorkProfile()->getExtensionNumber() : null;
            $data[$index]['location'] = ($value->getRequester()
                    ->getWorkProfile()) ? $value->getRequester()
                    ->getWorkProfile()->getWorkStation() : null;
        }

        return $this
          ->render('VlreleasesUserBundle:MobileDevice:queueListPopup.html.twig',
                  array(
                    'queueUserListData' => $data));
    }

}
