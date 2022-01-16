<?php

declare(strict_types=1);

namespace App\Models;

class Example extends Model
{
    public function test(): array|false
    {
        return $this->db->query("show tables")->fetchAll(PDO::FETCH_ASSOC);
    }
}
