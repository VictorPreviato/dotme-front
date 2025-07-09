<?php include'./parciais/header.php' ?>

<div class="txtcad">
<h1 style="text-align: center;">Crie sua conta</h1>

<h3 style="text-align: center;" >Enviaremos uma confirmação de cadastro para você pelo e-mail.</h3>
</div>

<form action="">
<div class="container m-auto" id="cardform">
    <div class="row d-flex">
        <div class="col-6">
            <input type="text" placeholder="Nome Completo*" name="nome" required>
        </div>
        <div class="col-6">
            <input type="date" name="data_nasc" required>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <input type="text" placeholder="CPF*" name="cpf" required>
        </div>
        <div class="col-6">
            <input type="text" placeholder="Telefone celular*" name="telefone" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="email" placeholder="E-mail*" name="email" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="email" placeholder="Confirme seu e-mail*" required>
        </div>
    </div>
    <div class="row">
       <div class="col-6 pass" style="position: relative;">
  <input type="password" name="password" id="password" placeholder="Crie sua senha*" required>
  <button class="show-psswd" type="button" data-toggle-target="#password">
    <img src="./IMG/ICONSENHA/eye_open.svg" alt="">
  </button>
</div>

<div class="col-6 pass" style="position: relative;">
  <input type="password" placeholder="Confirme sua senha*" name="password_confirmation" id="confirm-password" required>
  <button class="show-psswd" type="button" data-toggle-target="#confirm-password">
    <img src="./IMG/ICONSENHA/eye_open.svg" alt="">
  </button>
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

