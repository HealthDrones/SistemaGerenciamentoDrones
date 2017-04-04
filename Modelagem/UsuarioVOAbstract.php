<?php
    abstract class UsuarioVOAbstract
    {
		private $id=0;
        private $nome;
        private $instituicao;
        private $cidade;
        private $email;
        private $celular;
        private $login;
        private $senha;
        private $status;
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
        function getInstituicao()
        {
            return $this->instituicao;
        }
        function setInstituicao ($instituicao)
        {
            $this->instituicao=$instituicao;
        }
        function getCidade()
        {
            return $this->cidade;
        }
        function setCidade ($cidade)
        {
            $this->cidade=$cidade;
        }
        function getEmail()
        {
            return $this->email;
        }
        function setEmail ($email)
        {
            $this->email=$email;
        }
        function getCelular()
        {
            return $this->celular;
        }
        function setCelular ($celular)
        {
            $this->celular=$celular;
        }
        function getLogin()
        {
            return $this->login;
        }
        function setLogin ($login)
        {
            $this->login=$login;
        }
        function getSenha()
        {
            return $this->senha;
        }
        function setSenha ($senha)
        {
            $this->senha=$senha;
        }
        function getStatus()
        {
            return $this->status;
        }
        function setStatus ($status)
        {
            $this->status=$status;
        }
    }
?>