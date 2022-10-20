<?php
    $pdo = new PDO("mysql:host=localhost;dbname=fatepi", "root", "");

    $sql = $pdo->query("SELECT * FROM pessoa");

    $xml = "<?xml version='1.0'?>\n";
    $xml .= "<pessoas>\n";

    while($reg = $sql->fetchObject()){
        $xml .= "\t<pessoa>\n";
        $xml .= "\t\t<id>$reg->id</id>\n";
        $xml .= "\t\t<nome>$reg->nome</nome>\n";
        $xml .= "\t\t<curso>$reg->curso</curso>\n";
        $xml .= "\t\t<telefone>$reg->telefone</telefone>\n";
        $xml .= "\t\t<email>$reg->email</email>\n";
        $xml .= "\t\t<periodo>$reg->periodo</periodo>\n";
        $xml .= "\t</pessoa>\n";
    }

    $xml .= "</pessoas>";

    $p = fopen("bd_pessoas.xml", 'w');

    fwrite($p, $xml);
    $p = fclose($p);
?>