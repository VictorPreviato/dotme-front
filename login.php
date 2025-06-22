<?php include './parciais/header.php' ?>

<div class="caixa m-auto">
 
<img class="img-login"  src="IMG/LOGOS/Logosn.svg" alt="dotme">
 
<h1 class="text-log" style="text-align: center; margin-bottom: 3vw;">Acesse sua conta</h1>
 
 
<div class="row">
    <div class="col-12">
        <form>
            <input type="email" name="email-login" placeholder="E-mail" required>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form>
            <input type="password" name="senha-login" placeholder="Senha" required>
        </form>
    </div>
</div>
<div class="row">
    <form>
        <a style="color: var(--cor-1);" href="./altsenha-email.php"><h7 class="text-log7">Esqueci minha senha</h7></a>
 
        <h7  style="color: var(--cor-1);" class="checkbox-login">Manter-me conectado  <input style="padding: 10px;" type="checkbox"></h7>
    </form>
</div>
<div class="row">
    <form >
        <button class="but-log" name="but-log"
                type="submit" ><b>Login</b></button>
    </form>
</div>
<div class="row">
    <form style="text-align: center; margin-top: 2vw">  
        <h7 class="text-log7" >Não possui uma conta?<a style="color: var(--cor-1);" href="./cadastro.php"><b> cadastre-se aqui!</b></a></h7>
    </form>
</div>
</div>

<?php include './parciais/footer.php' ?>