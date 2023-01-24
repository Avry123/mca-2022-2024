<?php 
interface ThreeKings {
    public function courage();
}

interface TrueDetective {
    public function time();

    public function work();

    public function good();
}

class A implements ThreeKings , TrueDetective {
    public function courage() {
     echo '<h1>The way this works is you do something you are scared shitless of and you get the courage after you do it not before.</h1>';
    }

    public function time() {
        echo '<h1>Death created time to grow the things it is going to kill.</h1>';
    }

    public function work() {
      echo '<h1>Life is barely long enough to get good at one thing so make sure what you get good at.</h1>';
    }

    public function good() {
      echo '<h1>First there was only darkness and now there is light if you ask me it seems like light is winning.</h1>';
    }
}

$a = new A();

$a->courage();

$a->time();

$a->work();

$a->good();




?>