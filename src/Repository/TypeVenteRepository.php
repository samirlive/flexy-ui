<?php

namespace App\Repository;

use App\Entity\TypeVente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeVente|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeVente|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeVente[]    findAll()
 * @method TypeVente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeVenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeVente::class);
    }

    // /**
    //  * @return TypeVente[] Returns an array of TypeVente objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeVente
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
