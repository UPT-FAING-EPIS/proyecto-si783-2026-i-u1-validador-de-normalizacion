<?php

namespace App\Domain\Entities;

class Esquema
{
    private array $atributos;
    private array $dependencias;

    public function __construct(array $atributos, array $dependencias)
    {
        $this->atributos = $atributos;
        $this->dependencias = $dependencias;
    }

    public function getAtributos(): array
    {
        return $this->atributos;
    }

    public function getDependencias(): array
    {
        return $this->dependencias;
    }
}