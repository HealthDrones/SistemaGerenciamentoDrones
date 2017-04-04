<?php

	abstract class RotaBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "RotaDAO.php";
			return RotaDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "RotaDAO.php";
			return RotaDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "RotaDAO.php";
			return RotaDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "RotaDAO.php";
			return RotaDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "RotaDAO.php";
			return RotaDAO::deleteCondicao($condicao);
		}
		
		public static function insert($Rota)
		{
			include_once "RotaDAO.php";
			return RotaDAO::insert($Rota);
		}
		
		public static function update($Rota)
		{
			include_once "RotaDAO.php";
			return RotaDAO::update($Rota);
		}
	}
?>