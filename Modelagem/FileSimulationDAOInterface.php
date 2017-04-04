<?php
	include_once "FileSimulationVO.php";
	interface FileSimulationDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($FileSimulation);
		
		public static function update($FileSimulation);
	}
?>