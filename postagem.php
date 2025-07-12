
<?php include'./parciais/header.php' ?>

<h1 style="text-align: center;">CADASTRO DE PET</h1>

  <main class="container postcont">
     <section class="left-panel">
      <form id="form-upload-fotos" action="sua_pagina_de_postagem_futura.php" method="POST" enctype="multipart/form-data">
        <div class="upload-box">
          <span>📷</span>
          <p>Envie uma imagem do pet</p>
          <div>
            <label for="arquivo"></label>
            <input type="file" name="foto" id="inputArquivo" multiple accept="image/*">
          </div>
          <div id="preview-imagens" class="preview-imagens-container"></div>
        </div>
      </form>
    </section> 

    <section class="right-panel">
      <form>
        <label for="tipo-cadastro">Tipo de cadastro</label>
        <select name="tipo-cadastro" id="tipo-cadastro" onchange="gerenciarCamposPerdido()">
          <option value="" disabled selected>Ex: Doação, Perdido</option>
          <option value="doacao">Doação</option>
          <option value="perdido">Perdido</option>
        </select>

        <label for="tipo-animal">Tipo de animal</label>
        <select name="tipo-animal" id="tipo-animal" onchange="verificarOutroTipo()">
          <option value="" disabled selected>Ex: Cachorro, Gato</option>
          <option value="cachorro">Cachorro</option>
          <option value="gato">Gato</option>
          <option value="outro">Outro</option>
        </select>

        <div id="campo-outro-animal" style="display: none; margin-top: 10px;">
          <label for="outro-animal">Informe o tipo de animal</label>
          <input type="text" id="outro-animal" placeholder="Digite o tipo de animal" />
        </div>

        <label for="tem-nome">O pet tem nome?</label>
        <select id="tem-nome" onchange="mostrarCampoNome()">
          <option value="">Selecione</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>

        <div id="campo-nome" style="display: none; margin-top: 10px;">
          <label for="nome-pet">Nome do pet</label>
          <input type="text" id="nome-pet" placeholder="Digite o nome do pet" />
        </div>

        <label>Raça</label>
        <input type="text" />

        <div class="campos-lado-a-lado">
          <div>
            <label for="genero">Gênero</label>
            <select name="genero" id="genero">
              <option value="" disabled selected>Selecione</option>
              <option value="macho">Macho</option>
              <option value="femea">Fêmea</option>
            </select>
          </div>
          <div>
            <label for="idade">Idade</label>
            <input type="text" id="idade" placeholder="Ex: 05 meses, 5 anos" />
          </div>
        </div>

        <label>Contato com tutor</label>
        <input type="text" />

        <div id="campo-ultima-localizacao" style="display: none;">
          <label for="ultima-localizacao">Última localização</label>
          <input type="text" id="ultima-localizacao" />
        </div>

        <label>Informações adicionais</label>
        <textarea rows="4"></textarea>

        <button type="submit" class="botao-publicar">Publicar</button>
      </form>
    </section>

     <button type="submit" class="botao-publicar-mobile">Publicar</button>
  </main>

<?php include'./parciais/footer.php' ?>