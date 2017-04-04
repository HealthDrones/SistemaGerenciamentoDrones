<?php

	abstract class SimulationVehicleBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "SimulationVehicleDAO.php";
			return SimulationVehicleDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "SimulationVehicleDAO.php";
			return SimulationVehicleDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "SimulationVehicleDAO.php";
			return SimulationVehicleDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "SimulationVehicleDAO.php";
			return SimulationVehicleDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "SimulationVehicleDAO.php";
			return SimulationVehicleDAO::deleteCondicao($condicao);
		}
		
		public static function insert($SimulationVehicle)
		{
			include_once "SimulationVehicleDAO.php";
			return SimulationVehicleDAO::insert($SimulationVehicle);
		}
		
		public static function update($SimulationVehicle)
		{
			include_once "SimulationVehicleDAO.php";
			return SimulationVehicleDAO::update($SimulationVehicle);
		}
	}
?>