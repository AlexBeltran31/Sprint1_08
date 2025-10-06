<?php
class SpeedSensor {
    public function getSpeed(int $speed): string {
        if ($speed < 30) {
            return "Very slow";
        } elseif ($speed <= 60) {
            return "Adequate speed";
        } elseif ($speed <=80) {
            return "Slight excess";
        } elseif ($speed <= 100) {
            return "Moderate excess";
        } else {
            return "Severe excess";
        }
    }
}

$sensor = new SpeedSensor();
echo $sensor->getSpeed(45);