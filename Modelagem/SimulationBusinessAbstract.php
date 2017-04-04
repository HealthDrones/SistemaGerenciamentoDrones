<?php

	abstract class SimulationBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "SimulationDAO.php";
			return SimulationDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "SimulationDAO.php";
			return SimulationDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "SimulationDAO.php";
			return SimulationDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "SimulationDAO.php";
			return SimulationDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "SimulationDAO.php";
			return SimulationDAO::deleteCondicao($condicao);
		}
		
		public static function insert($Simulation)
		{
			include_once "SimulationDAO.php";
			return SimulationDAO::insert($Simulation);
		}
		
		public static function update($Simulation)
		{
			include_once "SimulationDAO.php";
			return SimulationDAO::update($Simulation);
		}
	}
?>