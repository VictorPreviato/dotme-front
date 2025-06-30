<?php include './parciais/header.php' ?>
<header class="filtros">
  <h1>Adote seu animal</h1>
  <p>Ajude a encontrar um novo lar!</p>

  <div class="fill">
  <h4 class="fil">Encontre o pet que deseja mais rápido!</h4>
  <form class="filter-form" method="GET" action="">
    <select name="especie">
      <option value="">Espécie</option>
      <option value="cachorro" <?= ($_GET['especie'] ?? '') === 'cachorro' ? 'selected' : '' ?>>Cachorro</option>
      <option value="gato" <?= ($_GET['especie'] ?? '') === 'gato' ? 'selected' : '' ?>>Gato</option>
    </select>
    <select name="sexo">
      <option value="">Sexo</option>
      <option value="macho" <?= ($_GET['sexo'] ?? '') === 'macho' ? 'selected' : '' ?>>Macho</option>
      <option value="femea" <?= ($_GET['sexo'] ?? '') === 'femea' ? 'selected' : '' ?>>Fêmea</option>
    </select>
    <select name="idade">
      <option value="">Idade</option>
      <option value="filhote" <?= ($_GET['idade'] ?? '') === 'filhote' ? 'selected' : '' ?>>Filhote</option>
      <option value="adulto" <?= ($_GET['idade'] ?? '') === 'adulto' ? 'selected' : '' ?>>Adulto</option>
      <option value="idoso" <?= ($_GET['idade'] ?? '') === 'idoso' ? 'selected' : '' ?>>Idoso</option>
    </select>
    <select name="porte">
      <option value="">Porte do animal</option>
      <option value="pequeno" <?= ($_GET['porte'] ?? '') === 'pequeno' ? 'selected' : '' ?>>Pequeno</option>
      <option value="medio" <?= ($_GET['porte'] ?? '') === 'medio' ? 'selected' : '' ?>>Médio</option>
      <option value="grande" <?= ($_GET['porte'] ?? '') === 'grande' ? 'selected' : '' ?>>Grande</option>
    </select>
    <button type="submit">Filtrar</button>
  </form>
  </div>
</header>

<main class="filtro">
  <h2>Animais Disponíveis</h2>
  <div class="fundos">
    <?php
    // Filtros recebidos
    $filtroEspecie = $_GET['especie'] ?? '';
    $filtroSexo = $_GET['sexo'] ?? '';
    $filtroIdade = $_GET['idade'] ?? '';
    $filtroPorte = $_GET['porte'] ?? '';

    // Lista de animais com atributos completos
    $animais = [
      ["nome" => "Lobinho", "idade" => "10 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/lobinho.jpg"],
      ["nome" => "Math", "idade" => "2 ano", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/math.jpg"],
      ["nome" => "Bob", "idade" => "1 ano", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/bob.jpg"],
      ["nome" => "Leaf", "idade" => "1 ano", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/leaf.jpg"],
      ["nome" => "Maggie", "idade" => "2 anos", "idade_categoria" => "adulto", "sexo" => "femea", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/maggie.jpg"],
      ["nome" => "Raio", "idade" => "8 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/raio.jpg"],
      ["nome" => "Robin", "idade" => "2 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/robin.jpg"],
      ["nome" => "ted", "idade" => "7 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "cachorro", "porte" => "pequeno", "img" => "./IMG/PET/ted.jpg"],
      ["nome" => "Thor", "idade" => "4 anos", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/thor.jpg"],
      ["nome" => "tom", "idade" => "3 anos", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "gato", "porte" => "medio", "img" => "./IMG/PET/tom.jpg"],
      ["nome" => "Lobinho", "idade" => "10 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/lobinho.jpg"],
      ["nome" => "Math", "idade" => "2 ano", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/math.jpg"],
      ["nome" => "Bob", "idade" => "1 ano", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/bob.jpg"],
      ["nome" => "Leaf", "idade" => "1 ano", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/leaf.jpg"],
      ["nome" => "Maggie", "idade" => "2 anos", "idade_categoria" => "adulto", "sexo" => "femea", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/maggie.jpg"],
      ["nome" => "Raio", "idade" => "8 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/raio.jpg"],
      ["nome" => "Robin", "idade" => "2 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "gato", "porte" => "pequeno", "img" => "./IMG/PET/robin.jpg"],
      ["nome" => "ted", "idade" => "7 meses", "idade_categoria" => "filhote", "sexo" => "macho", "especie" => "cachorro", "porte" => "pequeno", "img" => "./IMG/PET/ted.jpg"],
      ["nome" => "Thor", "idade" => "4 anos", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "cachorro", "porte" => "medio", "img" => "./IMG/PET/thor.jpg"],
      ["nome" => "tom", "idade" => "3 anos", "idade_categoria" => "adulto", "sexo" => "macho", "especie" => "gato", "porte" => "medio", "img" => "./IMG/PET/tom.jpg"],
      ];

    // Filtro aplicado
    $animaisFiltrados = array_filter($animais, function($animal) use ($filtroEspecie, $filtroSexo, $filtroIdade, $filtroPorte) {
      return
        ($filtroEspecie === '' || $animal['especie'] === $filtroEspecie) &&
        ($filtroSexo === '' || $animal['sexo'] === $filtroSexo) &&
        ($filtroIdade === '' || $animal['idade_categoria'] === $filtroIdade) &&
        ($filtroPorte === '' || $animal['porte'] === $filtroPorte);
    });

    // Exibe os animais
    if (empty($animaisFiltrados)) {
      echo "<p>Nenhum animal encontrado com esses filtros.</p>";
    } else {
      foreach ($animaisFiltrados as $index => $animal) {
        $hidden = $index >= 6 ? 'hidden' : ''; // Mostra só os 6 primeiros
        echo '<div class="foto ' . $hidden . '">';
        echo '<img src="'.$animal['img'].'" alt="'.$animal['nome'].'" />';
        echo '<h3 class="tl">'.$animal['nome'].'</h3>';
        echo '<p class="tl">'.$animal['idade'].' - '.$animal['sexo'].'</p>';
        echo '</div>';
      }
    }
    ?>
</div>
  <button class="load-more" onclick="mostrarMais()">Ver mais...</button>
</main>

    <!-- Banner -->
<div id="bannerhdiv1">
    <div class="textbanner">
        <h1>Adotar é um ato de amor <br> <br> Transforme uma vida e ganhe um amigo para sempre.
        </h1>
    </div>
</div>
<?php include './parciais/footer.php' ?>
