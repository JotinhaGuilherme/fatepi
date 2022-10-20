<?php

$xml_data = simplexml_load_file("bd_pessoas.xml");

foreach($xml_data->pessoa as $res){
    echo "<h6>Resultado de XML</h6>";
    echo "<br>";
    echo 'id: '.$res->id.'';
    echo "<br>";
    echo 'Nome: '.$res->nome.'';
    echo "<br>";
    echo 'Curso: '.$res->curso.'';
    echo "<br>";
    echo 'Telefone: '.$res->telefone.'';
    echo "<br>";
    echo 'E-mail: '.$res->email.'';
    echo "<br>";
    echo 'Periodo: '.$res->periodo.'';
    echo "<hr>";
}

?>