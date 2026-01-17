<?php

namespace App\Models;

use App\Core\Database;

class Role
{
    public static function all(): array
    {
        $stmt = Database::connection()->query('SELECT * FROM roles ORDER BY name');
        return $stmt->fetchAll();
    }
}
