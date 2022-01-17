<?php
namespace Repositories;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository {

    public function getAllMyBooks () {
        $qb = $this->_em->createQueryBuilder();

        $qb
            ->select('b') // поля, которые достаем
            ->from('\Book', 'b')
            ->where('b.id > ?1')
            ->orderBy('b.id', 'DESC')
            ->setFirstResult(1) // аналог OFFSET
            ->setMaxResults(1)
            ->setParameter(1,1);

        $query = $qb->getQuery();
        $result = $query->getResult();

        return $result;
    }

}