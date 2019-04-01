<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $briefnr;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chauffeur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Truck", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $truck;

    /**
     * @ORM\Column(type="float")
     */
    private $kubs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $laadpunt;

    /**
     * @ORM\Column(type="time")
     */
    private $vertrektijd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eindpunt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $evenement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $klant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBriefnr(): ?int
    {
        return $this->briefnr;
    }

    public function setBriefnr(int $briefnr): self
    {
        $this->briefnr = $briefnr;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getChauffeur(): ?User
    {
        return $this->chauffeur;
    }

    public function setChauffeur(?User $chauffeur): self
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    public function getTruck(): ?Truck
    {
        return $this->truck;
    }

    public function setTruck(?Truck $truck): self
    {
        $this->truck = $truck;

        return $this;
    }

    public function getKubs(): ?float
    {
        return $this->kubs;
    }

    public function setKubs(float $kubs): self
    {
        $this->kubs = $kubs;

        return $this;
    }

    public function getLaadpunt(): ?string
    {
        return $this->laadpunt;
    }

    public function setLaadpunt(string $laadpunt): self
    {
        $this->laadpunt = $laadpunt;

        return $this;
    }

    public function getVertrektijd(): ?\DateTimeInterface
    {
        return $this->vertrektijd;
    }

    public function setVertrektijd(\DateTimeInterface $vertrektijd): self
    {
        $this->vertrektijd = $vertrektijd;

        return $this;
    }

    public function getEindpunt(): ?string
    {
        return $this->eindpunt;
    }

    public function setEindpunt(string $eindpunt): self
    {
        $this->eindpunt = $eindpunt;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }

    public function getKlant(): ?User
    {
        return $this->klant;
    }

    public function setKlant(?User $klant): self
    {
        $this->klant = $klant;

        return $this;
    }
}
