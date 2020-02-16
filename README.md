# faker-fun-names
Faker Provider with french fun names and texts (contrepetries), because fake data should be fun !  

# Usage 

        $faker = Factory::create();
        $faker->addProvider(new FunDataProvider($faker));
        
        $faker->funName; // french fun firstname and lastname
        $faker->contrepetrie // french contrepetrie (short fun text)
