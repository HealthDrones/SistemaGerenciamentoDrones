<?php

	abstract class FileSimulationBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "FileSimulationDAO.php";
			return FileSimulationDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "FileSimulationDAO.php";
			return FileSimulationDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "FileSimulationDAO.php";
			return FileSimulationDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "FileSimulationDAO.php";
			return FileSimulationDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "FileSimulationDAO.php";
			return FileSimulationDAO::deleteCondicao($condicao);
		}
		
		public static function insert($FileSimulation)
		{
			include_once "FileSimulationDAO.php";
			return FileSimulationDAO::insert($FileSimulation);
		}
		
		public static function update($FileSimulation)
		{
			include_once "FileSimulationDAO.php";
			return FileSimulationDAO::update($FileSimulation);
		}
	}
?>