<?php

namespace SalexUserBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository {

    public function findAllOrderByName() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT u FROM SalexUserBundle:User u ORDER BY u.first_name ASC'
                        )
                        ->getResult();
    }

    public function createFindAllQuery() {
        return $this->_em->getRepository('SalexUserBundle:User')->createQueryBuilder('bp');
    }

}
