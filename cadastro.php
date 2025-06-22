<?php include'./parciais/header.php' ?>

<div class="txtcad">
<h1 style="text-align: center;">Crie sua conta</h1>

<h3 style="text-align: center;" >Enviaremos uma confirmação de cadastro para você pelo e-mail.</h3>
</div>

<form action="">
<div class="container m-auto" id="cardform">
    <div class="row d-flex">
        <div class="col-6">
            <input type="text" placeholder="Nome Completo*" required>
        </div>
        <div class="col-6">
            <input type="date" required>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <input type="number" placeholder="CPF*" required>
        </div>
        <div class="col-6">
            <input type="tel" placeholder="Telefone celular*" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="email" placeholder="E-mail*" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="email" placeholder="Confirme seu e-mail*" required>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <input type="password" placeholder="Crie sua senha*" required>
        </div>
        <div class="col-6">
            <input type="password"   placeholder="Confirme sua senha*" required>
        </div>
        <div>
        <input type="checkbox"> Estou de acordo com os <b><a href="" style="color: var(--cor-3);">termos de privacidade</a></b>
        </div>
        <div>
            <input type="submit" class="" name="but-cad" value="Criar Conta">
        </div>
    </div>
</div>
</form>

<p style="text-align: center;">Ja possui cadastro? <b><a href="./login.php" style="color: var(--cor-3);">Acesse aqui!</a></b></p>

<?php include'./parciais/footer.php' ?>

