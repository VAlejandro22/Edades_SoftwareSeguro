<?php
namespace App\Services;

class AgeRouterService
{
    public static function rutaPorEdad(int $edad): string
    {
        return match (true) {
            $edad >= 0 && $edad <= 5 => '/bebes',
            $edad >= 6 && $edad <= 12 => '/ninos',
            $edad >= 13 && $edad <= 17 => '/adolescentes',
            $edad >= 18 && $edad <= 25 => '/jovenes',
            $edad >= 26 && $edad <= 59 => '/adultos',
            $edad >= 60 && $edad <= 74 => '/mayores',
            $edad >= 75 && $edad <= 120 => '/longevos',
            default => '/error'
        };
    }
}
