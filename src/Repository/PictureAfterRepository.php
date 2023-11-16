<?php

namespace App\Repository;

use App\Entity\PictureAfter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictureAfter>
 *
 * @method PictureAfter|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictureAfter|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictureAfter[]    findAll()
 * @method PictureAfter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictureAfterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictureAfter::class);
    }

//    /**
//     * @return PictureAfter[] Returns an array of PictureAfter objects
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

//    public function findOneBySomeField($value): ?PictureAfter
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
