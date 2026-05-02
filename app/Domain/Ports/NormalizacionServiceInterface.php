<?php

namespace App\Domain\Ports;

use App\Domain\Entities\Esquema;
use App\Domain\Entities\ResultadoValidacion;

interface NormalizacionServiceInterface
{
    public function validar(Esquema $esquema): ResultadoValidacion;
}