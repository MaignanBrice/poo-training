<?php

namespace App\Models;

use \DateTime;


final class Student extends Human
{
    private School $school;
    private string $level;

    public function __construct(string $lastname, string $firstname, DateTime $birthdate, string $level, School $school)
    {
        parent::__construct($lastname, $firstname, $birthdate);
        $this->level = $level;
        $this->school = $school;
    }

    /* -----------
     GETTER SETTER
    ------------*/

    public function setLevel(string $level): void
    {
        $this->level = $level;
    }
    public function getLevel(): string
    {
        return $this->level;
    }
    public function setSchool(School $school): void
    {
        $this->school = $school;
    }
    public function getSchool(): School
    {
        return $this->school;
    }

    /* -----------
        METHODS
    ------------*/

    public function presentation(): void
    {
        echo parent::presentation() . "Je suis élève en classe de {$this->level} à l'école {$this->school->getSchoolName()} <br>";
    }
}
