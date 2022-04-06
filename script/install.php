<?php 
// require_once "../Config.php";
$pdo = new PDO(Config::DB_CONNECT,Config::DB_USERNAME,Config::DB_PASSWORD);
// alt + 96  backtick --> da col
$queryInstall = "DROP TABLE utenti; CREATE TABLE utenti (
	            user_id INT(11) NOT NULL AUTO_INCREMENT,
	            nome VARCHAR(125) NULL DEFAULT NULL,
	            cognome VARCHAR(125) NULL DEFAULT NULL,
	            email VARCHAR(125) NULL DEFAULT NULL,
	PRIMARY KEY (`user_id`),
	UNIQUE INDEX `email` (`email`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;";

$res = $pdo->query($queryInstall);
$error = $pdo->errorInfo();