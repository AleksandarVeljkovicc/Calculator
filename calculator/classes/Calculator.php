<?php

class Calculator
{
	private $operand1;
	private $operand2;
	private $result;
	
	
	public function __construct($operand1, $operand2)
    {
        $this->operand1 = $operand1;
		$this->operand2 = $operand2;
    }

	public function getOperand1() 
	{       
		return $this->operand1;             	  
	}

	public function getOperand2() 
	{       
		return $this->operand2;             	  
	}

	public function getResult()
	{       
		return $this->result;         	  
	}

	
	public function addition(){
		$this->result = $this->operand1 + $this->operand2;
	}
	
	public function subtraction(){
		$this->result = $this->operand1 - $this->operand2;
	}
	
	public function multiplication(){
		$this->result = $this->operand1 * $this->operand2;
	}
	
	public function division(){
		if($this->operand2==0){
			$this->result=0;
		}
		else{
		$this->result = $this->operand1 / $this->operand2;
		}
	}
}


?>