<?php

namespace App\Entity;

use App\Repository\UsersBirthdayRepository;
use Cassandra\Date;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersBirthdayRepository::class)]
class UsersBirthday
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?string $birthday = null;

    #[ORM\Column]
    private ?int $old = null;

    #[ORM\Column]
    private ?int $pension = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getOld(): ?int
    {
        return $this->old;
    }

    public function setOld(?int $old): UsersBirthday
    {
        $this->old = $old;
        return $this;
    }

    public function getPension(): ?int
    {
        return $this->pension;
    }

    public function setPension(?int $pension): self
    {
        $this->pension = $pension - $this->getOld();

        return $this;
    }

}
