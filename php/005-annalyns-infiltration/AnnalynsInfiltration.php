<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        if ($is_knight_awake) return false;
        return true;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if ($is_knight_awake || $is_archer_awake || $is_prisoner_awake) return true;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if ($is_prisoner_awake && !$is_archer_awake) return true;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if (($is_dog_present && !$is_archer_awake) || (!$is_dog_present && $is_prisoner_awake && !$is_knight_awake && !$is_archer_awake)) return true;
    }
}
