<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class CategoryService {

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
     * mobile repository
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
        $this->mobileDeviceRepository = $em->getRepository('VlreleasesUserBundle:Category');
        $this->currentUser = $this->getCurrentUser();
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
     * Persist the category .
     * 
     * @param \Vlreleases\UserBundle\Entity\Category $category
     * 
     * @throws Exception
     */
    public function save($category) {
        try {
            $this->em->persist($category);
            $this->em->flush();
            return true;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * Prepare the category  for persist.
     * 
     * @param \Vlreleases\UserBundle\Entity\Category $category
     * 
     * @return boolean
     */
    public function register($category) {
        if (!$category->getId()) {
            $category->setCreatedDate(new \DateTime());
        }
        $category->setLastModifiedDate(new \DateTime());
        $category->setAvailable(1);
        $category->setCreatedBy($this->getCurrentUser());
        $this->save($category);
    }

    /**
     * Prepare the category  before persistance.
     * 
     * @param array $data
     * 
     * @return \Vlreleases\UserBundle\Entity\Category
     */
    public function prepareCategory(array $data) {
        if ($data['id'] > 0) {
            $category = $this->mobileDeviceRepository->findOneById($data['id']);
        } else {
            $category = new \Vlreleases\UserBundle\Entity\Category();
            $category->setCreateddate(new \DateTime());
        }

        //set all the properties of the entities
        $category->setName($data['category name']);

        $category->setActive($data['active']);
        $category->setStatus($data['status']);
        // $category->setCreatedBy($this->getCurrentUser());


        return $category;
    }

    public function findBy(array $criteria) {
        $return = $this->mobileDeviceRepository->findBy($criteria);
        //var_dump($return);die();
        return $return;
    }

    public function findOne($id) {
        return $this->mobileDeviceRepository->findOneBy(array('id' => $id));
    }

    public function findOneName($name) {
        return $this->mobileDeviceRepository->findOneBy(array('name' => $name));
    }

    public function findByIdName($id, $name) {
        $userTaskRepository = $this->em->getRepository('VlreleasesUserBundle:UserTask');
        return $userTaskRepository->findDuplicateCategories($id, $name);
    }

    public function delete($id) {
        $category = $this->mobileDeviceRepository->find($id);
        try {
            $this->em->remove($category);
            $this->em->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
        return false;
    }

}
