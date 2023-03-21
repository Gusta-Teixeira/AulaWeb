<?php

class editora{
        public $nome;
        public $telefone;
        public $email;
        public $website;

        function setNome($nome){
            $this->nome = $nome;
        }
        function getNome(){
            return $this->nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        function getTelefone(){
            return $this->telefone;
        }

        function setEmail($email){
            $this->email = $email;
        }
        function getEmail(){
            return $this->email;
        }

        function setWebsite($website){
            $this->website = $website;
        }
        function getWebsite(){
            return $this->website;
        }
    }

    
?>