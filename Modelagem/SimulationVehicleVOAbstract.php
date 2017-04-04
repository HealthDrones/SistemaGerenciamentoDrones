<?php
    abstract class SimulationVehicleVOAbstract
    {
		private $id=0;
        private $idSimularion;
        private $idVehicle;
        function getId()
        {
            return $this->id;
        }
        function setId ($id)
        {
            $this->id=$id;
        }
        function getIdSimularion()
        {
            return $this->idSimularion;
        }
        function setIdSimularion ($idSimularion)
        {
            $this->idSimularion=$idSimularion;
        }
        function getIdVehicle()
        {
            return $this->idVehicle;
        }
        function setIdVehicle ($idVehicle)
        {
            $this->idVehicle=$idVehicle;
        }
    }
?>