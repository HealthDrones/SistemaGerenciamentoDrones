<?php
    abstract class VehicleVOAbstract
    {
		private $id=0;
        private $nome;
        private $tipo;
        private $comunicacao;
        private $linguagem;
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
        function getTipo()
        {
            return $this->tipo;
        }
        function setTipo ($tipo)
        {
            $this->tipo=$tipo;
        }
        function getComunicacao()
        {
            return $this->comunicacao;
        }
        function setComunicacao ($comunicacao)
        {
            $this->comunicacao=$comunicacao;
        }
        function getLinguagem()
        {
            return $this->linguagem;
        }
        function setLinguagem ($linguagem)
        {
            $this->linguagem=$linguagem;
        }
    }
?>