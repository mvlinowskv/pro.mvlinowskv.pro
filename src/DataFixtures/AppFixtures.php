<?php

namespace App\DataFixtures;

use App\Entity\UsersBirthday;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    const USERS = [
        [
            'birthday' => '05.11.1989',
            'name' => 'Jan Kowalski',
            'old' => 34,
        ],
        [
            'birthday' => '11.05.1975',
            'name' => 'Piotr Grabowski',
            'old' => 48,
        ],
        [
            'birthday' => '30.03.1970',
            'name' => 'Bartosz Bartosiewicz',
            'old' => 53,
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::USERS as $userData){

            $user = new UsersBirthday();
            $user->setName($userData['name']);
            $user->setBirthday($userData['birthday']);
            $user->setBirthday($userData['birthday']);
            $user->setOld($userData['old']);
            $user->setPension(65);

            $manager->persist($user);
        }

        $manager->flush();
    }
}
