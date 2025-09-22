<?php

declare(strict_types=1);

class Lasagna
{
    public function expectedCookTime(): int
    {
        return 40;
    }

    public function remainingCookTime(int $actualMinutes): int
    {
        return $this->expectedCookTime() - $actualMinutes;
    }

    public function totalPreparationTime(int $numberOfLayers): int
    {
        return $numberOfLayers * 2;
    }
    
    public function totalElapsedTime(int $numberOfLayers, int $minutesInOven): int
    {
        return $this->totalPreparationTime($numberOfLayers) + $minutesInOven;
    }
    
    public function alarm(): string
    {
        return "Ding!";
    }
}
