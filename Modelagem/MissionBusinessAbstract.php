<?php

	abstract class MissionBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "MissionDAO.php";
			return MissionDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "MissionDAO.php";
			return MissionDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "MissionDAO.php";
			return MissionDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "MissionDAO.php";
			return MissionDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "MissionDAO.php";
			return MissionDAO::deleteCondicao($condicao);
		}
		
		public static function insert($Mission)
		{
			include_once "MissionDAO.php";
			return MissionDAO::insert($Mission);
		}
		
		public static function update($Mission)
		{
			include_once "MissionDAO.php";
			return MissionDAO::update($Mission);
		}
	}
?>