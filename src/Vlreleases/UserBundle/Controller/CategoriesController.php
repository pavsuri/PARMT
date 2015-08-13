<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\MobileDevice\AddCategoriesForm;
use Vlreleases\UserBundle\Entity\Category;
use Doctrine\ORM\EntityManager;

class CategoriesController extends Controller
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
     * Category  Service
     * 
     * @var \Vlreleases\UserBundle\Services\Category Service
     */
    private $categoryService;

    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
     /**
     * Default action which displays the initial Add Category screen
     * 
     * @param Request $request
     * 
     * @return type array
     */
    public function indexAction(Request $request) 
    {
        $screenName = 'categories';
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
	$roleId = $session->get('userRole');
        $userService = $this->get('UserService');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        $addCategoriesForm = $this->createForm(new AddCategoriesForm());
        $categoryService = $this->getCategoryService();
        $result = $categoryService->findBy($criteria);
        if ($request->isMethod('GET')) {
            $id = $request->query->get('deviceId');
            if (!empty($id)) {
                $this->getCategoryService()->delete($id);
            }
        }
	
        
        return $this
          ->render('VlreleasesUserBundle:MobileDevice:categoriesList.html.twig', 
                array(
            'userName' => $session->get('userName'),
            'categoryListData' => $result,
            'userData' => $userData,
            'addCategoriesForm' => $addCategoriesForm->createView(),
            'userType' => $session->get('userType'),
        ));
    }
 
    /**
     * Retuns the Category Service.
     * 
     * @return \Vlreleases\UserBundle\Services\CategoryService
     */
    private function getCategoryService()
    {
        if (!$this->categoryService) {
            $this->categoryService = $this->get('CategoryService');
        }
        
        return $this->categoryService;
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
     * Register the  Category
     * 
     * @return type array
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function registerAction(Request $request)
    {
        $screenName = 'categories';
        $errorValue = 0;
        $categoryDeviceService = $this->getCategoryService();
        $this->session = $request->getSession();
        if ($request->isMethod('GET')) {
            $id = $request->query->get('deviceId');
            if (!empty($id)) {
                $categoryDevice = $categoryDeviceService->findOne($id);
            }
        } else if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $name = $data['addCategories']['name'];
            $valid = $categoryDeviceService->findOneName($name);
            if (!empty($valid)) {
                $errorValue = 1;
            }
        $id = $data['addCategories']['id'];
        if ($id) {
            $valid = $categoryDeviceService->findByIdName($id, $name);
            if ($valid == 1) {
                $errorValue = 1;
            } else {
                $errorValue = 0;
            }
            $categoryDevice = $categoryDeviceService->findOne($id);
        } else {
            $categoryDevice = new Category();
        }
        }
        $addCategoriesForm = $this
                    ->createForm(new AddCategoriesForm(), $categoryDevice);
        if ($request->isMethod('POST')) {
            $addCategoriesForm->handleRequest($request);
            if ($addCategoriesForm->isValid()) {
                if ($errorValue == 0) {

                    $categoryDeviceService->register($categoryDevice);
                }
                $addCategoriesForm = $this->getEmptyForm();
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

        return $this
           ->render('VlreleasesUserBundle:MobileDevice:addCategories.html.twig',
                    array(
                    'addCategoriesForm' => $addCategoriesForm->createView(),
                    'userName' => $this->session->get('userName'),
                    'userType' => $this->session->get('userType'),
                    'userRole' => $this->session->get('userRole'),
                    'errorValue' => $errorValue
                    )
        );
    }

    /**
     * creates a empty form
     * 
     * @return addCategoryForm object
     */
    private function getEmptyForm() 
    {
        $categoryDevice = new Category();
        $addCategoriesForm = $this
                ->createForm(new AddCategoriesForm(), $categoryDevice);
        
        return $addCategoriesForm;
    }
    
    /**
     * Loads a new addCategory Form.
     * 
     * @return addCategoryForm 
     */
    public function clickRegisterAction()
    {
        $addCategoriesForm = $this->getEmptyForm();
        
        return $this
           ->render('VlreleasesUserBundle:MobileDevice:addCategories.html.twig',
                    array(
                    'addCategoriesForm' => $addCategoriesForm->createView()));
    }

    /**
     * List the  Categories
     * 
     * @return type array
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function listDeviceAction(Request $request)
    {
        $screenName = 'categories';
        $this->session = $request->getSession();
        $criteria = array();
        $data = $request->request->all();
        $categoryService = $this->getCategoryService();
        $result = $categoryService->findBy($criteria);
        $roleId = $this->session->get('userRole');
        $userService = $this->get('UserService');
        $userData['userRole'] = $roleId;
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));

        return $this
        ->render('VlreleasesUserBundle:MobileDevice:displayCategoryList.html.twig', 
                array('userData' => $userData,
                    'categoryListData' => $result,
                    'userName' => $this->session->get('userName'),
                    'userType' => $this->session->get('userType'),
        ));
    }

    /**
     * Searches a category and set new data after editing.
     * 
     * @return JsonResponse
     * 
     */
    public function listDeviceNameAction() {
        $criteria = array();
        $categoryService = $this->getCategoryService();
        $result = $categoryService->findBy($criteria);
        foreach ($result as $categoryDevice) {
            $deviceData[] = array('id' => $categoryDevice->getId(),
                'name' => $categoryDevice->getName());
        }
        $response = new JsonResponse();
        $response->setData($deviceData);

        return $response;
    }

}
