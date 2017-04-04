<?php
	include_once "SendEmailVO.php";
	interface SendEmailDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($SendEmail);
		
		public static function update($SendEmail);
	}
?>