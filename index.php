<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Netflix</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <!-- HEADER -->
  <?php
  include('include/header.html')
  ?>

  <!-- MAIN CONTAINER -->
  <main class="main-container">

    <!-- Exercice 1 -->
    <?php

    $popular = [
      [
        'title' => 'The Road Trick',
        'desc' => 'Série documentaire',
      ],
      [
        'title' => 'Wynonna Earp',
        'desc' => 'Série',
      ], 
      [
        'title' => 'Club de Cuervos',
        'desc' => 'Série',
      ], 
      [
        'title' => 'Grey\'s Anatomy',
        'desc' => 'Série',
      ], 
      [
        'title' => 'Step Up 2',
        'desc' => 'Film',
      ], 
      [
        'title' => 'Liquid Science: that\'s genius',
        'desc' => 'Série documentaire',
      ], 
      [
        'title' => '13 Reasons Why',
        'desc' => 'Série',
      ], 
      [
        'title' => 'Viêtnam',
        'desc' => 'Série documentaire',
      ], 
      [
        'title' => 'Le Pacte du sang',
        'desc' => 'Film',
      ], 
      [
        'title' => 'Marcella',
        'desc' => 'Série',
      ], 
      [
        'title' => 'Riverdale',
        'desc' => 'Série',
      ], 
    ];

    $series = [
      [
        'title' => 'Hawaii 5-0',
        'desc' => '240 épisodes',
      ], 
      [
        'title' => 'Luke Cage',
        'desc' => '26 épisodes',
      ], 
      [
        'title' => 'The Flash',
        'desc' => '171 épisodes',
      ], 
      [
        'title' => 'Black Lightning',
        'desc' => '58 épisodes',
      ], 
      [
        'title' => 'New Girl',
        'desc' => '146 épisodes',
      ], 
      [
        'title' => 'Legends of Tomorrow',
        'desc' => '110 épisodes',
      ], 
      [
        'title' => 'Marvel',
        'desc' => '136 épisodes',
      ], 
      [
        'title' => 'Marlon',
        'desc' => '20 épisodes',
      ], 
      [
        'title' => 'Cooking on High',
        'desc' => '12 épisodes',
      ], 
      [
        'title' => 'Queer Eye',
        'desc' => '59 épisodes',
      ], 
      [
        'title' => 'Shooter',
        'desc' => '31 épisodes',
      ], 
      [
        'title' => 'Jessica Jones',
        'desc' => '39 épisodes',
      ], 
    ];

    $movies = [
      [
        'title' => 'Wanted : Choisis ton destin',
        'desc' => '1h50m',
      ], 
      [
        'title' => 'La Vengeance dans la peau',
        'desc' => '1h55m',
      ], 
      [
        'title' => 'Les Gardiens de la Galaxie Vol. 2',
        'desc' => '2h17m',
      ], 
      [
        'title' => 'Benjamin Gates et le Trésor des Templiers',
        'desc' => '2h18m',
      ], 
      [
        'title' => 'Bad Boys',
        'desc' => '1h59m',
      ], 
      [
        'title' => 'Bright',
        'desc' => '1h58m',
      ], 
    ]; 
    ?>
    
    <section>
      <h2></h2>
      <div class="card-wrapper">
  
        <?php

        $category = 'popular';
        foreach ($$category as $key => $value) {
          $img = $category . '/' . ($key + 1) . '.png';
          echo '<article class="card">';
          echo '<img src="./img/' . $img . '" alt="' . '">';
          echo '<div class="infos">';
          echo '<h3>'.implode(', ', $value).'</h3>';
          echo '</div>';
          echo '</article>';
        }
        
        ?>

      </div>
    </section>
    

    <?php

    function createCards($category, $data) {
      foreach ($data as $key => $value) {
        $img = $category . '/' . ($key + 1) . '.png';
        $random = random_int(50,100);
        echo '<article class="card">';
        echo '<img src="./img/' . $img . '" alt="' . '">';
        echo '<div class="infos">';
        echo '<h3>'.implode(', ', $value).'</h3>';
        if ($category == 'popular') {
          echo '<p>"Recommandé à '.$random.'"</p>';
        }
        echo '</div>';
        echo '</article>';
      }
    }

    ?>

    <section>
      <h2 id="popular">Populaire sur Netflix</h2>
      <div class="card-wrapper">
        <?php
        createCards('popular', $popular);
        ?>
      </div>
    </section>

    <section>
      <h2 id="series">Séries</h2>
      <div class="card-wrapper">
        <?php
        createCards('series', $series);
        ?>
      </div>
    </section>

    <section>
      <h2 id="movies">Films</h2>
      <div class="card-wrapper">
        <?php
        createCards('movies', $movies);
        ?>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <?php
  include('include/footer.html');
  ?>

</body>

</html>
