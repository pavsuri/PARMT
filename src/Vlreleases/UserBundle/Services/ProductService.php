<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class ProductService {

    /**
     * session 
     * 
     * @var object 
     */
    private $session;

    /**
     * user id
     * 
     * @var integer 
     */
    private $userId;

    /**
     * Get the category name.
     * 
     * @var object 
     */
    private $category;

    /**
     * user Repository
     * 
     * @var object 
     */
    private $userRepository;

    /**
     * current user
     * 
     * @var string
     */
    private $currentUser;

    /**
     * mobile rpository
     * 
     * @var object
     */
    private $mobileDeviceRepository;

    /**
     * Constructor
     */
    public function __construct($em, $session) {

        $this->em = $em;
        $this->userRepository = $em->getRepository('VlreleasesUserBundle:User');
        $this->session = $session;
        $this->userId = $this->session->get('userId');
        $this->currentUser = $this->getCurrentUser();
        $this->mobileDeviceRepository = $em->getRepository('VlreleasesUserBundle:Product');
        $this->productQueueRepository = $em->getRepository('VlreleasesUserBundle:ProductQueue');
        $this->category = $em->getRepository('VlreleasesUserBundle:Category');
    }

    /**
     * Returns the current user.
     * 
     * @return \Vlreleases\UserBundle\Entity\User
     */
    public function getCurrentUser() {
        return $this->userRepository->findOneById($this->userId);
    }

    /**
     * Returns the user.
     * 
     * @param integer $id
     * 
     * @return \Vlreleases\UserBundle\Entity\User
     */
    public function getUser($id) {
        if ($id > 0) {
            $user = $this->userRepository->findOneById($id);
        }
        return $user;
    }

    /**
     * Returns the mobile os.
     * 
     * @param integer $id
     * 
     * @return \Vlreleases\UserBundle\Entity\Category
     */
    public function getCategory($id) {
        if ($id > 0) {
            $category = $this->category->findOneById($id);
        }
        return $category;
    }

    /**
     * Persist the mobile .
     * 
     * @param \Vlreleases\UserBundle\Entity\Product $product
     * 
     * @throws Exception
     */
    public function save($product) {

        try {
            $this->em->persist($product);
            $this->em->flush();
            return true;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * Prepare the mobile  for persist.
     * 
     * @param \Vlreleases\UserBundle\Entity\Category $category
     * 
     * @return boolean
     */
    public function register($product) {

        if (!$product->getId()) {
            $product->setCreatedDate(new \DateTime());
        }
        $product->setLastModifiedDate(new \DateTime());
        $product->setAvailable(1);
        $product->setCreatedBy($this->getCurrentUser());
        $this->save($product);
    }

    /**
     * Prepare the mobile  before persistance.
     * 
     * @param array $data
     * 
     * @return \Vlreleases\UserBundle\Entity\Product
     */
    public function prepareProduct(array $data) {
        if ($data['id'] > 0) {
            $product = $this->mobileDeviceRepository->findOneById($data['id']);
        } else {
            $product = new \Vlreleases\UserBundle\Entity\Product();
            $product->setCreateddate(new \DateTime());
        }

        //set all the properties of the entities

        $name = $this->getCategory($data['name']);
        $product->setName($name);
        $product->setProductName($data['productname']);
        $product->setOs($data['os']);
        $product->setBrand($data['brand']);
        $product->setSerialNumber($data['serialNumber']);
        $product->setVersion($data['version']);
        $product->setDescription($data['description']);
        $product->setCreatedBy($this->getCurrentUser());
        $product->setActive($data['active']);
        $product->setStatus($data['status']);

        return $product;
    }

    public function findBy(array $criteria) {
        $return = $this->mobileDeviceRepository->findBy($criteria);

        return $return;
    }

    public function findOne($id) {
        return $this->mobileDeviceRepository->findOneBy(array('id' => $id));
    }

    public function findOneName($productname) {
        return $this->mobileDeviceRepository->findOneBy(array('productname' => $productname));
    }

    public function findByIdName($id, $productname) {
        $userTaskRepository = $this->em->getRepository('VlreleasesUserBundle:UserTask');
        return $userTaskRepository->findDuplicateProducts($id, $productname);
    }

    /**
     * 
     * @param integer $id
     * @return boolean
     */
    public function delete($id) {
        $product = $this->mobileDeviceRepository->find($id);
        try {
            $this->em->remove($product);
            $this->em->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
        return false;
    }

    /**
     * 
     * @param int $id
     * @param \DateTime $expectedEndTime
     * @return boolean
     */
    public function take($id, \DateTime $expectedEndTime) {
        $device = $this->mobileDeviceRepository->find($id);
        $this->deleteAssigneeFromQueue($device);
        $deviceStatus = new \Vlreleases\UserBundle\Entity\ProductStatus();
        $deviceStatus->setExpectedEndTime($expectedEndTime);
        $deviceStatus->setStartTime(new \DateTime());
        $deviceStatus->setProduct($device);
        $device->setDeviceStatus($deviceStatus);
        $device->setAvailable(false);
        $deviceStatus->setAssignee($this->getCurrentUser());
        return $this->save($device);
    }

    /**
     * 
     * @param \Vlreleases\UserBundle\Entity\Product $device
     * @return boolean
     */
    private function deleteAssigneeFromQueue(\Vlreleases\UserBundle\Entity\Product $device) {
        $queue = $this->productQueueRepository->findOneBy(
                array('product' => $device, 'requester' => $this->getCurrentUser())
        );

        if ($queue instanceOf \Vlreleases\UserBundle\Entity\ProductQueue) {

            $this->em->remove($queue);

            $this->em->flush();
        }
        return true;
    }

    /**
     * 
     * @param int $id
     * @param \DateTime $submittedTime
     * @return boolean
     */
    public function returnDevice($id, \DateTime $submittedTime) {
        $device = $this->mobileDeviceRepository->find($id);
        $deviceStatus = new \Vlreleases\UserBundle\Entity\ProductStatus();
        $deviceStatus = $device->getDeviceStatus();
        $deviceStatus->setSubmittedTime(new \DateTime());
        $device->setDeviceStatus($deviceStatus);
        $device->setAvailable(true);

        return $this->save($device);
    }

    /**
     * 
     * @param integer $id
     * @return boolean
     */
    public function cancelRequestDevice($id) {
        $device = $this->mobileDeviceRepository->find($id);
        return $this->deleteAssigneeFromQueue($device);
    }

    /**
     * 
     * @param int $id
     * @return boolean
     */
    public function requestDevice($id) {
        $device = $this->mobileDeviceRepository->find($id);
        $deviceQueue = new \Vlreleases\UserBundle\Entity\ProductQueue();
        $deviceQueue->setStartTime(new \DateTime());
        $deviceQueue->setProduct($device);
        $deviceQueue->setRequester($this->getCurrentUser());
        return $this->saveRequester($deviceQueue);
    }

    /**
     * Persist the product device.
     * 
     * @param \Vlreleases\UserBundle\Entity\ProductDeviceQueue $requester
     * 
     * @throws Exception
     */
    public function saveRequester(\Vlreleases\UserBundle\Entity\ProductQueue $requester) {
        try {
            $this->em->persist($requester);
            $this->em->flush();
            return true;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public function getRequesterList($id) {
        $queueRepository = $this->em->getRepository('VlreleasesUserBundle:ProductQueue');
        return $queueRepository->findByProduct($id);
    }

    /**
     * 
     * @param \Vlreleases\UserBundle\Entity\Product $device
     * @return boolean
     */
    public function showRaiseHandOption(\Vlreleases\UserBundle\Entity\Product $device) {
        $queue = $this->productQueueRepository->findOneBy(
                array('product' => $device, 'requester' => $this->getCurrentUser())
        );
        if ($device->getAvailable()) {
            return false;
        }
        if ($queue instanceof \Vlreleases\UserBundle\Entity\ProductQueue) {
            return false;
        }

        if($device->getDeviceStatus())
        {
            if (
                ($this->getCurrentUser()->getId() == $device->getDeviceStatus()->getAssignee()->getId()) &&
                (!$device->getDeviceStatus()->getSubmittedTime() instanceof \DateTime)
        ) {
            return false;
        }
        }
        
        return true;
    }

    /**
     * 
     * @param \Vlreleases\UserBundle\Entity\Product $device
     * @return boolean
     */
    public function isLoggedInUserIsInQueue(\Vlreleases\UserBundle\Entity\Product $device) {
        $queue = $this->productQueueRepository->findOneBy(
                array('product' => $device, 'requester' => $this->getCurrentUser())
        );
        if ($queue instanceof \Vlreleases\UserBundle\Entity\ProductQueue) {
            return true;
        }
        return false;
    }

}
?>
 

