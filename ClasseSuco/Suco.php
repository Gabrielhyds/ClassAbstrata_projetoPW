<?php
    require_once('AbstractClass/Bebida.php');
    class Suco extends Bebida
    {
        private $sabor;

        // Usamos get para obter informações. Esse tipo de método sempre retorna um valor.
        public function getSabor()
        {
            return $this->sabor;
        }
        
        // Usamos set para definir valores. Esse tipo de método geralmente não retorna valores.
        public function setSabor($sabor)
        {
            $this->sabor = $sabor;
        }

        // Construtor com parâmetros.
        // public function __construct($nome, $preco, $sabor)
        // {
        //     $this->nome = $nome;
        //     $this->preco = $preco;
        //     $this->sabor = $sabor;
        // }
        
        // Funções da super classe.
        public function mostrarBebida()
        {
            $descricaoBebida = "<br><span style='color:red';>Nome do Suco: </span>".
                            "<span style='color:blue';><b>".$this->getNome()."</b></span><br><br>".
                            "<span style='color:red';>Preço do Suco: </span>".
                            "<span style='color:blue';><b>".$this->getPreco()."</b></span><br><br>".
                            "<span style='color:red';>Preço do Suco: </span>".
                            "<span style='color:blue';><b>".$this->getSabor()."</b></span><br><br>";

                            return $descricaoBebida; 
        }

        public function verificarPreco($preco)
        {
            $retorno = FALSE;
            if($preco < 2.5)
            {
                $retorno = true;
                echo "<Br><span style='color:green';><b>
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
