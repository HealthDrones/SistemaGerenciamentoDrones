<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "UsuarioDAOInterface.php";
	class UsuarioDAO implements UsuarioDAOInterface
	{
		public static function getById($id)
		{
			include_once "UsuarioVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM Usuario WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $instituicao  ,  $cidade  ,  $email  ,  $celular  ,  $login  ,  $senha  ,  $status );
				$sql->fetch();
				$Usuario = new UsuarioVO();
				$Usuario->setId($id);
                $Usuario->setNome ($nome);
                $Usuario->setInstituicao ($instituicao);
                $Usuario->setCidade ($cidade);
                $Usuario->setEmail ($email);
                $Usuario->setCelular ($celular);
                $Usuario->setLogin ($login);
                $Usuario->setSenha ($senha);
                $Usuario->setStatus ($status);
	            $mysqli->close();
			    return $Usuario;
			}
		}
	
		public static function getListAll(){
			include_once "UsuarioVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Usuario';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $instituicao  ,  $cidade  ,  $email  ,  $celular  ,  $login  ,  $senha  ,  $status );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Usuario = new UsuarioVO();
					$Usuario->setId($id);
                    $Usuario->setNome ($nome);
                    $Usuario->setInstituicao ($instituicao);
                    $Usuario->setCidade ($cidade);
                    $Usuario->setEmail ($email);
                    $Usuario->setCelular ($celular);
                    $Usuario->setLogin ($login);
                    $Usuario->setSenha ($senha);
                    $Usuario->setStatus ($status);
	                $lista[$i]=$Usuario;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "UsuarioVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Usuario where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $instituicao  ,  $cidade  ,  $email  ,  $celular  ,  $login  ,  $senha  ,  $status );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Usuario = new UsuarioVO();
					$Usuario->setId($id);
                    $Usuario->setNome ($nome);
                    $Usuario->setInstituicao ($instituicao);
                    $Usuario->setCidade ($cidade);
                    $Usuario->setEmail ($email);
                    $Usuario->setCelular ($celular);
                    $Usuario->setLogin ($login);
                    $Usuario->setSenha ($senha);
                    $Usuario->setStatus ($status);
	                $lista[$i]=$Usuario;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "UsuarioVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Usuario where id='.$id;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		public static function deleteCondicao($condicao)
		{
			include_once "UsuarioVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Usuario where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($Usuario)
		{
			include "conectar.php";
			$sql = "INSERT INTO Usuario ( nome  ,  instituicao  ,  cidade  ,  email  ,  celular  ,  login  ,  senha  ,  status ) VALUES ( '".$Usuario->getNome()."'  ,  '".$Usuario->getInstituicao()."'  ,  '".$Usuario->getCidade()."'  ,  '".$Usuario->getEmail()."'  ,  '".$Usuario->getCelular()."'  ,  '".$Usuario->getLogin()."'  ,  '".$Usuario->getSenha()."'  ,  '".$Usuario->getStatus()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($Usuario)
		{
			include "conectar.php";
			$sql = "UPDATE Usuario SET id='".$Usuario->getId()."',  nome = '".$Usuario->getNome()."'  ,  instituicao = '".$Usuario->getInstituicao()."'  ,  cidade = '".$Usuario->getCidade()."'  ,  email = '".$Usuario->getEmail()."'  ,  celular = '".$Usuario->getCelular()."'  ,  login = '".$Usuario->getLogin()."'  ,  senha = '".$Usuario->getSenha()."'  ,  status = '".$Usuario->getStatus()."'   WHERE id='".$Usuario->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
