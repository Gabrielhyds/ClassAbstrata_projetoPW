<?php
    require_once("/xampp/htdocs/Gabriel_silva/AbstractClass/Bebida.php");

     class Suco extends Bebida{
        private $sabor;

        public function setSabor($sabor){
            $this->sabor = $sabor;
        }
        public function getSabor(){
            return $this->sabor;
        }
        public function mostrarBebida(){
            $retorno = "<br><span style='color:red';>Nome do Suco: </span>"."<span style='color:blue';><b>".$this->getNome()."</b></span><br><br>".
                       "<span style='color:red';>Preço do Suco: </span>"."<span style='color:blue';><b>".$this->getPreco()."</b></span><br><br>".
                       "<span style='color:red';>Preço do Suco: </span>"."<span style='color:blue';><b>".$this->getSabor()."</b></span><br><br>";
             return $retorno;
         }
         public function verificaPreco($preco){
             $retorno = FALSE;
             if($preco < 2.5){
                 $retorno = true;
                 echo "<Br><span style='color:green';><b>Produto: Dentro do orçamento!</b></span><br>";
             }else{
                 $retorno = FALSE;
                 echo "<br><span style='color:red';><b>produto: Caro!</b></span><br/>";  
             }
         }



     }

?>