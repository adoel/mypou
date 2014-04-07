<?php 
include "connection.php";

   	class Food {

   		var $type;
   		var $energy;

	    function __construct() {
	        $this->type;
	        $this->energy;
	    }

   		function getEnergyByType($type){

			$sql	= "SELECT energy FROM food WHERE type = " . $type;
			$query	= mysql_query($sql);
			$result = array();
			   	while ($row = mysql_fetch_array($query)) {
			   		$result[] = $row;
				}

			return $result;
   		}

   	}

   	// $food1 = new Food();
   	// $food1->getEnergyByType('basreng');
?>