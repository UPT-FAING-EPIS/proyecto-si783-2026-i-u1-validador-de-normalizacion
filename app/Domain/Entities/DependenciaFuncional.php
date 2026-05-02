<?php

namespace App\Domain\Entities;

class DependenciaFuncional
{
    public function __construct(
        private string $determinante,
        private string $dependiente
    ) {}

    public function getDeterminante(): string
    {
        return $this->determinante;
    }

    public function getDependiente(): string
    {
        return $this->dependiente;
    }
}