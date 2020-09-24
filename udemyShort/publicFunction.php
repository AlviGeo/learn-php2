<!DOCTYPE html>
<html>

<body>
    <?php
    class Person {
        public $firstName;
        public $lastName;
        public $age;

        public function __construct($firstName, $lastName, $age) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        public function hello() {
            return "I am ". $this->firstName. " ". $this->lastName. ", my age is ". 
            $this->age. "";
        }
        
    }

    $person1 = new Person("John", "Smith", 25);
    $person2 = new Person("Joe", "Bob", 35);

    echo $person1->hello();
    echo "<br>";
    echo $person2->hello();

    ?>

</body>

</html>