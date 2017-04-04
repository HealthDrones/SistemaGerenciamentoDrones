<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "RotaDAOInterface.php";
	class RotaDAO implements RotaDAOInterface
	{
		public static function getById($id)
		{
			include_once "RotaVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM Rota WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $origemL  ,  $origemA  ,  $rota  ,  $idSimularion  ,  $idFile );
				$sql->fetch();
				$Rota = new RotaVO();
				$Rota->setId($id);
                $Rota->setOrigemL ($origemL);
                $Rota->setOrigemA ($origemA);
                $Rota->setRota ($rota);
                $Rota->setIdSimularion ($idSimularion);
                $Rota->setIdFile ($idFile);
	            $mysqli->close();
			    return $Rota;
			}
		}
	
		public static function getListAll(){
			include_once "RotaVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Rota';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $origemL  ,  $origemA  ,  $rota  ,  $idSimularion  ,  $idFile );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Rota = new RotaVO();
					$Rota->setId($id);
                    $Rota->setOrigemL ($origemL);
                    $Rota->setOrigemA ($origemA);
                    $Rota->setRota ($rota);
                    $Rota->setIdSimularion ($idSimularion);
                    $Rota->setIdFile ($idFile);
	                $lista[$i]=$Rota;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "RotaVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Rota where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $origemL  ,  $origemA  ,  $rota  ,  $idSimularion  ,  $idFile );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Rota = new RotaVO();
					$Rota->setId($id);
                    $Rota->setOrigemL ($origemL);
                    $Rota->setOrigemA ($origemA);
                    $Rota->setRota ($rota);
                    $Rota->setIdSimularion ($idSimularion);
                    $Rota->setIdFile ($idFile);
	                $lista[$i]=$Rota;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "RotaVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Rota where id='.$id;
			
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
			include_once "RotaVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Rota where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($Rota)
		{
			include "conectar.php";
			$sql = "INSERT INTO Rota ( origemL  ,  origemA  ,  rota  ,  idSimularion  ,  idFile ) VALUES ( '".$Rota->getOrigemL()."'  ,  '".$Rota->getOrigemA()."'  ,  '".$Rota->getRota()."'  ,  '".$Rota->getIdSimularion()."'  ,  '".$Rota->getIdFile()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($Rota)
		{
			include "conectar.php";
			$sql = "UPDATE Rota SET id='".$Rota->getId()."',  origemL = '".$Rota->getOrigemL()."'  ,  origemA = '".$Rota->getOrigemA()."'  ,  rota = '".$Rota->getRota()."'  ,  idSimularion = '".$Rota->getIdSimularion()."'  ,  idFile = '".$Rota->getIdFile()."'   WHERE id='".$Rota->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
