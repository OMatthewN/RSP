<?php

namespace App\DTO;

use Illuminate\Support\Facades\DB;

class DatabaseInfoDTO
{
    public string $connectionName;
    public string $database;
    public string $driver;

    public function __construct()
    {
        $this->connectionName = DB::getDefaultConnection();
        $this->database = DB::connection()->getDatabaseName();
        $this->driver = DB::connection()->getDriverName();
    }

    public function toArray(): array
    {
        return [
            'connection' => $this->connectionName,
            'database' => $this->database,
            'driver' => $this->driver
        ];
    }
}
