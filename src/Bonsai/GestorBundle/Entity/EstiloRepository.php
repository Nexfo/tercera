<?php

namespace Bonsai\GestorBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EstiloRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EstiloRepository extends EntityRepository
{
	public function findAllOrdenadosPorNombre()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.nombre FROM BonsaiGestorBundle:Estilo p ORDER BY p.nombre ASC'
            )
            ->getResult();
    }
}
