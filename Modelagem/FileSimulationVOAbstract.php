<?php
    abstract class FileSimulationVOAbstract
    {
		private $id=0;
        private $nome;
        private $caminho;
        private $extensao;
        private $metadata;
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
        function getCaminho()
        {
            return $this->caminho;
        }
        function setCaminho ($caminho)
        {
            $this->caminho=$caminho;
        }
        function getExtensao()
        {
            return $this->extensao;
        }
        function setExtensao ($extensao)
        {
            $this->extensao=$extensao;
        }
        function getMetadata()
        {
            return $this->metadata;
        }
        function setMetadata ($metadata)
        {
            $this->metadata=$metadata;
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