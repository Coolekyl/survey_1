<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SurveyRepository")
 */
class Survey
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Qeustion", mappedBy="survery", orphanRemoval=true)
     */
    private $qeustions;

    public function __construct()
    {
        $this->qeustions = new ArrayCollection();
    }

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

    /**
     * @return Collection|Qeustion[]
     */
    public function getQeustions(): Collection
    {
        return $this->qeustions;
    }

    public function addQeustion(Qeustion $qeustion): self
    {
        if (!$this->qeustions->contains($qeustion)) {
            $this->qeustions[] = $qeustion;
            $qeustion->setSurvery($this);
        }

        return $this;
    }

    public function removeQeustion(Qeustion $qeustion): self
    {
        if ($this->qeustions->contains($qeustion)) {
            $this->qeustions->removeElement($qeustion);
            // set the owning side to null (unless already changed)
            if ($qeustion->getSurvery() === $this) {
                $qeustion->setSurvery(null);
            }
        }

        return $this;
    }
}
