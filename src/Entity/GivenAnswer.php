<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GivenAnswerRepository")
 */
class GivenAnswer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\QuestionAnswer")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question_answer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $answer_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionAnswer(): ?QuestionAnswer
    {
        return $this->question_answer;
    }

    public function setQuestionAnswer(?QuestionAnswer $question_answer): self
    {
        $this->question_answer = $question_answer;

        return $this;
    }

    public function getAnswerValue(): ?int
    {
        return $this->answer_value;
    }

    public function setAnswerValue(?int $answer_value): self
    {
        $this->answer_value = $answer_value;

        return $this;
    }
}
