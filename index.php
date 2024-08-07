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
        class Animal
        {
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
                for ($i = 0; $i < count($this->foods); $i++) {

                    if ($i > 0) {
                        $foodList .= ",";
                        echo "<br>";
                        echo ($this->foods[$i] . $i);
                        echo "<br>";
                    }

                    $foodList .= $this->foods[$i];
                };

                echo "The animal name is $this->name. It's sound is $this->sound. It's have $this->legs legs. $this->name eat many type of food, like : $foodList";
            }
        }

        $lion = new Animal("Lion", "Roar", 4, ["Meet", "Water", "Bones", "Fish"]);
        //    $lion->details();
        // php object oriented programming end from here


        //    php constant 
        // define("FIRST_CONSTANT", "<br> This is my first constant of with php. So, be careful."); // const with case-sensetive bydefault.

        // define("first", "<br> This is my first constant of with php. So, be careful.", true); // const with case-insensetive.

        // echo first;


        // php const with const keyword 
        const MYCAR = [1, 2, 3, 4, 5, 6];
        // echo MYCAR[1];


        // learning predefiened constants 
        // echo "<br>" . __FILE__;
        // phpinfo();


        // php switch case learning
        function  checkCGPA($gpa, $startRange, $endRange): bool
        {
            if ($gpa >= $startRange && $gpa <= $endRange) {
                return true;
            }
            return false;
        }

        $cgpa = 5;
        switch ($cgpa) {
            case checkCGPA($cgpa, 0, 1.9):
                echo "Failed";
                break;

            case checkCGPA($cgpa, 2.0, 3.5):
                echo "B";
                break;

            case checkCGPA($cgpa, 3.6, 4.5):
                echo "A";
                break;

            case checkCGPA($cgpa, 4.6, 4.9):
                echo "A-";
                break;

            case checkCGPA($cgpa, 5.0, 6.0):
                echo "A+";
                break;

            default:
                echo "There are not any record for your result!";
                break;
        }

        $users = ["Dolon" => "23", "Durjoy" => "18", "Rakhi" => "8", "Sarna" => "22"];

        foreach ($users as $key => $value) {
            # code...
            // echo "<br>" . $key . "=" . $value;
        }


        // update the array item with php
        echo "<br>";
        $brands = ["Toyota", "Yamaha", "Pulser", "Nissan"];
        foreach ($brands as &$x) {
            $x = "Hello world";
        }
        unset($x); // unset method for ending update the reference of the array with foreach
        $x = "Someting new";

        var_dump($brands);
        echo "<br>";
        // end of the update array item session


        // adding items to the array in php
        $addingItemsOnArray = ["Dolon", "Durjoy", "Rakhi"];
        $addingItemsOnArray2 = ["name" => "Dolon Chandra Roy", "age" => 23, "Job" => "Junior Software Engineer"];

        $addingItemsOnArray[1] = "Hello world";
        echo "<br>";
        $addingItemsOnArray[] = "Something new to the array"; // to add a single item on the array
        array_push($addingItemsOnArray, "Sarna Sarkar", "Sagor Sarkar"); // to add multiple item on the array

        $addingItemsOnArray2["Education"] = "Bachelor of Science";
        $addingItemsOnArray2 += ["wife" => "Sarna Sarkar", "Mother" => "Shikha Rani", "Father" => "Kashab Chandra Roy"];

        //  removing array items method learning 
        var_dump($addingItemsOnArray);
        echo "<br>";
        array_splice($addingItemsOnArray, 1, 3); // for remove multiple items on an array
        unset($addingItemsOnArray[2]); // for remove a item with unset() method
        var_dump($addingItemsOnArray);
        echo "<br>";

        unset($addingItemsOnArray2["Education"], $addingItemsOnArray2["age"]); // removing associate array element with unset method
        array_splice($addingItemsOnArray2, 1, 2); // removing associate array items with array_splice method

        // var_dump($addingItemsOnArray2);

        echo "<br>";

        // array sorting method learning with php 
        $numbersArr = ["D", "C", "A", "B"];
        $numbersArr2 = ["A" => 1, "F" => 2, "D" => 4, "C" => 3, "K" => 5];

        // asort($numbersArr2); // associate array sorting as ascending order as value 
        // ksort($numbersArr2); // associate array sorting as ascending order as key
        // arsort($numbersArr2); // associate array sorting as descending order as value 
        krsort($numbersArr2); // associate array sorting as descending order as key

        // sort($numbersArr); // sort array in ascending order
        // rsort($numbersArr); // sort array in descending order
        // var_dump($numbersArr2);



        // php multidiamention array learning
        $userInfo = [
            ["Dolon Chandra Roy", 23, "Junior Software Engineer", "Student"],
            ["Durjoy Chandra Roy", 19, "Health Checkup Unit", "Student"],
            ["Sourav Halder", 27, "Fullstack Web Developer", "Student"],
            ["Nihar Mondol", 27, "Fullstack Web Developer", "Student"]
        ];

        for ($i = 0; $i < count($userInfo); $i++) {

            for ($j = 0; $j < count($userInfo[$i]); $j++) {
                echo $userInfo[$i][$j] . " ";
            }
            echo "<br>";
        }


        // learning php global variables 
        echo "<br> <br>";

        $myVar = 56;
        function myFunc()
        {
            // echo $GLOBALS["myVar"];

            $GLOBALS["ab"] = 34;

            global $myVar;
            echo $myVar;
        }



        myFunc();

        echo "<br>";

        echo $ab;


        echo "<br>";


        // echo $_SERVER["PHP_SELF"];

        // echo $_SERVER['PHP_SELF'];
        // echo $_SERVER['SERVER_NAME'];
        // echo $_SERVER['HTTP_HOST'];
        // echo $_SERVER['HTTP_REFERER'];
        // echo $_SERVER['HTTP_USER_AGENT'];
        // echo $_SERVER['SCRIPT_NAME'];

        ?>


        <!-- php from handling with html  -->
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="name">Input your name </label>
            <input type="text" name="name" id="">
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = htmlspecialchars($_REQUEST["name"]);
            if (empty($name)) {
                echo "<h3> There has no any user name</h3>";
            } else {
                echo "<h3>The user name is : $name</h3>";
            }
        }


        ?>
        
        <a href="demo_profile.php?subject=PHP&web=W3schools.com">Test $GET</a>

    </div>
</body>

</html>