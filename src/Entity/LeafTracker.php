<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LeafTrackerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeafTrackerRepository::class)]
#[ApiResource]
class LeafTracker
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $walletAddress;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $stepNumber;

    #[ORM\Column(type: 'date')]
    private $startDate;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $lastRecordDate;

    #[ORM\Column(type: 'float', nullable: true)]
    private $gpsLat;

    #[ORM\Column(type: 'float')]
    private $gpsLong;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $wifiRadar;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ip;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $apiKey;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWalletAddress(): ?string
    {
        return $this->walletAddress;
    }

    public function setWalletAddress(string $walletAddress): self
    {
        $this->walletAddress = $walletAddress;

        return $this;
    }

    public function getStepNumber(): ?int
    {
        return $this->stepNumber;
    }

    public function setStepNumber(?int $stepNumber): self
    {
        $this->stepNumber = $stepNumber;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getLastRecordDate(): ?\DateTimeInterface
    {
        return $this->lastRecordDate;
    }

    public function setLastRecordDate(?\DateTimeInterface $lastRecordDate): self
    {
        $this->lastRecordDate = $lastRecordDate;

        return $this;
    }

    public function getGpsLat(): ?float
    {
        return $this->gpsLat;
    }

    public function setGpsLat(?float $gpsLat): self
    {
        $this->gpsLat = $gpsLat;

        return $this;
    }

    public function getGpsLong(): ?float
    {
        return $this->gpsLong;
    }

    public function setGpsLong(float $gpsLong): self
    {
        $this->gpsLong = $gpsLong;

        return $this;
    }

    public function getWifiRadar(): ?string
    {
        return $this->wifiRadar;
    }

    public function setWifiRadar(?string $wifiRadar): self
    {
        $this->wifiRadar = $wifiRadar;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setApiKey(?string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }
}
