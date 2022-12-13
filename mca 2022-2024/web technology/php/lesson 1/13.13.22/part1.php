<?php 

class MCA {
    // access specifiers -private/protected/public
    // data members
    // private $name;
    protected $name;
    // constructors
    function _construct() {
        echo '<h1>Constructor</h1>';
    }
    // destructors
    function _desctruct() {
        echo '<h1>Deconstrucotr</h1>';
    }
    // Member function
    function show() {
        echo '<h1>Show()</h1>';
    }
}

 // Child-extends-parent -means there is inheritance
 class MCAFY extends MCA {
    private $dept;
    function __construct($name,$div, $dept) {
        parent::_construct($name, $div);
        // $this->div=$div;
        $this->dept = $dept;
        echo '<h1>MCAFY constructor called</h1>';
    }
    
}

function copyConstructor($m1) {
    
}

class Dept extends MCAFY {
// System generated constructor
private $dept;

function __construct($name, $div, $dept) {
    parent:: __construct($name,$div,$dept);
    $this->name=$name;
    $this->div=$div;
    $this->dept=$dept;
    echo '<h1>MCAFY constructor called</h1>';
}

function show() {
    echo '<h1>show() '. $this->name, ' div: ' . $this->div . ' department ' . $this->dept . ' </h1>';
}
}

// $a = new A;
// $m = new MCA();
$m1 = new Dept('sudarshan sirsat','MCARY', 'Department of Data Scinence and Technology.');
// $m = new MCAFY;
$m1->show();
// $m->_construct();
// echo '<h4>After this line, destructors will be called,', __LINE__, '</h1>';
// Last line of oops program will be called to destrucotr.
?>
