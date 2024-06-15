<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $people)
    {
        $grams = $pizzas * (($people * 20) + 200);
        return $grams;
    }

    public function calculateSauceRequirement($pizzas, $sauce_can_volume)
    {
        $sauce_per_pizza = 125;
        $cans_of_sauce = ($pizzas * $sauce_per_pizza) / $sauce_can_volume;
        return $cans_of_sauce;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter)
    {
        $PI = 3.14;
        $pizzas = ($cheese_dimension ** 3) / ($thickness * $PI * $diameter);
        return intval($pizzas);
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        $slices_per_pizza = 8;
        $total_slices = $pizzas * $slices_per_pizza;
        $leftover_slices = $total_slices % $friends;
        return $leftover_slices;
    }
}
