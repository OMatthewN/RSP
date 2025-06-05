<?php

namespace App\Http\Controllers;

use App\DTO\ServerInfoDTO;
use App\DTO\ClientInfoDTO;
use App\DTO\DatabaseInfoDTO;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Возвращает информацию о версии PHP.
     */
    public function server()
    {
        $dto = new ServerInfoDTO();
        return response()->json($dto->toArray());
    }

    /**
     * Возвращает IP и User-Agent клиента.
     */
    public function client(Request $request)
    {
        $dto = new ClientInfoDTO($request);
        return response()->json($dto->toArray());
    }

    /**
     * Возвращает информацию об используемой базе данных.
     */
    public function database()
    {
        $dto = new DatabaseInfoDTO();
        return response()->json($dto->toArray());
    }
}
