<?php
    abstract class Bebida
    {
        private $nome;
        private $preco;
        
        // Usamos get para obter informações. Esse tipo de método sempre retorna um valor.
        public function getNome()
        {
            return $this->nome;
        }
        
        public function getPreco()
        {
            return $this->preco;
        }
        
        // Usamos set para definir valores. Esse tipo de método geralmente não retorna valores.
        public function setNome($nome)
        {
            $this->nome =$nome;
        }

        public function setPreco($preco)
        {
            $this->preco = $preco;
        }

        //Métodos abstratos.
        abstract function mostrarBebida();       
        abstract function verificarPreco($preco);
    }
?>