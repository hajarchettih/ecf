<?php

namespace App\Entity;

use App\Repository\ParametreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParametreRepository::class)]
class Parametre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $client = null;

    #[ORM\Column(length: 20)]
    private ?string $mot_de_passe_actuel = null;

    #[ORM\Column(length: 20)]
    private ?string $confirmation_mot_de_passe = null;

    #[ORM\Column(length: 50)]
    private ?string $email_actuel = null;

    #[ORM\Column(length: 50)]
    private ?string $nouvel_email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getMotDePasseActuel(): ?string
    {
        return $this->mot_de_passe_actuel;
    }

    public function setMotDePasseActuel(string $mot_de_passe_actuel): self
    {
        $this->mot_de_passe_actuel = $mot_de_passe_actuel;

        return $this;
    }

    public function getConfirmationMotDePasse(): ?string
    {
        return $this->confirmation_mot_de_passe;
    }

    public function setConfirmationMotDePasse(string $confirmation_mot_de_passe): self
    {
        $this->confirmation_mot_de_passe = $confirmation_mot_de_passe;

        return $this;
    }

    public function getEmailActuel(): ?string
    {
        return $this->email_actuel;
    }

    public function setEmailActuel(string $email_actuel): self
    {
        $this->email_actuel = $email_actuel;

        return $this;
    }

    public function getNouvelEmail(): ?string
    {
        return $this->nouvel_email;
    }

    public function setNouvelEmail(string $nouvel_email): self
    {
        $this->nouvel_email = $nouvel_email;

        return $this;
    }
}
