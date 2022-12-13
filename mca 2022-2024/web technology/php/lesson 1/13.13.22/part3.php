<?php 
 class A {
    function __call($function_name,$args) {
        // echo '<h1>' . get_resource_type($args) .'</h1>';
        if ($function_name =='sum') {
            switch (count($args)) {
                case 1:
                    return $args[0] * $args[0];
                    break;
                    case 2:
                        return $args[0] * $args[1];
                        break;
                        case 3:
                            return $args[0] * $args[1] * $args[2];
                            break;
                default:
                    # code...
                    break;
            }
        }
    }
    

}
// class B extends A {
//     function show() {
//         parent::show();
//         echo '<h1>Class,' .__CLASS__ . __METHOD__ . '</h1>';
//     }

// }

// $m = new B();

// $m->show();

$m = new A();

echo '<h1>sum(5)'. $m->sum(5) . '</h1>';
echo '<h1>sum(5,10)'. $m->sum(5,10) . '</h1>';
echo '<h1>sum(5,10,25)'. $m->sum(5,10,25) . '</h1>';
?>