<?php

    class Retangulo {
        private $largura;
        private $altura;

        function __construct($largura, $altura) {
            $this->largura = $largura;
            $this->altura = $altura;
        }

        function perimetro() {
            return $this->largura + $this->altura + $this->largura + $this->altura;
        }

        function area() {
            return $this->largura * $this->altura;
        }


        function get_altura() {
            return $this->altura;
        }

        function get_largura() {
            return $this->largura;
        }

    }



