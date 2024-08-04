
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Learning php with code with harry.</title>
</head>
<body style="background-color: gray;">
    <div>
        <h1 style="color: red; background: black; text-align: center; padding: 10px 15px;">
            Learning PHP With ITLOGIKO 
        </h1>
        
        <?php

        // php object oriented programming start from here
           class Animal {
            protected $name;
            protected $sound;
            protected $legs;
            protected $foods;

            public function __construct($name, $sound, $legs, $foods)
            {
                $this->name = $name;
                $this->sound = $sound;
                $this->legs = $legs;
                $this->foods = $foods;
            }

            public function setLeges($legs) 
            {
                $this->legs = $legs;
            }

            public function setSound($sound) 
            {
                $this->sound = $sound;
            }

            public function setName($name) 
            {
                $this->name = $name;
            }

            public function setFoods($foods) 
            {
                $this->foods = $foods;
            }

            public function getName() 
            {
                return $this->name;
            }

            public function getSound() 
            {
                return $this->sound;
            }

            public function getFoods()
            {
                return $this->foods;
            }

            public function getLegs()
            {
                return $this->legs;
            }

            public function details() 
            {
                $foodList = "";
                for ($i=0; $i < count($this->foods); $i++) { 

                    if($i > 0) {
                        $foodList .= ",";
                        echo "<br>";
                        echo($this->foods[$i] . $i);
                        echo "<br>";
                    }

                    $foodList .= $this->foods[$i];

                };

                echo "The animal name is $this->name. It's sound is $this->sound. It's have $this->legs legs. $this->name eat many type of food, like : $foodList";
            }

           }

           $lion = new Animal("Lion", "Roar", 4, ["Meet", "Water", "Bones", "Fish"]);
           $lion->details();
           // php object oriented programming end from here


        //    php constant 
        // define("FIRST_CONSTANT", "<br> This is my first constant of with php. So, be careful."); // const with case-sensetive bydefault.

        define("first", "<br> This is my first constant of with php. So, be careful.", true); // const with case-insensetive.

        echo first;


        // php const with const keyword 
        const MYCAR = [1, 2, 3, 4, 5, 6];
        echo MYCAR[1];

        ?>
    </div>
</body>
</html>