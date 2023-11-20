<?php

namespace App\Models;

abstract class School
{

    protected string $schoolname;
    protected string $town;
    

    public function __construct(string $schoolname, string $town)
    {
        $this->schoolname = $schoolname;
        $this->town = $town;
    }

    /* -----------
     GETTER/SETTER
    ------------*/

    public function setSchoolName($string): void
    {
        $this->schoolname = $string;
    }
    public function getSchoolName(): string
    {
        return $this->schoolname;
    }
    public function setTown($town): void
    {
        $this->town = $town;
    }
    public function getTown(): string
    {
        return $this->town;
    }

    
}
