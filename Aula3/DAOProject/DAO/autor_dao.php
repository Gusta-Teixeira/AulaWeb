<?php
require_once(DIR_BASE.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."autor.php");
require_once(DIR_BASE.DIRECTORY_SEPARATOR."DAO".DIRECTORY_SEPARATOR."conexao.php");

class autorDAO{

	private $conexao;

	function __construct(){
		$this->conexao = Database::getConexao();
	}

	function getAutor(){
		
		$sql = "SELECT * FROM autor";    
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

        $data =  $stmt->fetchAll(PDO::FETCH_ASSOC); 

        $listaAutores = []; 
    	foreach($data as $row) {
    	    $autor = new Autor(); 
    	    $autor->setId($row['id']);
    	    $autor->setNome($row['nome']);
    	    $autor->setEmail($row['email']);
			$autor->setWebSite($row['website']);
    	    array_push($listaAutores, $autor);
    	}
    	return $listaAutores;

	}

	function getAutorPorId($id){
		
		$sql = "SELECT * FROM autor where id = :id";    
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();

        $dadosAutor =  $stmt->fetch(PDO::FETCH_ASSOC); #Executa a consulta no banco de dados
        if ($dadosAutor == false){
        	return NULL;
        } 
        else{
        	$autor = new Autor(); #Cria um objeto pessoa para cada registro do BD
    	    $autor->setId($dadosAutor['id']);
    	    $autor->setNome($dadosAutor['nome']);
    	    $autor->setEmail($dadosAutor['emai']);
			$autor->setWebSite($dadosAutor['website']);
    	    return $autor;
        

    	}
    	

	}
}