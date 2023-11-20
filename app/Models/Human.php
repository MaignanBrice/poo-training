<?php

namespace App\Models;

use \DateTime;

abstract class Human {


    private string $lastname;
    private string $firstname;
    private DateTime $birthdate;

    public function __construct(string $lastname, string $firstname, DateTime $birthdate) 
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
    }

    /* -----------
     GETTER/SETTER
    ------------*/

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    /* -----------
        METHODS
    ------------*/


    public function displayAge(): int
    {
        return "{$this->birthdate->diff(new DateTime)->y}";
    }


    public function presentation(): void
    {
        echo "Bonjour, je m'appelle {$this->lastname} {$this->firstname}, j'ai " . $this->displayAge() . " ans.";
    }

}