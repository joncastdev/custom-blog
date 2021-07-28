<?php

namespace App\DataFixtures;

// agregar la entidad
use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

// agregar el encorder para el password
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{

	private $passwordEncoder;

	public function __construct(UserPasswordEncoderInterface $passwordEncoder)
	{
		$this->passwordEncoder = $passwordEncoder;
	}

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();

		$user->setFirstName('jonathan');
		$user->setLastName('castro');
		$user->setEmail('admin@hotmail.com');
		$user->setRoles('ROLE_ADMIN');

		$user->setPassword($this->passwordEncoder->encodePassword(
			$user,
			'12345678'
		));

		$manager->persist($user);
		

		$manager->flush();
    }
}
