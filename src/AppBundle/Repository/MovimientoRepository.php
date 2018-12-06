<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MovimientoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MovimientoRepository extends EntityRepository {
    
    
    public function allMovimiento() {
         return $this->getEntityManager()
        ->createQueryBuilder()
        ->select('m')
        ->from('AppBundle:Movimiento', 'm')
        ->leftJoin('m.idusuario','u')
        //->where('u.id = m.idusuario')
        ->getQuery()
        ->getResult();
    }


}
