<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionAnswerRepository")
 */
class QuestionAnswer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Qeustion")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\answer", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $answer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?Qeustion
    {
        return $this->question;
    }

    public function setQuestion(?Qeustion $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?answer
    {
        return $this->answer;
    }

    public function setAnswer(answer $answer): self
    {
        $this->answer = $answer;

        return $this;
    }
}
