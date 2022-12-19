<?php 
$i = 10;
$j = 20;
$age = 16;


$arr = array(11,22);


try {
    echo $i/$j;
    echo $arr[3];
    throw new Exception('thwowing sample exception');

} catch (Exception $th) {
    echo '<h1>,', $th->getMessage()  ,',</h1>';
} catch (DivideByZeroException $th) {
    echo '<h1>,', $th->getMessage()  ,',</h1>';
}  catch (FileNotFound $th) {
    echo '<h1>,', $th->getMessage()  ,',</h1>';
} catch (Exception $th) {
    echo '<h1>,', $th->getMessage()  ,',</h1>';
}
finally {
    echo "<h1>This will always execute</h1>";
}


?>