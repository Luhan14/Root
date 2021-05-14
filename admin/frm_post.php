<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <title>Site Dinâmico</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <div id="box-cadastro">
        <div id="formulario-menor">
            <form id="frmpost" name="frmpost" action="op_post.php" enctype="multipart/form-data" method="post">
                <fieldset>
                    <legend>Cadastro Post</legend>
                    
                    <label for="">
                        <span>Titulo do Post</span>
                        <input type="text" name="titulo_post" id="titulo_post" value="">
                    </label>

                    <label for="">
                        <span>Descrição</span>
                        <input type="text" name="descricao_post" id="descricao_post" value="">
                    </label>

                    <label for="">
                        <span>Visitas</span>
                        <input type="text" name="visitas" id="visitas" value="">
                    </label>

					<label>
						<span>Data do Post</span>
						<input  type="date" name="data_post" id="data_post" value ="">
					</label>
							
					<label>
						<span>Ativo</span>
						<input type="text" name="post_ativo" id="post_ativo" value ="" /><br/><br/>						
					</label>
                    
                    
                    Foto de Exibição:<br/>
                    <input type="file" name="img_post" id="img_post"/><br /><br />
                    <button type="submit" name="inserir"   class="btn btn-primary">Inserir</button> 
                </fieldset>
            </form>

            <hr />

<h1>Imagem Cadastrada</h1>
<?php

include "conexao.php";
// Seleciona todos as imagens
$sql = $cn->query("SELECT * FROM post ORDER BY img_post");

// Exibe as informações de cada imagem
foreach ($sql->fetchAll(PDO::FETCH_CLASS) as $x => $user ) {
	// Exibimos a foto
	echo "<img src='fotos/".$user->img_post."' alt='Foto de exibição' /><br />";
	// Exibimos a foto
	
    echo "<b>Imagem:</b> " . $user->img_post . "<br /><br />";

}


?>

</div>
</div>    					
</body>
</html>