<?php

namespace App\Repository;

use App\Entity\GeoPosition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GeoPosition|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeoPosition|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeoPosition[]    findAll()
 * @method GeoPosition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeoPositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeoPosition::class);
    }

    // /**
    //  * @return GeoPosition[] Returns an array of GeoPosition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GeoPosition
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
