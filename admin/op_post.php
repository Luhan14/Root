<?php

include "conexao.php";


$id_post = $_POST["id_post"];
$id_categoria = $_POST["id_categoria"];
$txt_titulo = $_POST["txt_titulo"];
$txt_descricao = $_POST["txt_descricao"];
$txt_imagem = $_POST["txt_imagem"];
$txt_visitas = $_POST["txt_visitas"];
$txt_data = $_POST["txt_data"];
$txt_ativo = $_POST["txt_ativo"];


try { 
    $sql = "INSERT INTO post (id_post, id_categoria, titulo_post, descricao_post, img_post, visitas, data_post, post_ativo ) VALUES ('$id_post','$id_categoria', '$txt_titulo', '$txt_descricao', '$txt_imagem', '$txt_visitas', '$txt_data', '$txt_ativo')";
    $cn->prepare($sql)->execute([$id_post, $id_categoria, $txt_titulo, $txt_descricao, $txt_imagem, $txt_imagem, $txt_visitas, $txt_data, $txt_ativo ]);
    }catch(exception $e){
   
    echo "Error", $e->getMessage();
   }

?>