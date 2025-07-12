<?php include'./parciais/header.php' ?>


<div class="caixa-rsenha">
    <h1 class="trsenha" style="text-align: center;">Redefinição de senha</h1>
    <p class="prsenha" style="margin-bottom: 50px;">Digite a nova senha no campo abaixo para a alteração</p>
    <div class="col-12" style="text-align: center;">
        <div class="row" style="position: relative;">
            <form>
                <input type="password" id="nova-senha" name="nova-senha" placeholder="Nova senha">
                 <button id="nova-senhatoggle" class="show-psswd" type="button" data-toggle-target="#nova-senha">
    <img src="./IMG/ICONSENHA/eye_open.svg" alt="">
  </button>
            </form>
        </div>

         <div class="row" style="position: relative;">
            <form>
                <input type="password" id="confirmar-nsenha" name="confirmar-nsenha" placeholder="Confirmar a senha">
                   <button id="confirmar-nsenhatoggle" class="show-psswd" type="button" data-toggle-target="#confirmar-nsenha">
    <img src="./IMG/ICONSENHA/eye_open.svg" alt="">
  </button>
            </form>
        </div>

    </div>
    <div class="bt-rsenha" style="margin-top: 20px;">
        <div>
            <form>
                <button
                    class="but-rcasenha"
                    type="submit"><b>Cancelar</b></button>
            </form>
        </div>
        <div>
            <form>
                <button onclick="document.location='login.php' "
                    class="but-rcsenha"
                    type="button"><b>Confirmar</b></button>
            </form>
        </div>
    </div>
</div>


<?php include'./parciais/footer.php' ?>