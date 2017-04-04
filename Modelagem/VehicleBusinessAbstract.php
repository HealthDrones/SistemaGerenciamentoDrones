<?php

	abstract class VehicleBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "VehicleDAO.php";
			return VehicleDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "VehicleDAO.php";
			return VehicleDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "VehicleDAO.php";
			return VehicleDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "VehicleDAO.php";
			return VehicleDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "VehicleDAO.php";
			return VehicleDAO::deleteCondicao($condicao);
		}
		
		public static function insert($Vehicle)
		{
			include_once "VehicleDAO.php";
			return VehicleDAO::insert($Vehicle);
		}
		
		public static function update($Vehicle)
		{
			include_once "VehicleDAO.php";
			return VehicleDAO::update($Vehicle);
		}
	}
?>