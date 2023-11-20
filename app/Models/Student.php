<?php



namespace App\Models;

use \DateTime;


class Student extends Human
{

    private string $level;
    private string $schoolname;

    public function __construct(string $lastname, string $firstname, DateTime $birthdate, string $level, string $schoolname)
    {
        parent::__construct($lastname, $firstname, $birthdate);
        $this->level = $level;
        $this->schoolname = $schoolname;
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
    public function setSchool(string $school): void
    {
        $this->schoolname = $school;
    }
    public function getSchool(): string
    {
        return $this->schoolname;
    }

    /* -----------
        METHODS
    ------------*/

    public function presentation(): void
    {
        echo parent::presentation() . "Je suis élève en classe de {$this->level} à l'école {$this->schoolname} <br>";
    }
}
