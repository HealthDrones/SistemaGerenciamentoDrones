<?php
	include_once "MissionVO.php";
	interface MissionDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($Mission);
		
		public static function update($Mission);
	}
?>