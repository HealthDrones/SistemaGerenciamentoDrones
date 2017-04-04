<?php
    abstract class RotaVOAbstract
    {
		private $id=0;
        private $origemL;
        private $origemA;
        private $rota;
        private $idSimularion;
        private $idFile;
        function getId()
        {
            return $this->id;
        }
        function setId ($id)
        {
            $this->id=$id;
        }
        function getOrigemL()
        {
            return $this->origemL;
        }
        function setOrigemL ($origemL)
        {
            $this->origemL=$origemL;
        }
        function getOrigemA()
        {
            return $this->origemA;
        }
        function setOrigemA ($origemA)
        {
            $this->origemA=$origemA;
        }
        function getRota()
        {
            return $this->rota;
        }
        function setRota ($rota)
        {
            $this->rota=$rota;
        }
        function getIdSimularion()
        {
            return $this->idSimularion;
        }
        function setIdSimularion ($idSimularion)
        {
            $this->idSimularion=$idSimularion;
        }
        function getIdFile()
        {
            return $this->idFile;
        }
        function setIdFile ($idFile)
        {
            $this->idFile=$idFile;
        }
    }
?>