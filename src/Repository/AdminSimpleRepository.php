<?php

namespace App\Repository;

use App\Entity\AdminSimple;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AdminSimple|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminSimple|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminSimple[]    findAll()
 * @method AdminSimple[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminSimpleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminSimple::class);
    }

    // /**
    //  * @return AdminSimple[] Returns an array of AdminSimple objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdminSimple
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
