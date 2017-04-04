<?php

	abstract class UsuarioBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "UsuarioDAO.php";
			return UsuarioDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "UsuarioDAO.php";
			return UsuarioDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "UsuarioDAO.php";
			return UsuarioDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "UsuarioDAO.php";
			return UsuarioDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "UsuarioDAO.php";
			return UsuarioDAO::deleteCondicao($condicao);
		}
		
		public static function insert($Usuario)
		{
			include_once "UsuarioDAO.php";
			return UsuarioDAO::insert($Usuario);
		}
		
		public static function update($Usuario)
		{
			include_once "UsuarioDAO.php";
			return UsuarioDAO::update($Usuario);
		}
	}
?>