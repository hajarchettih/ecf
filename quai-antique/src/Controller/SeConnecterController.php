<?php

namespace App\Controller;

use App\Entity\SeConnecter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;

class SeConnecterController extends AbstractController
{
    private $passwordEncoder;
    private $entityManager;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->entityManager = $entityManager;
    }

    #[Route('/register', name: 'register', methods: ['POST'])]
    public function register(Request $request): Response
    {
        $seConnecter = new SeConnecter();

        // Récupérer les données de la requête
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        // Hacher le mot de passe
        $hashedPassword = $this->passwordEncoder->encodePassword($seConnecter, $password);

        // Définir les valeurs de l'entité SeConnecter
        $seConnecter->setEmail($email);
        $seConnecter->setMotDePasse($hashedPassword);

        // Enregistrer l'entité en base de données
        $this->entityManager->persist($seConnecter);
        $this->entityManager->flush();

        // Autres actions (redirection, réponse JSON, etc.)

        return new Response('Enregistrement effectué avec succès');
    }
}
