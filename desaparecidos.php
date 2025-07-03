<?php include './parciais/header.php' ?>


<header class="filtros">
  <h1>Pets Perdidos</h1>
  <p>Ajude a resgatar a felicidade de um dono!</p>

  <div class="fill">
    <h4 class="fil">Filtre por localização:</h4>
    <form class="filter-form" method="GET" action="">
  <input type="text" id="cep" name="cep" placeholder="Digite o CEP" maxlength="9"
         value="<?= $_GET['cep'] ?? '' ?>" onblur="buscarCEP()">

  <input type="text" id="cidade" name="cidade" placeholder="Cidade"
         value="<?= $_GET['cidade'] ?? '' ?>" readonly>

  <input type="text" id="estado" name="estado" placeholder="Estado"
         value="<?= $_GET['estado'] ?? '' ?>" readonly>

  <button type="submit">Filtrar</button>
</form>
  </div>
</header>

<main class="filtro">
  <h2>Desaparecidos:</h2>
  <div class="fundos">
    <?php
    // Filtros
    $filtroEstado = $_GET['estado'] ?? '';
    $filtroCidade = $_GET['cidade'] ?? '';
    $filtroCep = $_GET['cep'] ?? '';

    // Dados simulados
    $petsPerdidos = [
      ["nome" => "Bob", "img" => "./IMG/PET/bob.jpg", "contato" => "(11) 91234-5678", "cep" => "04750-000", "cidade" => "São Paulo", "estado" => "SP"],
      ["nome" => "Leaf", "img" => "./IMG/PET/leaf.jpg", "contato" => "(11) 92345-6789", "cep" => "06694-000", "cidade" => "Itapevi", "estado" => "SP"],
      ["nome" => "Lobinho", "img" => "./IMG/PET/lobinho.jpg", "contato" => "(21) 93456-7890", "cep" => "30130-010", "cidade" => "Belo Horizonte", "estado" => "MG"],
      ["nome" => "Maggie", "img" => "./IMG/PET/maggie.jpg", "contato" => "(11) 94567-8901", "cep" => "06029-900", "cidade" => "Osasco", "estado" => "SP"],
      ["nome" => "Math", "img" => "./IMG/PET/math.jpg", "contato" => "(11) 95678-9012", "cep" => "06694-000", "cidade" => "Itapevi", "estado" => "SP"],
      ["nome" => "Raio", "img" => "./IMG/PET/raio.jpg", "contato" => "(11) 96789-0123", "cep" => "06029-900", "cidade" => "Osasco", "estado" => "SP"],
      ["nome" => "Robin", "img" => "./IMG/PET/robin.jpg", "contato" => "(11) 96789-0123", "cep" => "06029-900", "cidade" => "Osasco", "estado" => "SP"],
      ["nome" => "Ted", "img" => "./IMG/PET/ted.jpg", "contato" => "(11) 96789-0123", "cep" => "06029-900", "cidade" => "Osasco", "estado" => "SP"],
      ["nome" => "Thor", "img" => "./IMG/PET/thor.jpg", "contato" => "(11) 96789-0123", "cep" => "06694-000", "cidade" => "Itapevi", "estado" => "SP"],
      ["nome" => "Tom", "img" => "./IMG/PET/tom.jpg", "contato" => "(11) 96789-0123", "cep" => "06694-000", "cidade" => "Itapevi", "estado" => "SP"],
    ];

    // Aplicar filtro
    $filtrados = array_filter($petsPerdidos, function($pet) use ($filtroEstado, $filtroCidade, $filtroCep) {
      return
        ($filtroEstado === '' || $pet['estado'] === $filtroEstado) &&
        ($filtroCidade === '' || $pet['cidade'] === $filtroCidade) &&
        ($filtroCep === '' || $pet['cep'] === $filtroCep);
    });

    // Mostrar pets
    if (empty($filtrados)) {
      echo "<p>Nenhum pet desaparecido encontrado com esses filtros.</p>";
    } else {
      $totalMostrados = 0;
      foreach ($filtrados as $pet) {
        $hidden = $totalMostrados < 6 ? '' : 'hidden';
        echo '<div class="foto ' . $hidden . '">';
        echo '<img src="'.$pet['img'].'" alt="'.$pet['nome'].'" />';
        echo '<h3 class="tl">'.$pet['nome'].'</h3>';
        echo '<p class="tl">'.$pet['cidade'].' - '.$pet['estado'].'</p>';
        echo '<p class="tl">Contato: '.$pet['contato'].'</p>';
        echo '</div>';
        $totalMostrados++;
      }
    }
    ?>
  </div>

  <button class="load-more" onclick="mostrarMais()">Ver mais...</button>
</main>

<?php include './parciais/footer.php' ?>