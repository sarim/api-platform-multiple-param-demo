<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $book1 = new Book();
        $book1->setTitle('Pride and Prejudice');

        $book2 = new Book();
        $book2->setTitle('The Catcher in the Rye');

        $manager->persist($book1);
        $manager->persist($book2);

        $manager->flush();
    }
}
