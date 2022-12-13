<?php 
class MCA {
    private $rollno;
    private $name;
    static $dept = 'Department of Data Science and Technology';
    const college_code = 401;

    function __construct($rollno,$name) {
        $this->rollno=$rollno;
        $this->name=$name;
    }

    function show() {
        echo '<h1>' , $this->rollno, ' name: ', $this->name, ' dept: '  . MCA::$dept . '</h1>';
        echo '<h1>Calling static function from the member function with self keyword:' . self::info() . '</h1>';
        echo '<h1>calling static function from member function with  static keyword: ', static::info() , '</h1>';
        echo '<h1>calling college code throught self ' . self::college_code . '</h1>';
        echo '<h1> calling const member with classname: ' . MCA::college_code  . '</h1>';
    }

    static function info() {
        echo '<h1>call to static function,'. __METHOD__ . '</h1>';
    }
}

$m = new MCA(5,'Neel Chalke');
$m->show();
?>