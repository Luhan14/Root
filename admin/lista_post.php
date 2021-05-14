<!DOCTYPE html>
<html lang="pt-br">
<head>


<title> Criando um site completo </title>
<link href="estilo-admin.css" type = "text/css" rel="stylesheet" media="all" >
</head>	
<body>
	
	<table width ="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#660000">
		<tr bgcolor="#993300" align= "center">
			<td width="15%" height="20"><strong><font size="2" color="#FFF">Titulo</font></strong> </td>
			<td width="10%" height="20"><strong><font size="2" color="#FFF">Descrição</font></strong> </td>
			<td colspan="2%" height="10"><strong><font size="2" color="#FFF">Visistas</font></strong></td>
            <td colspan="2%" height="10"><strong><font size="2" color="#FFF">Data</font></strong></td>
            <td colspan="2%" height="10"><strong><font size="2" color="#FFF">Ativo</font></strong></td>
		<tr>

        <?php
    include_once 'conexao.php';
    
    $res = $cn->query("SELECT * FROM post");

    while ($row = $res->fetch()){


    ?>


    <tr bgcolor="#fff">
        <td><font size="2" face="verdana-arial"><?php echo $row['id_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['id_categoria']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['titulo_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['descricao_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['img_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['visitas']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['data_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['post_ativo']?></font></td>
        
        </tr>

<?php
}
?>
</table>
</body>
</html>