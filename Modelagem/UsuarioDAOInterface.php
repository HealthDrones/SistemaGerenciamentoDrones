<?php
	include_once "UsuarioVO.php";
	interface UsuarioDAOInterface
	{
	
		public static function getById($id);
	
		public static function getListAll();
		
		public static function getList($condicao);
		
		public static function delete($id);
		
		public static function deleteCondicao($condicao);
		
		public static function insert($Usuario);
		
		public static function update($Usuario);
	}
?>