<?php

namespace App\DataFixtures;

// agregar la entidad
use App\Entity\User;

// no es necesario usarla por que ya la declaramos abajo,para trabjar con fechas
// use \DateTimeImmutable;

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

    	// ahy un error con las fixtures con postgresql, no se carga la data,solo funciona en mysql

    	$roles[] = 'ROLE_ADMIN';

    	// aqui importamos y creamos una instancia de \DateTimeImmutable
    	$created = new \DateTimeImmutable("now");
    	$updated = new \DateTimeImmutable("now");
    	$lastLogin = new \DateTimeImmutable("now");

        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
		
		$user->setUsername('Issues');
		$user->setRoles($roles);

		$user->setPassword($this->passwordEncoder->encodePassword(
			$user,
			'12345678'
		));

		$user->setEmail('portafoliocastro1989@gmail.com');		

		$user->setMembership('t');

		$user->setCreatedAt($created);
		$user->setUpdatedAt($updated);
		$user->setLastLogin($lastLogin);

		$user->setIsVerified('t');		

		$manager->persist($user);
		

		$manager->flush();
    }
}
