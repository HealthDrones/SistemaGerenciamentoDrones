<?php
	include_once "RotaVO.php";
	interface RotaDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($Rota);
		
		public static function update($Rota);
	}
?>