<?php include("cabecalho.php");?>

<?php if(isset($_GET["login"]) && $_GET["login"]==1){ ?>
    <p class="alert-success">Logado com sucesso!</a>
<?php } ?>

    <?php /* em PHP toda string por definição é true,
    então até a string false se torna verdadeira,
    para resolver isso podemos passar zero "0" ou vazio ""
    quando desejarmos passar um parametro como sendo falso
    Veja no exemplo abaixo*/?>

<?php if(isset($_GET["login"]) && $_GET["login"]==0){ ?>
    <p class="alert-danger">Usuário ou senha inválida!</a>
<?php } ?>
            <h1>Bem vindo!</h1>

<?php if(isset($_COOKIE["usuario_logado"])) {?>
    <p class="text-success">Você está logado como <?=$_COOKIE["usuario_logado"]?>.</p>
<?php }else{?>
            <h2>Login</h2>
<form action="login.php" method="post" >
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Login</button></td>
        </tr>
    </table>
</form>
    <?php }?>
<?php include("cabecalho.php");?>