<?php
 include "conexao.php";

 $txt_categoria = $_POST['txt_categoria'];
 $txt_ativo = $_POST['txt_ativo'];
 


 //$sql = "INSERT INTO categoria (categoria, cat_ativo) VALUES ('$txt_categoria','$txt_ativo')";
 //msqli_query($db, $sql) or die("Não foi possível inserir dados!");
 // $cn = new PDO("mysql:host=localhost;dbname=dinamicodb","root", "usbw");
 //$cn->setAttribute(PDO::ATTR_ERRMODE, PDO_EXCEPTION);
    try { 
        $sql = "INSERT INTO categoria (categoria, cat_ativo) VALUES ('$txt_categoria','$txt_ativo')";
        $cn->prepare($sql)->execute([$txt_categoria, $txt_ativo]);
        }catch(exception $e){
       
        echo "Error", $e->getMessage();
       }
   
?>