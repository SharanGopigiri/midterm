<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCar()
    {
        $car = Car::find(8);
        $car->Year = '2000';


        $this->assertTrue($car->save());
    }
}
