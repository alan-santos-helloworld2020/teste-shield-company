<?php
// $dados = ["id"=>2, "name"=>"José", "email"=>"jose@teste.com"];
// echo json_encode($dados,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_UNICODE);


$x = array("aaa","ttt","www","ttt","yyy","tttt");
$y = array_count_values($x);
echo $y["ttt"];
