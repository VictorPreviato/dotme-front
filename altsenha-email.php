<?php include './parciais/header.php' ?>


<div class="caixa-senha">
    <h1 class="tsenha" style="text-align: center;">Redefinição de senha</h1>
    <p class="psenha" style="margin-bottom: 50px;">Confirme seu e-mail no campo abaixo para enviarmos um código de redefinição de senha</p>
    <div class="col-12" style="text-align: center;">
        <div class="row">
            <form>
                <input type="email" name="email" placeholder="E-mail">
            </form>
        </div>
    </div>
    <div class="bt-senha" style="margin-top: 20px;">
        <div>
            <form>
                <button class="but-casenha"
                    type="submit"><b>Cancelar</b></button>
            </form>
        </div>
        <div>
            <form>
                <button onclick="document.location='altsenha-reset.php'" 
                    class="but-csenha"
                    type="button"><b>Confirmar</b></button>
            </form>
        </div>
    </div>
</div>

<?php include './parciais/footer.php' ?>