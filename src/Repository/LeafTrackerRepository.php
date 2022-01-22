<?php

namespace App\Repository;

use App\Entity\LeafTracker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LeafTracker|null find($id, $lockMode = null, $lockVersion = null)
 * @method LeafTracker|null findOneBy(array $criteria, array $orderBy = null)
 * @method LeafTracker[]    findAll()
 * @method LeafTracker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LeafTrackerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LeafTracker::class);
    }

    // /**
    //  * @return LeafTracker[] Returns an array of LeafTracker objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LeafTracker
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
