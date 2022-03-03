
⁡⁣⁣⁢<!-- O que é o Comando $_Session -->
<!-- Uma sessão é uma maneira de armazenar informações (em variáveis) para serem usadas em várias páginas. -->

<!-- Quando você trabalha com um aplicativo, você o abre, faz algumas alterações e depois o fecha. Isso é muito parecido com uma Sessão. 
O computador sabe quem você é. Ele sabe quando você inicia o aplicativo e quando você termina. Mas na internet há um problema:  
o servidor web não sabe quem você é ou o que você faz, porque o endereço HTTP não mantém o estado. -->⁡⁡




⁡
<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "red";
$_SESSION["favanimal"] = "dog";
$_SESSION["Nome"] = "Mike";
echo "Session variables are set.";
?>

</body>
</html>