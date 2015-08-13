<?php

// GqAus/UserBundle/Lib/Paginator.php

namespace Vlreleases\UserBundle\Lib;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator as DoctrinePaginator;

class Paginator {

    private $count;
    private $currentPage;
    private $totalPages;

    /**
     * paginate results
     *
     * @param $query - naming is a bit off as it can be a NativeQuery OR
     *  QueryBuilder, we'll survive eventually
     * @param int $page
     * @param $limit
     * @return array
     */
    public function paginate($query, $page, $limit, $userCount)
    {
        $totalPages = '';
        // setting current page
        $this->currentPage = $page;
        // set the limit
        $limit = (int) $limit;
        $this->count = $userCount;

        $this->totalPages = ceil($this->count / $limit);
        $newquery = $query
                ->setFirstResult(($page - 1) * $limit)
                ->setMaxResults($limit)
                ->getQuery();

        $paginator = new DoctrinePaginator($newquery);
        $paginator->setUseOutputWalkers(false);

        // set total pages
        return $newquery->getResult();
    }

    /**
     * get current page
     *
     * @return int
     */
    public function getCurrentPage() {
        return $this->currentPage;
    }

    /**
     * get total pages
     *
     * @return int
     */
    public function getTotalPages() {
        return $this->totalPages;
    }

    /**
     * get total result count
     *
     * @return int
     */
    public function getCount() {
        return $this->count;
    }

}

?>