<?php

    class Bebida{

        private $idBebida;
        private $tamano;
        private $precio;
		private $idCategoria;
		private $nSucursal;

        public function _construct(){
            $this->idBebida = '';
            $this->tamano = '';
            $this->precio ='';
			$this->idCategoria = '';
            $this->nSucursal='';
        }

        public function setIdBebida($value){
            $this -> idBebida = $value;
        }
        public function setTamano($value){
            $this -> tamano = $value;
        }
        public function setPrecio($value){
            $this -> precio = $value;
        }
		public function setIdCategoria($value){
            $this -> tamano = $value;
        }
        public function setNSucursal($value){
            $this -> nSucursal = $value;
        }



        public function getIdBebida(){
            return $this->idBebida;
        }
        public function getTamano(){
            return $this->tamano;
        }
        public function getPrecio(){
            return $this->precio;
        }
		public function getIdCategoria(){
            return $this->idCategoria;
        }
        public function getNSucursal(){
            return $this->nSucursal;
        }

        public function listarBebidas(){
            include_once('connection.php');
            $db = new DB();
            $conex = $db->conexion();
            try {
                $sentencia = $conex->query('SELECT * FROM bebidas');
                $data = $sentencia->fetchAll(PDO::FETCH_NUM);
                return $data;
                //return $respuesta;
                //echo $respuesta ;
            } catch (PDOException $e) {
                echo $e;
            }
        }

        // public function registrarCamion(){
        //     include_once('../connection.php');
        //     $db = new DB();
        //     $conex = $db->conexion();
        //     try {
        //         $sentencia = $conex->prepare('INSERT INTO camion (MATRICULA, MODELO, ANO) VALUES (?,?,?)');
        //         $sentencia->execute([$this->getMatricula(), $this->getModelo(), $this->getAno()]);
        //         $lastId = $conex->lastInsertId();
        //         return 'Registro exitoso';              
        //     } catch (PDOException $th) {
        //         $conex = null;
        //         return $th->getMessage();
        //     }
        // }

    }

?>