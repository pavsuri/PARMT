<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\MobileDevice\AddDeviceForm;
use Vlreleases\UserBundle\Form\MobileDevice\SearchDeviceForm;
use Vlreleases\UserBundle\Entity\MobileDevice;

class MobileDeviceController extends Controller
{
    /**
     * set the session.
     * 
     * @var session 
     */
    private $session;

    /**
     * Mobile Device Service
     * 
     * @var \Vlreleases\UserBundle\Services\MobileDeviceService
     */
    private $mobileDeviceService;
    
    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;

    public function indexAction(Request $request) {
        $criteria = array();
        $session = $request->getSession();
        $user = $this->getUserService()->findOneById($session->get('userId'));
        $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        $userData['userRole'] = $session->get('userRole');
        $addDeviceForm = $this->createForm(new AddDeviceForm());
        $searchDeviceForm = $this->createForm(new SearchDeviceForm());
        $mobileService = $this->getMobileDeviceService();
        $result = $mobileService->findBy($criteria);

	if ($request->isMethod('GET')) {
            $id = $request->query->get('deviceId');
            if (!empty($id)) {
                $this->getMobileDeviceService()->delete($id);
            }
	}
        
	return $this
              ->render('VlreleasesUserBundle:MobileDevice:deviceList.html.twig',
                        array(
            'userName' => $session->get('userName'),
            'deviceListData' => $result,
            'addDeviceForm' => $addDeviceForm->createView(),
            'searchDeviceForm' => $searchDeviceForm->createView(),
            'userType' => $session->get('userType'),
            'userData' => $userData,
        ));
    }

    /**
     * Retuns the Mobile Device Service.
     * 
     * @return \Vlreleases\UserBundle\Services\MobileDeviceService
     */
    private function getMobileDeviceService()
    {
       if (!$this->mobileDeviceService) {
           $this->mobileDeviceService = $this->get('MobileDeviceService');
        }
        return $this->mobileDeviceService;
    }
    
    /**
     * Retuns the UserService.
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
     * Register the mobile device.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function registerAction(Request $request) {

        $mobileDeviceService = $this->getMobileDeviceService();
        $this->session = $request->getSession();
        if ($request->isMethod('GET')) {
            $id = $request->query->get('deviceId');
           
            if (!empty($id)) {
                $mobileDevice = $mobileDeviceService->findOne($id);
            }
        } else if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $id = $data['addDevice']['id'];
            if ($id) {
                $mobileDevice = $mobileDeviceService->findOne($id);
            } else {
             $mobileDevice = new MobileDevice();
            }
        } 
        $addDeviceForm = $this->createForm(new AddDeviceForm(), $mobileDevice);
        if ($request->isMethod('POST')) {
			
            $addDeviceForm->handleRequest($request);
            if ($addDeviceForm->isValid()) {
                $mobileDeviceService->register($mobileDevice);
                $addDeviceForm = $this->getEmptyForm();
            }
           
        }
        
        return $this
          ->render('VlreleasesUserBundle:MobileDevice:registerDevice.html.twig', 
                    array(
                        'addDeviceForm' => $addDeviceForm->createView(), 
                        'userName' => $this->session->get('userName'),
                        'userType' => $this->session->get('userType'),
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
        $mobileDevice = new MobileDevice();
        $addDeviceForm = $this->createForm(new AddDeviceForm(), $mobileDevice);
        return $addDeviceForm;
    }

    /**
     * Loads a new addDevice Form.
     * 
     * @return addDeviceForm 
     */
    public function clickRegisterAction()
    {
        $addDeviceForm = $this->getEmptyForm();
        
        return $this
          ->render('VlreleasesUserBundle:MobileDevice:registerDevice.html.twig', 
                array(
                    'addDeviceForm' => $addDeviceForm->createView(),
                ));
             
    }   
    
    /**
     * List the  Devices
     * 
     * @return type array
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function listDeviceAction(Request $request)
    {
        $this->session = $request->getSession();
        $criteria = array();
        $data = $request->request->all();
        if ($data) {
            $os = $data['searchDevice']['os'];
            $brand = $data['searchDevice']['brand'];
            $name = $data['searchDevice']['name'];

            if ($os) {
                $criteria['os'] = $os;
            }

            if ($brand) {
                $criteria['brand'] = $brand;
            }

            if ($name) {
                $criteria['name'] = $name;
            }
        }
        $mobileService = $this->getMobileDeviceService();
        $result = $mobileService->findBy($criteria);
        
        return $this
            ->render('VlreleasesUserBundle:MobileDevice:searchList.html.twig',
                    array(
                    'deviceListData' => $result,
                    'userName' => $this->session->get('userName'),
                    'userType' => $this->session->get('userType')
        ));        
    }
    
    /**
     * Search for a particular device
     * 
     * @return type array
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function takeDeviceSearchListAction(Request $request)
    {
        $criteria = array();
        $data = $request->request->all();
        if ($data) {
            $os = $data['searchDevice']['os'];
            $brand = $data['searchDevice']['brand'];
            $name = $data['searchDevice']['name'];

            if ($os) {
                $criteria['os'] = $os;
            }

            if ($brand) {
                $criteria['brand'] = $brand;
            }

            if ($name) {
                $criteria['name'] = $name;
            }
            
            $criteria['active'] = true;
        }
		$mobileService = $this->getMobileDeviceService();
        $result = $mobileService->findBy($criteria);
        $data = array();
        $sno = 1;
        $session = $request->getSession();
        $flag = false;
        foreach ($result as $index => $value) {
            
            $cntrequesters = null;
            $data[$index]['sno'] = $sno;
            $data[$index]['id'] = $value->getId();
            $data[$index]['name'] = $value->getName();
            $data[$index]['brand'] = $value->getBrand()->getName();
            $data[$index]['os'] = $value->getOs()->getName();
            $data[$index]['version'] = $value->getVersion();
            $data[$index]['project'] = $value->getProject()->getName();
            $data[$index]['takenBy'] = 
                   (!$value->getAvailable()) ? ucfirst($value->getDeviceStatus()
                            ->getAssignee()->getUserName()) : null;
            $data[$index]['takenAt'] = 
                   (!$value->getAvailable()) ? $value->getDeviceStatus()
                    ->getStartTime() : null;
            $data[$index]['submittedAt'] = (!$value->getAvailable()) ? $value
                    ->getDeviceStatus()->getEndTime() : null;
            $data[$index]['expectedAt'] = (!$value->getAvailable()) ? $value
                    ->getDeviceStatus()->getExpectedEndTime() : null;
            
            if(count($value->getRequesters())> 0) {
			$cntrequesters = count($value->getRequesters());
		    }
            $data[$index]['queue'] = $cntrequesters;
	    $data[$index]['available'] = $value->getAvailable();
            $data[$index]['showRaiseHandOption'] = $mobileService
                    ->showRaiseHandOption($value);
            $data[$index]['showCancelRequestOption'] = $mobileService
                    ->isLoggedInUserIsInQueue($value);
            if (!$value->getAvailable()) {
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
        ->render('VlreleasesUserBundle:MobileDevice:takeDeviceSearchList.html.twig',
                array(
                    'takeDeviceListData' => $data,
                    'userName' => $session->get('userName'),
                    'userType' => $session->get('userType'),
        ));        
    }
    
    public function listDeviceNameAction()
    {
        $criteria  = array();
        $mobileService = $this->getMobileDeviceService();
        $result = $mobileService->findBy($criteria);
        foreach ($result as $mobileDevice) {
            $deviceData[] = array('id' => $mobileDevice->getId(),
                'name' => $mobileDevice->getName());
        }
            $response = new JsonResponse();
            $response->setData($deviceData); 

            return $response;        
    } 
	
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array 
     */
    public function takeDeviceListAction(Request $request)
    {
        $criteria = array();
        $mobileService = $this->getMobileDeviceService();
        $session = $request->getSession();
        $user = $this->getUserService()->findOneById($session->get('userId'));
        $userData['photo'] = $user->getPersonalProfile()->getPhoto();
		$searchDeviceForm = $this->createForm(new SearchDeviceForm());
        $name = $request->request->get('name');
        $brand = $request->request->get('brand');
        $os = $request->request->get('os');

        if (!is_null($name)) {
           
            $criteria['name'] = $name;
        }

        if (!is_null($os)) {
            $criteria['os'] = $os;
        }

        if (!is_null($brand)) {
            $criteria['brand'] = $brand;
        }
        $criteria['active'] = true;
        $result1= $mobileService->findBy($criteria);
		$data = array();
        $session = $request->getSession();
        $sno = 1;
		
        foreach ($result1 as $index => $value) {
            $flag = false;
			$cntrequesters = null;
            $data[$index]['sno'] = $sno;
            $data[$index]['id'] = $value->getId();
            $data[$index]['name'] = $value->getName();
            $data[$index]['brand'] = $value->getBrand()->getName();
            $data[$index]['os'] = $value->getOs()->getName();
            $data[$index]['version'] = $value->getVersion();
            $data[$index]['project'] = $value->getProject()->getName();
            $data[$index]['takenBy'] = 
                    (!$value->getAvailable()) ? ucfirst($value->getDeviceStatus()
                            ->getAssignee()->getUserName()) : null;
            $data[$index]['takenAt'] =
                    (!$value->getAvailable()) ? $value->getDeviceStatus()
                    ->getStartTime() : null;
            $data[$index]['submittedAt'] = 
                    (!$value->getAvailable()) ? $value->getDeviceStatus()
                    ->getEndTime() : null;
            $data[$index]['expectedAt'] = (!$value->getAvailable()) ? $value
                    ->getDeviceStatus()->getExpectedEndTime() : null;
            if(count($value->getRequesters())> 0) {
				$cntrequesters = count($value->getRequesters());
			}
            
	    $data[$index]['queue'] = $cntrequesters;
            $data[$index]['available'] = $value->getAvailable();
            $data[$index]['showRaiseHandOption'] = $mobileService
                    ->showRaiseHandOption($value);
            $data[$index]['showCancelRequestOption'] = $mobileService
                    ->isLoggedInUserIsInQueue($value);
            if (!$value->getAvailable()) {
                if (
                    ($session->get('userId') == $value->getDeviceStatus()
                        ->getAssignee()->getId()) && 
                    (!$value->getDeviceStatus()
                                ->getEndTime() instanceof \DateTime)
                ) {
                    $flag = true;
                }
            }
            $data[$index]['showReturnOption'] = 
                    (!$value->getAvailable()) ? $flag : false;
            $sno++;
        }
		
        return $this
          ->render('VlreleasesUserBundle:MobileDevice:takeDeviceList.html.twig', 
                  array(
                    'searchDeviceForm' => $searchDeviceForm->createView(),
                    'userName' => $session->get('userName'),
                    'userType' => $session->get('userType'),
                     'userData' => $userData,
					'takeDeviceListData' => $data));
    }
    
    /**
     * take a mobile device.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function takeAction(Request $request)
    {
        $response = new JsonResponse();
        $id =  $request->query->get('deviceId');
        $this->session = $request->getSession();
        $expectedEndTime = new \DateTime();
	$return = array('status' => $this->getMobileDeviceService()
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
        $id =  $request->query->get('deviceId');
        $endTime = new \DateTime();
        $return = array('status' => $this->getMobileDeviceService()
                ->returnDevice($id, $endTime));
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
        $mobileDevice = $this->getMobileDeviceService()->findOne($id);
        $requesters = $mobileDevice->getRequesters();
        
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
                    array('devicename' => $mobileDevice->getName(), 
                        'brand' => $mobileDevice->getBrand()->getName())
                )
            )
        ;
        $this->get('mailer')->send($message);
    }
    
    /**
     * Will send confirmation mail
     * 
     * @param integer $id
     */
    private function sendConfirmationMail($id)
    {
        $mobileDevice = $this->getMobileDeviceService()->findOne($id);
        $user = $this->getUserService()
                ->findOneById($this->session->get('userId'));
        
        $to = $user->getEmail();
        
        $message = \Swift_Message::newInstance()
            ->setSubject('Device Assigned')
            ->setFrom('keerthi.gunda@valuelabs.net')
            ->setTo($to)
            ->setBody(
                $this
                    ->renderView(
               'VlreleasesUserBundle:MobileDevice:mailDeviceAssigned.html.twig',
                    array('devicename' => $mobileDevice->getName(), 
                        'brand' => $mobileDevice->getBrand()->getName())
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
        $id =  $request->query->get('deviceId');
        $return = array('status' => $this->getMobileDeviceService()
                ->requestDevice($id));
		
        $response->setData($return);
        return $response;
    }
     
    /**
     * cancel mobile device request
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function cancelRequestAction(Request $request)
    {
        $response = new JsonResponse();
        $id = $request->query->get('deviceId');
        $return = array('status' => $this->getMobileDeviceService()
                ->cancelRequestDevice($id));
        $response->setData($return);
        return $response;
    }

    /**
     * to get queue list for a mobile device
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function queueListAction(Request $request)
    {                                                                
	    $response = new JsonResponse();
        $id = $request->query->get('deviceId');
		//$searchDeviceForm = $this->createForm(new SearchDeviceForm());
        $result = $this->getMobileDeviceService()->getRequesterList($id);
		
        $data = array();
        foreach ($result as $index => $value) {
            $data[$index]['id'] = $value->getRequester()->getId();
            $data[$index]['name'] = ucfirst($value->getRequester()->getUserName());
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
                  array('queueUserListData' => $data));
        
    }

}

?>
