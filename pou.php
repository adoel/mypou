<?php

class Pou {

	var $name = null;
	var $age = 0;
	var $gender = null;
	var $weight = 0;
	var $height = 0;

	var $Food = null;

	function __construct($config = array()) {

		foreach ($config as $key => $value) {
			$this->$key = $value;
		}

	}

	function setName($name){
		$this->name = $name;
	}

	function getName(){
		return $this->name;
	}

	function eat($food){
		$energy = $this->Food->getEnergyByType($food);
		$this->addEnergy($energy);
	}

	function initFood($foodClass){
		$this->Food = $foodClass;
	}

	function addEnergy($energy){
		
			$sql	= "SELECT energy FROM food WHERE type = " . $type;
			$query	= mysql_query($sql);
			$result = array();
		   	while ($row = mysql_fetch_array($query)) {
		   		$result[] = $row;
			}

	}

}