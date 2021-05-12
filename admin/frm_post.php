<?php
//include 'conexao.php';
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
<div id="box-cadatro">
<div id="box-cadastro">
        <div id="formulario-menor">
            <form id="frmcategoria" name="frmcategoria" action="op_categoria.php" method="post">
                <fieldset>
                    <legend>Cadastro Post</legend>
                    <label for="">
                        <span>Titulo do Post</span>
                        <input type="text" name="txt_titulo" id="txt_titulo" value="">
                    </label>
                    <label>
						<span>Conteúdo do post</span>
						<textarea  name="txt_descricao" id="txt_descricao" value=""></textarea>
                    </label>
                    <label for="">
                        <span>Categoria</span>
                        <input type="text" name="txt_categoria" id="txt_categoria" value="">
                    </label>
                    <label>
						<span>Escolha a imagem</span>
						<input type="text" name="txt_imagem" value ="">
					</label>
							
					<label>
						<span>Data do Post</span>
						<input type="text" name="txt_data" id="txt_data" value ="">
					</label>
							
					<label>
						<span>Online/Offline</span>
						<input type="text" name="txt_ativo" id="txt_ativo"  value ="">						
					</label>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Inserir</button> 
                </fieldset>
            </form>
        </div>
    </div>    
							
</body>
</html>