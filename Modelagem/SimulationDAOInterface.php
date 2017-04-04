<?php
	include_once "SimulationVO.php";
	interface SimulationDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($Simulation);
		
		public static function update($Simulation);
	}
?>