<?php

namespace App\Repository;

use App\Entity\PictureBefore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictureBefore>
 *
 * @method PictureBefore|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictureBefore|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictureBefore[]    findAll()
 * @method PictureBefore[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictureBeforeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictureBefore::class);
    }

//    /**
//     * @return PictureBefore[] Returns an array of PictureBefore objects
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

//    public function findOneBySomeField($value): ?PictureBefore
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
