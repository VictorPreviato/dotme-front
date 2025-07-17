<?php include './parciais/header.php' ?>

<body>

  <div class="container">
    <div class="perfil">
      <img src="IMG/mulher.webp" alt="Foto do Usuário" class="foto-usuario">
      <div class="info-usuario">
        <h1 style="color: #fff;">Jessica Sobrenome</h1>
        <a href="#" class="alterar-foto">Alterar foto de perfil</a>
      </div>
    </div>

    <form class="formulario">
      <h2><b>Dados do Usuário</b></h2>

      <div class="linha">
        <div class="campo">
          <label>Nome:</label>
          <input type="text" placeholder="Digite seu nome Completo">
        </div>
        <div class="campo">
          <label>Data de Nascimento:</label>
          <input type="date">
        </div>
      </div>

      <h2><b>Endereço</b></h2>

      <div class="linha">
        <div class="campo grande">
          <label>Logradouro:</label>
          <input type="text" placeholder="Digite seu endereço">
        </div>
        <div class="campo pequeno">
          <label>Nº</label>
          <input type="number">
        </div>
        <div class="campo">
          <label>Bairro:</label>
          <input type="text" placeholder="Digite seu bairro">
        </div>
      </div>

      
      <div class="linha">
        <div class="campo">
          <label>Complemento*:</label>
          <input type="text" placeholder="Complemento">
        </div>
        <div class="campo">
          <label>Cidade:</label>
          <input type="text" placeholder="Digite sua cidade">
        </div>
      </div>

      <h2><b>Contatos</b></h2>

      <div class="linha">
        <div class="campo">
          <label>Celular:</label>
          <input type="tel" placeholder="Telefone celular">
        </div>
        <div class="campo">
          <label>Celular*:</label>
          <input type="tel" placeholder="Telefone celular">
        </div>
      </div>

      <div class="linha">
        <div class="campo">
          <label>E-mail:</label>
          <input type="email" placeholder="E-mail">
        </div>
        <div class="campo">
          <label>Confirme seu E-mail:</label>
          <input type="email" placeholder="Confirme seu E-mail">
        </div>
      </div>
        </form>
          <div class="botoes">
        <button type="button" class="cancelar">Cancelar</button>
        <button type="submit" class="salvar">Salvar</button>
      </div>
  </div>

</body>

<?php include './parciais/footer.php' ?>