<?php

namespace interfaces;

interface Adicional 
{
    public function horasExtras(float $valorPorHora, int $horas) : float;
}
