<?php

namespace App\Models;

use DateTime;

class Professor extends Human
{

    private array $subjects;
    private string $schoolname;


    public function __construct(string $lastname, string $firstname, DateTime $birthdate, array $subjects = [], string $schoolname = '')
    {
        parent::__construct($lastname, $firstname, $birthdate);
        $this->subjects = $subjects;
        $this->schoolname = $schoolname;
    }

    /* -----------
     GETTER/SETTER
    ------------*/

    public function getSubjects(): array
    {
        return $this->subjects;
    }
    public function getSchoolName(): string
    {
        return $this->schoolname;
    }

    public function setSubjects($array): void
    {
        $this->subjects = $array;
    }
    public function setSchoolName($name): void
    {
        $this->schoolname = $name;
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
        echo parent::presentation() . "J'enseigne dans l'école {$this->schoolname} les matières suivantes : " . $this->displaySubjects() . "<br>";
    }
}
