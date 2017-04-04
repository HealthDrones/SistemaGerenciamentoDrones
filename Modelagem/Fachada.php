<?php
	abstract class Fachada
	{

		public static function getByIdUsuario($id)
		{
			include_once "UsuarioBusiness.php";
			return UsuarioBusiness::getById($id);
		}

		public static function getListAllUsuario()
		{
			include_once "UsuarioBusiness.php";
			return UsuarioBusiness::getListAll();
		}

		public static function getListUsuario($condicao)
		{
			include_once "UsuarioBusiness.php";
			return UsuarioBusiness::getList($condicao);
		}

		public static function deleteUsuario($id)
		{
			include_once "UsuarioBusiness.php";
			return UsuarioBusiness::delete($id);
		}

		public static function deleteCondicaoUsuario($condicao)
		{
			include_once "UsuarioBusiness.php";
			return UsuarioBusiness::deleteCondicao($condicao);
		}

		public static function insertUsuario($Usuario)
		{
			include_once "UsuarioBusiness.php";
			return UsuarioBusiness::insert($Usuario);
		}

		public static function updateUsuario($Usuario)
		{
			include_once "UsuarioBusiness.php";
			return UsuarioBusiness::update($Usuario);
		}

		//Funções destinadas a Classe Vehicle
		public static function getByIdVehicle($id)
		{
			include_once "VehicleBusiness.php";
			return VehicleBusiness::getById($id);
		}

		public static function getListAllVehicle()
		{
			include_once "VehicleBusiness.php";
			return VehicleBusiness::getListAll();
		}

		public static function getListVehicle($condicao)
		{
			include_once "VehicleBusiness.php";
			return VehicleBusiness::getList($condicao);
		}

		public static function deleteVehicle($id)
		{
			include_once "VehicleBusiness.php";
			return VehicleBusiness::delete($id);
		}

		public static function deleteCondicaoVehicle($condicao)
		{
			include_once "VehicleBusiness.php";
			return VehicleBusiness::deleteCondicao($condicao);
		}

		public static function insertVehicle($Vehicle)
		{
			include_once "VehicleBusiness.php";
			return VehicleBusiness::insert($Vehicle);
		}

		public static function updateVehicle($Vehicle)
		{
			include_once "VehicleBusiness.php";
			return VehicleBusiness::update($Vehicle);
		}

		//Funções destinadas a classe SimulationVehicle
		public static function getByIdSimulationVehicle($id)
		{
			include_once "SimulationVehicleBusiness.php";
			return SimulationVehicleBusiness::getById($id);
		}

		public static function getListAllSimulationVehicle()
		{
			include_once "SimulationVehicleBusiness.php";
			return SimulationVehicleBusiness::getListAll();
		}

		public static function getListSimulationVehicle($condicao)
		{
			include_once "SimulationVehicleBusiness.php";
			return SimulationVehicleBusiness::getList($condicao);
		}

		public static function deleteSimulationVehicle($id)
		{
			include_once "SimulationVehicleBusiness.php";
			return SimulationVehicleBusiness::delete($id);
		}

		public static function deleteCondicaoSimulationVehicle($condicao)
		{
			include_once "SimulationVehicleBusiness.php";
			return SimulationVehicleBusiness::deleteCondicao($condicao);
		}

		public static function insertSimulationVehicle($SimulationVehicle)
		{
			include_once "SimulationVehicleBusiness.php";
			return SimulationVehicleBusiness::insert($SimulationVehicle);
		}

		public static function updateSimulationVehicle($SimulationVehicle)
		{
			include_once "SimulationVehicleBusiness.php";
			return SimulationVehicleBusiness::update($SimulationVehicle);
		}

		//Funções destinadas a classe Simulation
		public static function getByIdSimulation($id)
		{
			include_once "SimulationBusiness.php";
			return SimulationBusiness::getById($id);
		}

		public static function getListAllSimulation()
		{
			include_once "SimulationBusiness.php";
			return SimulationBusiness::getListAll();
		}

		public static function getListSimulation($condicao)
		{
			include_once "SimulationBusiness.php";
			return SimulationBusiness::getList($condicao);
		}

		public static function deleteSimulation($id)
		{
			include_once "SimulationBusiness.php";
			return SimulationBusiness::delete($id);
		}

		public static function deleteCondicaoSimulation($condicao)
		{
			include_once "SimulationBusiness.php";
			return SimulationBusiness::deleteCondicao($condicao);
		}

		public static function insertSimulation($Simulation)
		{
			include_once "SimulationBusiness.php";
			return SimulationBusiness::insert($Simulation);
		}

		public static function updateSimulation($Simulation)
		{
			include_once "SimulationBusiness.php";
			return SimulationBusiness::update($Simulation);
		}

		// Funções destinada a classe SendEmail
		public static function getByIdSendEmail($id)
		{
			include_once "SendEmailBusiness.php";
			return SendEmailBusiness::getById($id);
		}

		public static function getListAllSendEmail()
		{
			include_once "SendEmailBusiness.php";
			return SendEmailBusiness::getListAll();
		}

		public static function getListSendEmail($condicao)
		{
			include_once "SendEmailBusiness.php";
			return SendEmailBusiness::getList($condicao);
		}

		public static function deleteSendEmail($id)
		{
			include_once "SendEmailBusiness.php";
			return SendEmailBusiness::delete($id);
		}

		public static function deleteCondicaoSendEmail($condicao)
		{
			include_once "SendEmailBusiness.php";
			return SendEmailBusiness::deleteCondicao($condicao);
		}

		public static function insertSendEmail($SendEmail)
		{
			include_once "SendEmailBusiness.php";
			return SendEmailBusiness::insert($SendEmail);
		}

		public static function updateSendEmail($SendEmail)
		{
			include_once "SendEmailBusiness.php";
			return SendEmailBusiness::update($SendEmail);
		}

		//Funções destinadas a Classe Rota
		public static function getByIdRota($id)
		{
			include_once "RotaBusiness.php";
			return RotaBusiness::getById($id);
		}

		public static function getListAllRota()
		{
			include_once "RotaBusiness.php";
			return RotaBusiness::getListAll();
		}

		public static function getListRota($condicao)
		{
			include_once "RotaBusiness.php";
			return RotaBusiness::getList($condicao);
		}

		public static function deleteRota($id)
		{
			include_once "RotaBusiness.php";
			return RotaBusiness::delete($id);
		}

		public static function deleteCondicaoRota($condicao)
		{
			include_once "RotaBusiness.php";
			return RotaBusiness::deleteCondicao($condicao);
		}

		public static function insertRota($Rota)
		{
			include_once "RotaBusiness.php";
			return RotaBusiness::insert($Rota);
		}

		public static function updateRota($Rota)
		{
			include_once "RotaBusiness.php";
			return RotaBusiness::update($Rota);
		}

		//Funções destinadas a Classe Mission
		public static function getByIdMission($id)
		{
			include_once "MissionBusiness.php";
			return MissionBusiness::getById($id);
		}

		public static function getListAllMission()
		{
			include_once "MissionBusiness.php";
			return MissionBusiness::getListAll();
		}

		public static function getListMission($condicao)
		{
			include_once "MissionBusiness.php";
			return MissionBusiness::getList($condicao);
		}

		public static function deleteMission($id)
		{
			include_once "MissionBusiness.php";
			return MissionBusiness::delete($id);
		}

		public static function deleteCondicaoMission($condicao)
		{
			include_once "MissionBusiness.php";
			return MissionBusiness::deleteCondicao($condicao);
		}

		public static function insertMission($Mission)
		{
			include_once "MissionBusiness.php";
			return MissionBusiness::insert($Mission);
		}

		public static function updateMission($Mission)
		{
			include_once "MissionBusiness.php";
			return MissionBusiness::update($Mission);
		}

		//Funções destinadas a Classe FileSimulation
		public static function getByIdFileSimulation($id)
		{
			include_once "FileSimulationBusiness.php";
			return FileSimulationBusiness::getById($id);
		}

		public static function getListAllFileSimulation()
		{
			include_once "FileSimulationBusiness.php";
			return FileSimulationBusiness::getListAll();
		}

		public static function getListFileSimulation($condicao)
		{
			include_once "FileSimulationBusiness.php";
			return FileSimulationBusiness::getList($condicao);
		}

		public static function deleteFileSimulation($id)
		{
			include_once "FileSimulationBusiness.php";
			return FileSimulationBusiness::delete($id);
		}

		public static function deleteCondicaoFileSimulation($condicao)
		{
			include_once "FileSimulationBusiness.php";
			return FileSimulationBusiness::deleteCondicao($condicao);
		}

		public static function insertFileSimulation($FileSimulation)
		{
			include_once "FileSimulationBusiness.php";
			return FileSimulationBusiness::insert($FileSimulation);
		}

		public static function updateFileSimulation($FileSimulation)
		{
			include_once "FileSimulationBusiness.php";
			return FileSimulationBusiness::update($FileSimulation);
		}

		
	}
?>
