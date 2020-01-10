# faker-fun-names
Faker Provider with french fun names, because fake data should be fun !  

# Usage 

        $faker = Factory::create();
        $faker->addProvider(new FunDataProvider($faker));
        $this->assertContains($faker->funName, FunDataProvider::$names);
