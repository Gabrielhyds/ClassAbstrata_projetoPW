<?php
    require_once('AbstractClass/Bebida.php');
    class Refrigerante extends Bebida
    {
        private $retornavel;

        // Usamos get para obter informações. Esse tipo de método sempre retorna um valor.
        public function getRetornavel()
        {
            return $this->retornavel;
        }
        
        // Usamos set para definir valores. Esse tipo de método geralmente não retorna valores.
        public function setRetornavel($retornavel)
        {
            $this->retornavel = $retornavel;
        }

        // Construtor com parâmetros.
        // public function __construct($nome, $preco, $retornavel)
        // {
        //     $this->nome = $nome;
        //     $this->preco = $preco;
        //     $this->retornavel = $retornavel;
        // }

        // Funções da super classe.
        public function mostrarBebida()
        {
            $descricaoBebida = "<br><span style='color:red';>Nome do Refrigerante: </span>".
                                "<span style='color:blue';><b>".$this->getNome()."</b></span><br><br>".
                                "<span style='color:red';>Preço do Refrigerante: </span>".
                                "<span style='color:blue';><b>".$this->getPreco()."</b></span><br><br>".
                                "<span style='color:red';>Retornavel:  </span>".
                                "<span style='color:blue';><b>".$this->getRetornavel()."</b></span><br><br>";
                                
                                return  $descricaoBebida;
        }

        public function verificarPreco($preco)
        {
            $retorno = FALSE;
            if($preco < 5)
            { 
                $retorno = true;
                echo "<br/><span style='color:green';><b>
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
