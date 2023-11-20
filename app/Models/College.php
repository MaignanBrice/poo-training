<?php

namespace App\Models;

final class College extends School {

    private static array $gradesList = ['6ème', '5ème', '4ème', '3ème'];
    private static string $schoolType = 'College';

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