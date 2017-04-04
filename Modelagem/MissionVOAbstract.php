<?php
    abstract class MissionVOAbstract
    {
		private $id=0;
        private $nome;
        private $localidade;
        private $gps;
        private $data;
        private $status;
        private $idSimulation;
        function getId()
        {
            return $this->id;
        }
        function setId ($id)
        {
            $this->id=$id;
        }
        function getNome()
        {
            return $this->nome;
        }
        function setNome ($nome)
        {
            $this->nome=$nome;
        }
        function getLocalidade()
        {
            return $this->localidade;
        }
        function setLocalidade ($localidade)
        {
            $this->localidade=$localidade;
        }
        function getGps()
        {
            return $this->gps;
        }
        function setGps ($gps)
        {
            $this->gps=$gps;
        }
        function getData()
        {
            return $this->data;
        }
        function setData ($data)
        {
            $this->data=$data;
        }
        function getStatus()
        {
            return $this->status;
        }
        function setStatus ($status)
        {
            $this->status=$status;
        }
        function getIdSimulation()
        {
            return $this->idSimulation;
        }
        function setIdSimulation ($idSimulation)
        {
            $this->idSimulation=$idSimulation;
        }
    }
?>