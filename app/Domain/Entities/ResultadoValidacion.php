<?php

namespace App\Domain\Entities;

class ResultadoValidacion
{
    public function __construct(
        private string $nivel,
        private array $violaciones
    ) {}

    public function getNivel(): string
    {
        return $this->nivel;
    }

    public function getViolaciones(): array
    {
        return $this->violaciones;
    }
}