<!DOCTYPE html>
<html lang="pt-br">
<head>


<title> Criando um site completo </title>
<link href="estilo-admin.css" type = "text/css" rel="stylesheet" media="all" >
</head>	
<body>
	
	<table width ="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#660000">
		<tr bgcolor="#993300" align= "center">
			<td width="15%" height="20"><strong><font size="2" color="#FFF">Código</font></strong> </td>
			<td width="60%" height="20"><strong><font size="2" color="#FFF">Título</font></strong> </td>
			<td width="15%" height="20"><strong><font size="2" color="#FFF">Ativo</font></strong></td>
			<td colspan="2" height="20"><strong><font size="2" color="#FFF">Opções</font></strong></td>
		<tr>

        <?php
    include_once 'conexao.php';
    
    $res = $cn->query("SELECT * FROM post");

    while ($row = $res->fetch()){


    ?>


    <tr bgcolor="#fff">
        <td><font size="2" face="verdana-arial"><?php echo $row['id_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['titulo_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['data_post']?></font></td>
        <td><font size="2" face="verdana-arial"><?php echo $row['post_ativo']?></font></td>
        <td align="center"><font size="2" face="verdana,arial"><a href="principal.php?link=">Alterar</a></font></td>
        <td align="center"><font size="2" face="verdana,arial"><a href="principal.php?link=">Excluir</a></font></td>
        </tr>

<?php
}
?>
</table>
</body>
</html>