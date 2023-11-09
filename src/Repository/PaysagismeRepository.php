<?php

namespace App\Repository;

use App\Entity\Paysagisme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Paysagisme>
 *
 * @method Paysagisme|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paysagisme|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paysagisme[]    findAll()
 * @method Paysagisme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaysagismeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paysagisme::class);
    }

//    /**
//     * @return Paysagisme[] Returns an array of Paysagisme objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Paysagisme
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
