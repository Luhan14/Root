<?php
    include 'conexao.php';

    if(isset($_POST['inserir'])) {
    
    $id_post = $_POST['id_post'];
    $titulo_post = $_POST['titulo_post'];
    $data_post = $_POST['data_post'];
    $post_ativo = $_POST['post_ativo'];
    $foto = $_FILES['foto'];
    if(imagemValida($img) == false){
        echo 'Imagem inválida';
    }else{
        
    }
}

    function imagemValida($img){
        if($img['type'] == 'image/jpeg' || $img['type'] == 'image/png' || $img['type'] == 'image/jpg'){
            $tamanho = intval($img['size']/1024);

            if($tamanho < 300){
                return true;
            }else{
                echo 'Tamanho excedido. <br> *Tamanho máximo: 300KB.';
            }
        }else{
            echo 'Informe um formato de imagem correto.<br> *Formatos permitidos: jpg, png e jpeg.';
        }
}

    function uploadFile($file){
        $formatoArquivo = explode('.',$file['name']); //assim vc pega o nome do arquivo
        $nomeImagem = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1]; //vai gerar um id único
        if(move_uploaded_file($file['tmp_name'], BASE_DIR_PAINEL.'/uploads/'.$nomeImagem)){
        return $nomeImagem;
        }else{
        return false;
    }
}






?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Dinâmico</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <div id="box-cadastro">
        <div id="formulario-menor">
            <form id="frmpost" name="frmpost" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                <fieldset>
                    <legend>Cadastro Post</legend>
                    <label for="">
                        <span>Titulo do Post</span>
                        <input type="text" name="txt_titulo" id="txt_titulo" value="">
                    </label>
							
					<label>
						<span>Data do Post</span>
						<input  type="date" name="txt_data" id="txt_data" value ="">
					</label>
							
					<label>
						<span>Ativo</span>
						<input type="text" name="txt_ativo" id="txt_ativo" value ="" /><br/><br/>						
					</label>
                    
                    
                    Foto de Exibição:<br/>
                    <input type="file" name="foto" /><br /><br />
                    <button type="submit" name="inserir" class="btn btn-primary">Inserir</button> 
                </fieldset>
            </form>
        </div>
    </div>    
							
</body>
</html>