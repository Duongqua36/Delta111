<?php
class canbac2{
    public $a;
    public $b;
    public $c;

    public function __construct($a,$b,$c)
    {
        $this->a= $a;
        $this->b= $b;
        $this->c= $c;
    }
    public function delta(){
        $deta= $this->b**2 - 4*$this->a*$this->c;
        return $deta;
    }
    public  function sosanh(){
        if ($this->delta()>0){
            $x1=-$this->b+sqrt($this->delta())/2*$this->a;
            echo"nghiệm 1 là <br>".$x1."<br>";
            $x2=-$this->b-sqrt($this->delta())/2*$this->a;
            echo"nghiệm 2 là <br>".$x2."<br>";
        }else
            if($this->delta()==0 ){
                $x3 = -$this->b+sqrt($this->delta())/2*$this->a;
                echo 'phương trình có nghiệm kép là '.$x3;
            }else{
                echo "pt vô no";
            }

    }
}
