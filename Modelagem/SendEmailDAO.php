<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "SendEmailDAOInterface.php";
	class SendEmailDAO implements SendEmailDAOInterface
	{
		public static function getById($id)
		{
			include_once "SendEmailVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM SendEmail WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $assunto  ,  $mensagem  ,  $destinatarios  ,  $idFile  ,  $status );
				$sql->fetch();
				$SendEmail = new SendEmailVO();
				$SendEmail->setId($id);
                $SendEmail->setAssunto ($assunto);
                $SendEmail->setMensagem ($mensagem);
                $SendEmail->setDestinatarios ($destinatarios);
                $SendEmail->setIdFile ($idFile);
                $SendEmail->setStatus ($status);
	            $mysqli->close();
			    return $SendEmail;
			}
		}
	
		public static function getListAll(){
			include_once "SendEmailVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM SendEmail';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $assunto  ,  $mensagem  ,  $destinatarios  ,  $idFile  ,  $status );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$SendEmail = new SendEmailVO();
					$SendEmail->setId($id);
                    $SendEmail->setAssunto ($assunto);
                    $SendEmail->setMensagem ($mensagem);
                    $SendEmail->setDestinatarios ($destinatarios);
                    $SendEmail->setIdFile ($idFile);
                    $SendEmail->setStatus ($status);
	                $lista[$i]=$SendEmail;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "SendEmailVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM SendEmail where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $assunto  ,  $mensagem  ,  $destinatarios  ,  $idFile  ,  $status );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$SendEmail = new SendEmailVO();
					$SendEmail->setId($id);
                    $SendEmail->setAssunto ($assunto);
                    $SendEmail->setMensagem ($mensagem);
                    $SendEmail->setDestinatarios ($destinatarios);
                    $SendEmail->setIdFile ($idFile);
                    $SendEmail->setStatus ($status);
	                $lista[$i]=$SendEmail;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "SendEmailVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM SendEmail where id='.$id;
			
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
			include_once "SendEmailVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM SendEmail where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($SendEmail)
		{
			include "conectar.php";
			$sql = "INSERT INTO SendEmail ( assunto  ,  mensagem  ,  destinatarios  ,  idFile  ,  status ) VALUES ( '".$SendEmail->getAssunto()."'  ,  '".$SendEmail->getMensagem()."'  ,  '".$SendEmail->getDestinatarios()."'  ,  '".$SendEmail->getIdFile()."'  ,  '".$SendEmail->getStatus()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($SendEmail)
		{
			include "conectar.php";
			$sql = "UPDATE SendEmail SET id='".$SendEmail->getId()."',  assunto = '".$SendEmail->getAssunto()."'  ,  mensagem = '".$SendEmail->getMensagem()."'  ,  destinatarios = '".$SendEmail->getDestinatarios()."'  ,  idFile = '".$SendEmail->getIdFile()."'  ,  status = '".$SendEmail->getStatus()."'   WHERE id='".$SendEmail->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
