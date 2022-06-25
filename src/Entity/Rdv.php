<?php

namespace App\Entity;

use App\Repository\RdvRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RdvRepository::class)]
class Rdv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;


    #[ORM\Column(type: 'datetime_immutable')]
    private $DateRDV_at;

    #[ORM\Column(type: 'string', length: 255)]
    private $object;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $service;

    #[ORM\Column(type: 'string', length: 255)]
    private $mail;

    #[ORM\Column(type: 'string', length: 255)]
    private $telephone;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $is_entreprise;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;


    public function __construct(){
        $this->created_at = new DateTimeImmutable();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }


    public function getDateRDVAt(): ?\DateTimeImmutable
    {
        return $this->DateRDV_at;
    }

    public function setDateRDVAt(\DateTimeImmutable $DateRDV_at): self
    {
        $this->DateRDV_at = $DateRDV_at;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function isIsEntreprise(): ?bool
    {
        return $this->is_entreprise;
    }

    public function setIsEntreprise(?bool $is_entreprise): self
    {
        $this->is_entreprise = $is_entreprise;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
