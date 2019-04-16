<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use Faker\Factory;

class UserFixture extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i += 1) {
            $user = new User();
            $user->setFirstName($faker->firstName);
            $user->setLastName($faker->lastName);
            $user->setEmail($faker->email);

            // FIXME: What comm types be again?
            $user->setCommPref('email');
            $user->setCommType('email');
            $user->setLatitude((float) $faker->latitude);
            $user->setLongitude((float) $faker->longitude);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'password'
            ));

            $manager->persist($user);
        }

        $manager->flush();
    }
}
