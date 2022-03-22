<?php
    require_once('AbstractClass/Bebida.php');
    class Vinho extends Bebida
    {
        private $tipo;
        private $safra;

        // Usamos get para obter informações. Esse tipo de método sempre retorna um valor.
        public function getTipo()
        {
            return $this->tipo;
        }

        public function getSafra()
        {
            return $this->safra;
        }
        
        // Usamos set para definir valores. Esse tipo de método geralmente não retorna valores.
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function setSafra($safra)
        {
            $this->safra = $safra;
        }

        // Construtor com parâmetros.
        // public function __construct($nome, $tipo, $preco, $safra)
        // {
        //     $this->nome = $nome;
        //     $this->tipo = $tipo;
        //     $this->preco = $preco;
        //     $this->safra = $safra;
        // }
        
        // Funções da super classe.
        public function mostrarBebida()
        {
            $descricaoBebida = "<br><span style='color:red';>Nome do Vinho: </span>".
                                "<span style='color:blue';><b>".$this->getNome()."</b></span><br><br>".
                                "<span style='color:red';>Tipo do Vinho: </span>".
                                "<span style='color:blue';><b>".$this->getTipo()."</b></span><br><br>".
                                "<span style='color:red';>Preço do Vinho: </span>".
                                "<span style='color:blue';><b>".$this->getPreco()."</b></span><br><br>".
                                "<span style='color:red';>Safra do Vinho: </span>".
                                "<span style='color:blue';><b>".$this->getSafra()."</br></span>"; 
            
                                return $descricaoBebida;
        }

        public function verificarPreco($preco)
        {
            $retorno = FALSE;
            if($preco < 25)
            {
                $retorno = true;
                echo "<span style='color:green';><b>
                            Produto: Dentro do orçamento!</b>
                        </span><br>";
            }
            else
            {
                $retorno = FALSE;
                echo "<br><span style='color:red';><b>
                                Produto: Caro!</b>
                            </span><br/>";  
            }
        }
    }
?>