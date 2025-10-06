<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

final class SpeedSensorTest extends TestCase {
    public function testVerySlow() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Very slow", $sensor->getSpeed(20));
    }

    public function testAdequateSpeed() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Adequate speed", $sensor->getSpeed(40));
    }

    public function testSlightExcess() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Slight excess", $sensor->getSpeed(70));
    }

    public function testModerateExcess() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Moderate excess", $sensor->getSpeed(90));
    }

    public function testSevereExcess() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Severe excess", $sensor->getSpeed(120));
    }
}