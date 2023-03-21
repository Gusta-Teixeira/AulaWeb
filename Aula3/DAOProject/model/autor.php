<?php

    class autor{
        public $id;
        public $nome;
        public $email;
        public $website;
        
        function setId($id){
            $this->id = $id;
        }
        function getId(){
            return $this->id;
        }
        
        function setNome($nome){
            $this->nome = $nome;
        }
        function getNome(){
            return $this->nome;
        }

        function setEmail($email){
            $this->email = $email;
        }
        function getEmail(){
            return $this->email;
        }

        function setWebSite($website){
            $this->website = $website;
        }
        function getWebSite(){
            return $this->website;
        }

       
        
    }



?>