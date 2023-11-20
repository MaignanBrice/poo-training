<?php

namespace App\Models;

use DateTime;

final class Professor extends Human
{

    private array $subjects;
    private School $school;


    public function __construct(string $lastname, string $firstname, DateTime $birthdate, array $subjects = [], School $school = NULL)
    {
        parent::__construct($lastname, $firstname, $birthdate);
        $this->subjects = $subjects;
        $this->school = $school;
    }

    /* -----------
     GETTER/SETTER
    ------------*/

    public function getSubjects(): array
    {
        return $this->subjects;
    }
    public function getSchoolName(): School
    {
        return $this->school;
    }

    public function setSubjects(array $array): void
    {
        $this->subjects = $array;
    }
    public function setSchool(School $school): void
    {
        $this->school = $school;
    }

    /* -----------
        METHODS
    ------------*/

    public function addSubject(string $subject): void
    {
        $this->subjects[] = $subject;
    }

    public function removeSubject(string $subject)
    {
        $index = array_search($subject, $this->subjects);
        array_splice($this->subjects, $index, 1);
    }

    public function displaySubjects(): string
    {
        return implode(', ', $this->subjects);
    }

    public function presentation(): void
    {
        echo parent::presentation() . "J'enseigne dans l'école {$this->school->getSchoolName()} les matières suivantes : " . $this->displaySubjects() . "<br>";
    }
}
