<?php

namespace App\DTO;

use Illuminate\Http\Request;

class ClientInfoDTO
{
    public string $ip;
    public string $userAgent;

    public function __construct(Request $request)
    {
        $this->ip = $request->ip();
        $this->userAgent = $request->userAgent() ?? 'unknown';
    }

    public function toArray(): array
    {
        return [
            'ip_address' => $this->ip,
            'user_agent' => $this->userAgent
        ];
    }
}
