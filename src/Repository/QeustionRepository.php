<?php

namespace App\Repository;

use App\Entity\Qeustion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Qeustion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Qeustion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Qeustion[]    findAll()
 * @method Qeustion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QeustionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Qeustion::class);
    }

    // /**
    //  * @return Qeustion[] Returns an array of Qeustion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Qeustion
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
