<?php
    class Carro {
        private $marca;
        private $modelo;
        private $ano;

        function __construct($marca, $modelo, $ano) {
            if($ano < 2000) {
                echo "Ano inferior a 200, não permitido";
            } else {
                $this->marca = $marca;
                $this->modelo = $modelo;
                $this->ano = $ano;
            }
        }

        // Método
        function get_marca(){
            return $this->marca;
        }

        function set_marca($marca){
            $this->marca = $marca;
        }
        
        function get_modelo() {
            return $this->modelo;
        }

        function set_modelo($modelo) {
            $this->modelo = $modelo;
        }

        function get_ano() {
            return $this->ano;
        }

        function set_ano($ano) {
            $this->ano = $ano;
        }
    }
?>