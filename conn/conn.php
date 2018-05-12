<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=flisol2018","root","");    
} catch(\PDOException $e){
    echo "Erro! Mensagem: ".$e->getMessage()." Código do erro: ".$e->getCode();
}
