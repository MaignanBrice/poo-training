<?php

namespace App\Models;

final class Elementary extends School {

    private static array $gradesList = ['CP', 'CE1', 'CE2', 'CM1', 'CM2'];
    private static string $schoolType = 'Elementaire';

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