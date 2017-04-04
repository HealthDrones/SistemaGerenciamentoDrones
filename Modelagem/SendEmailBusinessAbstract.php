<?php

	abstract class SendEmailBusinessAbstract
	{
	
		public static function getById($id)
		{
			include_once "SendEmailDAO.php";
			return SendEmailDAO::getById($id);
		}
	
		public static function getListAll()
		{
			include_once "SendEmailDAO.php";
			return SendEmailDAO::getListAll();
		}
		
		public static function getList($condicao)
		{
			include_once "SendEmailDAO.php";
			return SendEmailDAO::getList($condicao);
		}
		
		public static function delete($id)
		{
			include_once "SendEmailDAO.php";
			return SendEmailDAO::delete($id);
		}
		
		public static function deleteCondicao($condicao)
		{
			include_once "SendEmailDAO.php";
			return SendEmailDAO::deleteCondicao($condicao);
		}
		
		public static function insert($SendEmail)
		{
			include_once "SendEmailDAO.php";
			return SendEmailDAO::insert($SendEmail);
		}
		
		public static function update($SendEmail)
		{
			include_once "SendEmailDAO.php";
			return SendEmailDAO::update($SendEmail);
		}
	}
?>