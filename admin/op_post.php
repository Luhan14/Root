<?php

include "conexao.php";


$id_post = $_POST['id_post'];
$txt_titulo = $_POST['txt_titulo'];
$txt_imagem = $_POST['txt_imagem'];
$txt_data = $_POST['txt_data'];
$txt_ativo = $_POST['txt_ativo'];
$foto = $_FILES ['foto'];


try { 
    $sql = "INSERT INTO post (id_post, titulo_post, img_post, data_post, post_ativo) VALUES ('$id_post','$txt_titulo','$txt_imagem','$txt_data','$txt_ativo')";
    $sql = "INSERT INTO usuarios (foto) VALUES ('$foto')";
    $cn->prepare($sql)->execute([$id_post, $txt_titulo, $txt_imagem, $txt_data, $txt_ativo, $foto]);
    }catch(exception $e){
   
    echo "Error", $e->getMessage();
   } 

?>