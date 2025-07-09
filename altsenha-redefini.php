<?php include './parciais/header.php' ?>


<div class="caixa-rsenha">
    <h1 class="trsenha" style="text-align: center;">Redefinição de senha</h1>
    <p class="prsenha" style="margin-bottom: 50px;">Digite a nova senha no campo abaixo para a alteração</p>
    <div class="col-12" style="text-align: center;">
        <div class="row">
            <form>
                <input type="password" name="nova-senha" placeholder="Nova senha">
            </form>
        </div>

         <div class="row">
            <form>
                <input type="password" name="confirmar-nsenha" placeholder="Confirmar a senha">
                
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
                <button
                    class="but-rcsenha"
                    type="submit"><b>Confirmar</b></button>
            </form>
        </div>
    </div>
</div>

<?php include'./parciais/footer.php' ?>