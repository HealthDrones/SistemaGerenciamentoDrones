<?php
	include_once "VehicleVO.php";
	interface VehicleDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($Vehicle);
		
		public static function update($Vehicle);
	}
?>