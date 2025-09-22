<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizzas, int $persons): int
    {
        $grams_per_pizza = ($persons * 20) + 200;
        $total_dough = $pizzas * $grams_per_pizza;
        return (int) round($total_dough);
    }

    public function calculateSauceRequirement(int $pizzas, int $canVolume): float
    {
        $sauce_needed = $pizzas * 125;
        return $sauce_needed / $canVolume;
    }

    public function calculateCheeseCubeCoverage(int $cheeseDimension, float $thickness, int $diameter): int
    {
        $cheese_volume = pow($cheeseDimension, 3);
        $pizza_volume_needed = $thickness * M_PI * $diameter;
        $pizzas_possible = $cheese_volume / $pizza_volume_needed;
        return (int) floor($pizzas_possible);
    }

    public function calculateLeftOverSlices(int $pizzas, int $friends): int
    {
        $total_slices = $pizzas * 8;
        return $total_slices % $friends;
    }
}
