<?php
class xx{
	protected $a;
	
	function aa(){
		$bb="我是你爷爷";
		$this->a=$bb;
		var_dump($this->a);
	}
	function xxx(){
		echo $this->a;
	}
	
	
}
  $ss=new xx();
  $ss->aa();
  $ss->xxx();

?>