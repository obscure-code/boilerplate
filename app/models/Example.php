<?php

declare(strict_types=1);

class Example extends Model
{
    public function test(): array|false
    {
        return $this->db->query("SHOW TABLES")->fetchAll(PDO::FETCH_ASSOC);
    }
}
