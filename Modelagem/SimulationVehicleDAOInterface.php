<?php
	include_once "SimulationVehicleVO.php";
	interface SimulationVehicleDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($SimulationVehicle);
		
		public static function update($SimulationVehicle);
	}
?>