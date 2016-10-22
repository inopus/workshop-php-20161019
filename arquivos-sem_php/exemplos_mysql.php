<?php
$db = new PDO("mysql:host=localhost:3306;dbname=workshop", "root", "root", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//CREATE
$stm = $db->prepare("
CREATE TABLE IF NOT EXISTS Usuarios
(
ID INT NOT NULL AUTO_INCREMENT,
NOME VARCHAR(255),
PROFISSAO VARCHAR(255),
DATA_INCLUSAO DATETIME,
PRIMARY KEY (ID)
);");
$stm->execute();

//INSERT
$stm = $db->prepare("INSERT INTO Usuarios (NOME, PROFISSAO, DATA_INCLUSAO) VALUES ('GUILHERME', 'ANALISTA', '2016-10-19');");
$stm -> execute();

//DELETE
$stm = $db->prepare("DELETE FROM Usuarios WHERE ID = 1;");
$stm -> execute();

//UPDATE
$stm = $db->prepare("UPDATE Usuarios SET NOME = 'MARIA' WHERE ID = 2;");
$stm -> execute();


//SELECT
$stm = $db->prepare("SELECT * FROM Usuarios;");
if($stm->execute()) {
    $linhas = $stm->fetchAll(PDO::FETCH_BOTH);
    foreach($linhas as $linha) {
        echo 'NOME: ' . $linha["NOME"] . ' | PROFISSÃO: ' . $linha["PROFISSAO"] . '</br>';
    }
}
    
?>