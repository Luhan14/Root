<?php

include "conexao.php";

if (isset($_POST['inserir'])) {

$id_post = $_POST['id_post'];
$id_categoria = $_POST['id_categoria'];
$titulo_post = $_POST['titulo_post'];
$descricao_post = $_POST['descricao_post']
$img_post = $_FILES['img_post'];
$visitas = $_POST['visitas'];
$data_post = $_POST['data_post'];
$post_ativo = $_POST['post_ativo'];



if (!empty($img_post["name"])) {
		
    // Largura máxima em pixels
    $largura = 150;
    // Altura máxima em pixels
    $altura = 180;
    // Tamanho máximo do arquivo em bytes
    $tamanho = 100000;

    $error = array();

    // Verifica se o arquivo é uma imagem
    if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img_post["type"])){
        $error[1] = "Isso não é uma imagem.";
        } 

    // Pega as dimensões da imagem
    $dimensoes = getimagesize($img_post["tmp_name"]);

    // Verifica se a largura da imagem é maior que a largura permitida
    if($dimensoes[0] > $largura) {
        $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
    }

    // Verifica se a altura da imagem é maior que a altura permitida
    if($dimensoes[1] > $altura) {
        $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
    }
    
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if($img_post["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
    }

    // Se não houver nenhum erro
    if (count($error) == 0) {
    
        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img_post["name"], $ext);

        // Gera um nome único para a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        // Caminho de onde ficará a imagem
        $caminho_imagem = "../upload_imagem/fotos/" . $nome_imagem;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($img_post["tmp_name"], $caminho_imagem);
    
        // Insere os dados no banco
        $sql = $cn->query("INSERT INTO post VALUES ('', '".$id_post."', '".$id_categoria."', '".$titulo_post."', '".$descricao_post."', '".$visitas."', '".$data_post."', '".$post_ativo."', '".$nome_imagem."')");
        
        // Se os dados forem inseridos com sucesso
        if ($sql){
            echo "Post cadastrado com sucesso.";
        }
    }

    // Se houver mensagens de erro, exibe-as
    if (count($error) != 0) {
        foreach ($error as $erro) {
            echo $erro . "<br />";
       }
     }
   }
 }

?>

