<?php
class calculation{
    public $a, $b, $c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$cal = new calculation();

$cal->a = 10;
$cal->b = 20;

echo "Sum: ".$cal->sum()."<br>";
echo "Sub: ".$cal->sub();
?>