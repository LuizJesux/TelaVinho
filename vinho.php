<?php
    class vinho{
        private $nome;
        private $tipo;
        private $preco;
        private $safra;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getSafra(){
            return $this->safra;
        }
        public function setSafra($safra){
            $this->safra = $safra;
        }

        public function mostrarVinho(){
            return $this->nome.' '. $this->tipo.' '. $this->preco.' '. $this->safra.' ';
        }

        public function verificarPreco($preco){
            if($preco<25){
                $preco = true;
            }
        
        }
    }