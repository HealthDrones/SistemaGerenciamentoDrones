<?php
    abstract class SimulationVOAbstract
    {
		private $id=0;
        private $nome;
        private $dataExecucao;
        private $largura;
        private $altura;
        private $status;
        private $idUser;
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
        function getDataExecucao()
        {
            return $this->dataExecucao;
        }
        function setDataExecucao ($dataExecucao)
        {
            $this->dataExecucao=$dataExecucao;
        }
        function getLargura()
        {
            return $this->largura;
        }
        function setLargura ($largura)
        {
            $this->largura=$largura;
        }
        function getAltura()
        {
            return $this->altura;
        }
        function setAltura ($altura)
        {
            $this->altura=$altura;
        }
        function getStatus()
        {
            return $this->status;
        }
        function setStatus ($status)
        {
            $this->status=$status;
        }
        function getIdUser()
        {
            return $this->idUser;
        }
        function setIdUser ($idUser)
        {
            $this->idUser=$idUser;
        }
    }
?>