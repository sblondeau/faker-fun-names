<?php


namespace Tests;

use Faker\Factory;
use FunDataProvider\FunDataProvider;
use PHPUnit\Framework\TestCase;

class FunDataProviderTest extends TestCase
{
    public function testFunData()
    {
        $faker = Factory::create();
        $faker->addProvider(new FunDataProvider($faker));
        $this->assertContains($faker->funName, FunDataProvider::NAMES);
        $this->assertContains($faker->contrepetrie, FunDataProvider::CONTREPETRIES);
    }

}
