<?php

include_once 'autor.php';
include_once 'editora.php';

class livro{

private array $autor; 
private $titulo;
private $isbn;
private $nPaginas;
private $anoPublicacao;
private $numEdicao;
private $editora; 

function __construct(){
    $this -> autor = [];
    $this -> editora = [];
}

function addAutor($autor){
    array_push( $this-> autor, $autor);
}

function addEditora($editora){
    array_push( $this-> editora, $editora);
}

function getAutor(){
    return $this -> autor;
}

function setTitulo($titulo){
    $this->titulo = $titulo;
}

function getTitulo(){
    return $this->titulo;
}

function setIsbn($isbn){
    $this->isbn = $isbn;
}

function getIsbn(){
    return $this->isbn;
}

function setPaginas($nPaginas){
    $this->nPaginas = $nPaginas;
}

function getPaginas(){
    return $this->nPaginas;
}

function setAnoPublicacao($anoPublicacao){
    $this->anoPublicacao = $anoPublicacao;
}

function getAnoPublicacao(){
    return $this->anoPublicacao;
}

function setNumEdicao($numEdicao){
    $this->numEdicao = $numEdicao;
}

function getNumEdicao(){
    return $this->numEdicao;
}

}

$autor1 = new autor();
$autor1 -> setNome("J. R. R. Tolkien<br>");
$nomeautor1 = $autor1 -> getNome();

$autor1 -> setEmail("Tolkien@gmail.com<br>");
$emailAutor1 = $autor1 -> getEmail();

$autor1 -> setWebSite("JRRTolkien.com<br>");
$websiteAutor1 = $autor1 -> getWebSitee();



$livro1 = new livro();
$livro1 -> setTitulo("Senhor dos aneis A Sociedade do Anel<br>");
$titulolivro1 = $livro1 -> getTitulo();

$livro1 -> setIsbn("8845292614<br>");
$isbnlivro1 = $livro1 -> getIsbn();

$livro1 -> setPaginas("1202<br>");
$nPaginasLivro1 = $livro1 -> getPaginas();

$livro1 -> setAnoPublicacao("1954<br>");
$anoPublicacaoLivro1 = $livro1 -> getAnoPublicacao();

$livro1 -> setNumEdicao("3<br>");
$NumEdicaoLivro1 = $livro1 -> getNumEdicao();


$livro2 = new livro();
$livro2 -> setTitulo("Senhor dos aneis As Duas Torres<br>");
$titulolivro2 = $livro2 -> getTitulo();

$livro2 -> setIsbn("8125292412<br>");
$isbnlivro2 = $livro2 -> getIsbn();

$livro2 -> setPaginas("1345<br>");
$nPaginasLivro2 = $livro2 -> getPaginas();

$livro2 -> setAnoPublicacao("1964<br>");
$anoPublicacaoLivro2 = $livro2 -> getAnoPublicacao();

$livro2 -> setNumEdicao("5<br>");
$NumEdicaoLivro2 = $livro2 -> getNumEdicao();


$livro1 -> addAutor($autor1);
$livro2 -> addAutor($autor1);



$editora1 = new editora();
$editora1 -> setNome("HarperCollins<br>");
$nomeeditora1 = $editora1 -> getNome();

    
$editora1 -> setTelefone("(11) 9238-1241<br>");
$telefoneEditora1 = $editora1 -> getTelefone();

$editora1 -> setEmail("HarperCollins@gmail.com<br>");
$emaileditora1 = $editora1 -> getEmail();

    
$editora1 -> setWebSite("HarperCollins.com<br>");
$websiteeditora1 = $editora1 -> getWebSite();



$livro1 -> addEditora($editora1);
$livro2 -> addEditora($editora1);




$autor2 = new autor();
$autor2 -> setNome("C. S. Lewis<br>");
$nomeautor2 = $autor2 -> getNome();

$autor2 -> setEmail("CSLewis@gmail.com<br>");
$emailAutor2 = $autor2 -> getEmail();

$autor2 -> setWebSite("CSLewis.com<br>");
$websiteAutor2 = $autor2 -> getWebSitee();



$livro3 = new livro();
$livro3 -> setTitulo("O Leão, a Feiticeira e o Guarda-Roupa<br>");
$titulolivro3 = $livro3 -> getTitulo();

$livro3 -> setIsbn("9780001831803<br>");
$isbnlivro3 = $livro3 -> getIsbn();

$livro3 -> setPaginas("184 <br>");
$nPaginasLivro3 = $livro3 -> getPaginas();

$livro3 -> setAnoPublicacao("1950<br>");
$anoPublicacaoLivro3 = $livro3 -> getAnoPublicacao();

$livro3 -> setNumEdicao("5<br>");
$NumEdicaoLivro3 = $livro3 -> getNumEdicao();


$livro4 = new livro();
$livro4-> setTitulo("Príncipe Caspian<br>");
$titulolivro4 = $livro4 -> getTitulo();

$livro4 -> setIsbn("0064471055<br>");
$isbnlivro4 = $livro4 -> getIsbn();

$livro4 -> setPaginas("256<br>");
$nPaginasLivro4 = $livro4 -> getPaginas();

$livro4 -> setAnoPublicacao("1951<br>");
$anoPublicacaoLivro4 = $livro4 -> getAnoPublicacao();

$livro4 -> setNumEdicao("7<br>");
$NumEdicaoLivro4 = $livro4 -> getNumEdicao();


$livro3 -> addAutor($autor2);
$livro4 -> addAutor($autor2);



$editora2 = new editora();
$editora2 -> setNome("WMF Martins Fontes<br>");
$nomeeditora2 = $editora2 -> getNome();

    
$editora2 -> setTelefone("(11) 4151-8479<br>");
$telefoneEditora2 = $editora2 -> getTelefone();

$editora2 -> setEmail("WMFMartinsFontes@gmail.com<br>");
$emaileditora2 = $editora2 -> getEmail();

    
$editora2 -> setWebSite("WMFMartinsFontes.com<br>");
$websiteeditora2 = $editora2 -> getWebSite();



$livro3 -> addEditora($editora2);
$livro4 -> addEditora($editora2);



?>