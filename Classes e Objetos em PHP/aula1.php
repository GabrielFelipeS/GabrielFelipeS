<?php
    class Fruta {
        // Atributos da classe
        private $nome;
        private $cor;

        // Construtor
        function __construct($nome, $cor) {
            $this->nome = $nome;
            $this->cor = $cor;
        }

        // Método
        function set_nome($nome){
            $this->nome = $nome;
        }

        function set_cor($cor){
            $this->cor = $cor;
        }
        
        function get_nome() {
            return $this->nome;
        }

        function get_cor() {
            return $this->cor;
        }

    }

    // Criação de um objeto do tipo maçã
    $maca = new Fruta("Maça", "Vermelha");
    $banana = new Fruta("Banana", "Amarela");
    /*
    try{
        $banana = new Fruta();
    } catch(Exception $e) {
        echo "Gabriel";
    }

   
    $maca->set_nome("Maçã"); // Para atributos com tipo de Modificador de Acesso: private
    $maca->set_cor("Vermelha");
    echo "<br>".$maca->get_nome().", ".$maca->get_cor();


    

    $banana->set_nome("Banana");
    $banana->set_cor("Amarelo");
    echo "<br>".$banana->get_nome().", ".$banana->get_cor();

    $mamao = new Fruta();
    $mamao->set_nome("Mamão");
    $mamao->set_cor("Verde");
    echo "<br>".$mamao->get_nome().", ".$mamao->get_cor();
    */

    function divide($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {
        echo divide(25, 1);
      } catch(Exception $e) {
        echo "Unable to divide. ";
      } finally {
        echo "Process complete.";
      }

    
    ?>



