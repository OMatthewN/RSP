<?php

namespace App\DTO;

class ServerInfoDTO
{
    public string $phpVersion;

    public function __construct()
    {
        $this->phpVersion = phpversion();
    }

    public function toArray(): array
    {
        return [
            'php_version' => $this->phpVersion
        ];
    }
}
