<?php

namespace App\Tests;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\User;
use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ProduitUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $produit = new Produit();
        $datetime = new DateTime();
        $datetime = new DateTimeImmutable();
        $categorie = new Categorie();
        $user = new User();

        $produit->setNom('nom')
            ->setUser($user)
            ->setLieu('lieu')
            ->setRef('ref')
            ->setPrix(20.20)
            ->setDateAchat($datetime)
            ->setCreateAt($datetime)
            ->setCategorie('categorie')
            ->setSlug('slug')
            ->setFileAchat('file')
            ->setManuel(true)
            ->setConseil('conseil');

        $this->assertTrue($produit->getNom() === 'nom');
        $this->assertTrue($produit->getUser() === $user);
        $this->assertTrue($produit->getLieu() === 'lieu');
        $this->assertTrue($produit->getRef() === 'ref');
        $this->assertTrue($produit->getPrix() == 20.20);
        $this->assertTrue($produit->getDateAchat() === $datetime);
        $this->assertTrue($produit->getCreateAt() === $datetime);
        $this->assertTrue($produit->getCategorie() === 'categorie');
        $this->assertTrue($produit->getSlug() === 'slug');
        $this->assertTrue($produit->getFileAchat() === 'file');
        $this->assertTrue($produit->getManuel() === true);
        $this->assertTrue($produit->getConseil() === 'conseil');
    }
}
