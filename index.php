<?php class a {

public $t;

public $e;

private $a;

public function __constructor($a){

$this->t = new DateTime($a);

}

public function b($a,DateInterval $i){

$b = clone $a->add($i);

$b->add($i);

return $b;

}

public function c(DateTime $a,DateInterval $i){

$b = clone $a->sub($i);

$b->add($i);

return $b;

}

public function d($t){

return $this->t->diff($t);

}

private function e(){

return $this->$t

}

} ?>
