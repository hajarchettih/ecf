<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $INT = null;

    #[ORM\Column(length: 50)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_reservation = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heure_reservation = null;

    #[ORM\Column]
    private ?int $nombre_personne = null;

    #[ORM\Column(length: 15)]
    private ?string $telephone_client = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $allergie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getINT(): ?int
    {
        return $this->INT;
    }

    public function setINT(int $INT): self
    {
        $this->INT = $INT;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getHeureReservation(): ?\DateTimeInterface
    {
        return $this->heure_reservation;
    }

    public function setHeureReservation(\DateTimeInterface $heure_reservation): self
    {
        $this->heure_reservation = $heure_reservation;

        return $this;
    }

    public function getNombrePersonne(): ?int
    {
        return $this->nombre_personne;
    }

    public function setNombrePersonne(int $nombre_personne): self
    {
        $this->nombre_personne = $nombre_personne;

        return $this;
    }

    public function getTelephoneClient(): ?string
    {
        return $this->telephone_client;
    }

    public function setTelephoneClient(string $telephone_client): self
    {
        $this->telephone_client = $telephone_client;

        return $this;
    }

    public function getAllergie(): ?string
    {
        return $this->allergie;
    }

    public function setAllergie(?string $allergie): self
    {
        $this->allergie = $allergie;

        return $this;
    }
}
