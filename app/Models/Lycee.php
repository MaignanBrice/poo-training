<?php

namespace App\Models;

final class Lycee extends School {

    private static array $gradesList = ['Seconde', 'Premiere', 'Terminale'];
    private static string $schoolType = 'Lycée';

    public function __construct(string $schoolname, string $town)
    {
        parent::__construct($schoolname, $town);
    }

    public static function getSchoolType(): string {
        return self::$schoolType;
    }

    public static function getGradesList(): array {
        return self::$gradesList;
    }

    public function isGradeAvailable (string $grade): bool {
        return in_array($grade, self::$gradesList);
    }

}