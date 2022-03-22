<?php
    require_once("/xampp/htdocs/Gabriel_silva/AbstractClass/Bebida.php");

    class Refrigerante extends Bebida{
        private $retornavel;

        public function setRetornavel($retornavel){
            $this->retornavel = $retornavel;
        }
        public function getRetornavel(){
            return $this->retornavel;
        }
        public function mostrarBebida(){
            $retorno = "<br><span style='color:red';>Nome do Refrigerante: </span>"."<span style='color:blue';><b>".$this->getNome()."</b></span><br><br>".
                       "<span style='color:red';>Preço do Refrigerante: </span>"."<span style='color:blue';><b>".$this->getPreco()."</b></span><br><br>".
                       "<span style='color:red';>Retornavel:  </span>"."<span style='color:blue';><b>".$this->getRetornavel()."</b></span><br><br>";
             return $retorno;
         }
         public function verificaPreco($preco){
             $retorno = FALSE;
             if($preco < 5){
                 $retorno = true;
                 echo "<br/><span style='color:green';><b>Produto: Dentro do orçamento!</b></span><br>";
             }else{
                 $retorno = FALSE;
                 echo "<br><span style='color:red';><b>produto: Caro!</b></span><br/>";  
             }
         }
 



    }






?>