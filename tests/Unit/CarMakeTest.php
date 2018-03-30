<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = Car::inRandomOrder()->first();
        $value = (int) $car->make;
        $this->assertContains($value,['Ford','Honda','Toyota']);
    }
}
