<?php

class Database{
	private static $conexao;

	
	public static function getConexao(){
		if(self::$conexao == NULL){
			$username = 'root';
			$password = '123';
			$database_name = 'estante';
			self::$conexao = new PDO("mysql:host=localhost;dbname=$database_name", $username, $password);
		} 
		return self::$conexao;
	}
}