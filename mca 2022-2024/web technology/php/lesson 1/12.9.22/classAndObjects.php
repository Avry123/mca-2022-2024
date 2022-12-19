<?php 

class Student {
    public $rollno;
    public $name;
    public $email;
    // function __construct() {
    //     echo '<h1>Student Class Constructor is called as ,' . __METHOD__ . '</h1>';
    // }

    function __construct($rollNo, $name, $email) {
           $this->rollNo =$rollNo;
           $this->name=$name;
           $this->email=$email; 

    }
    function showDetails() {
        echo '<h1>The class ' . __CLASS__ .  ' method ', __METHOD__ . '</h1>';
        echo '<h1>Roll no: ' . $this->rollNo . ',the name is ' . $this->name, 'the email is ', $this->email . '</h1>';
    }
}

$s1 = new Student(1,'abc','abc@gmail.com');
$s2 = new Student(2,'def','def@gamil.com');
$s1->showDetails();
$s2->showDetails();
?>