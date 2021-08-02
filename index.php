<?php

require __DIR__ . "/source/autoload.php";

$model = new  \Source\Models\Devs();

$devs = $model->bootstrap(
    "Pedro Mabango",
    "PHP, Jquery, Bootstrap,etc",
    "Pedro Mabango Makengo",
    "PedroMabango",
    "4",
    "pedromakengomigue@gmail.com"
);


if(!$devs->findByEmail($devs->email)){

    echo "<p>Cadastro realizado!</p>";
    $devs->save();

}else if($devs->findByEmail($devs->email)){

    $devs = $model->bootstrap(
        "Pedro Makengo Miguel",
        "PHP, Jquery, Bootstrap,etc",
        "Pedro Makengo",
        "PedroMakengo",
        "4",
        "pedromakengomiguel@gmail.com"
    );

    echo "<p>Dados Actualizado com Sucessos</p>";
    $devs->save();

}
var_dump($devs->fetch());

echo "<br></br>";

var_dump($model->find()->limit(3)->order("nome")->fetch(true));

echo "<br></br>";

$id =3;
if($devs->delete("id = :id","id={$id}")){
    echo "<p>Dados apagado com Sucessos</p>";
}

echo "<br></br>";
var_dump($devs->find()->count());

