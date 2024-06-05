<?php
class Lasagna
{
    public function expectedCookTime()
    {
        $timeToCook = 40;
        return $timeToCook;
    }
    public function remainingCookTime($elapsed_minutes)
    {
        $timeToCook = 40;
        $remainingTime = $timeToCook - $elapsed_minutes;
        return $remainingTime;
    }
    public function totalPreparationTime($layers_to_prep)
    {
        $preparationTime = $layers_to_prep * 2;
        return $preparationTime;
    }
    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        $preparationTime = $this->totalPreparationTime($layers_to_prep);
        $totalTime =  $preparationTime + $elapsed_minutes;
        return $totalTime;
    }
    public function alarm()
    {
        return "Ding!";
    }
}
