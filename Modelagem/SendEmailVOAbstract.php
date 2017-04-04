<?php
    abstract class SendEmailVOAbstract
    {
		private $id=0;
        private $assunto;
        private $mensagem;
        private $destinatarios;
        private $idFile;
        private $status;
        function getId()
        {
            return $this->id;
        }
        function setId ($id)
        {
            $this->id=$id;
        }
        function getAssunto()
        {
            return $this->assunto;
        }
        function setAssunto ($assunto)
        {
            $this->assunto=$assunto;
        }
        function getMensagem()
        {
            return $this->mensagem;
        }
        function setMensagem ($mensagem)
        {
            $this->mensagem=$mensagem;
        }
        function getDestinatarios()
        {
            return $this->destinatarios;
        }
        function setDestinatarios ($destinatarios)
        {
            $this->destinatarios=$destinatarios;
        }
        function getIdFile()
        {
            return $this->idFile;
        }
        function setIdFile ($idFile)
        {
            $this->idFile=$idFile;
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