<?php
    require_once("/xampp/htdocs/Gabriel_silva/AbstractClass/Bebida.php");
    class Vinho extends Bebida{        
        private $safra;
        private $tipo;
    
        public function setSafra($safra){
            $this->safra = $safra;
        }
        public function getSafra(){
            return $this->safra;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }

        public function mostrarBebida(){
           $retorno = "<br><span style='color:red';>Nome do Vinho: </span>"."<span style='color:blue';><b>".$this->getNome()."</b></span><br><br>".
                      "<span style='color:red';>Tipo do Vinho: </span>"."<span style='color:blue';><b>".$this->getTipo()."</b></span><br><br>".
                      "<span style='color:red';>Preço do Vinho: </span>"."<span style='color:blue';><b>".$this->getPreco()."</b></span><br><br>".
                      "<span style='color:red';>Safra do Vinho: </span>"."<span style='color:blue';><b>".$this->getSafra()."</br></span>"; 
            return $retorno;
        }
        public function verificaPreco($preco){
            $retorno = FALSE;
            if($preco < 25){
                $retorno = true;
                echo "<span style='color:green';><b>Produto: Dentro do orçamento!</b></span><br>";
            }else{
                $retorno = FALSE;
                echo "<br><span style='color:red';><b>produto: Caro!</b></span><br/>";  
            }
        }




    }

?>