<?php
session_start();
if (empty($_SESSION['captcha'])) {
    $n = rand(1000, 9999);
    $_SESSION['captcha'] = $n;
}
if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $codigo = addslashes($_POST['codigo']);
    if ($codigo == $_SESSION['captcha']) {
        echo "<p>Logado!</p>";
    } else {
        echo "<p>Código de Captcha inválido</p>";
    }
    $n = rand(1000, 9999);
    $_SESSION['captcha'] = $n;
}
?>
<form method="POST">
    E-mail:<br/>
    <input type="email" name="email" require/><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" required/><br/><br/>
    <img src="imagem.php" width="100" height="50"/><br/>
    <input type="tel" name="codigo" required /><br/>
    <input type="submit" value="Entrar"/>
</form>