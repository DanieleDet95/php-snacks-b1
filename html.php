<!-- Apertura php -->
<?php

// SNACK 1
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle
// partite di basket di un’ipotetica tappa del calendario. Ogni array della
// partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra
// di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
//  Olimpia Milano - Cantù | 55-60
  $matches = [
    [
      'casa' => 'Milano',
      'ospiti' => 'Bologna',
      'punti_1' => '100',
      'punti_2' => '30',
    ],
    [
      'casa' => 'Gravina',
      'ospiti' => 'Altamura',
      'punti_1' => '100',
      'punti_2' => '10',
    ]
  ];

// Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi
// che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

  $nome = $_GET['nome'];
  $mail = $_GET['mail'];
  $eta = $_GET['eta'];
  $accesso = '';

  if ( strlen($nome) <= 3 ) {
    $accesso = 'Accesso negato';
  } elseif (strpos($mail,'@') === false || strpos($mail,'.') === false) {
    $accesso = 'Accesso negato';
  } elseif (is_numeric($eta) === false ) {
    $accesso = 'Accesso negato';
  } else{
    $accesso = 'Accesso riuscito';
  }

?>
<!-- Chiusura php -->

<!-- Snack 1 -->
<h1>SNACK 1</h1>
<ul>

  <!-- Cicla per tutte le partite disponibili -->
  <?php for ($i=0; $i < count($matches) ; $i++) { ?>

    <!-- partita  -->
    <?php $this_partita = $matches[$i]; ?>

    <li>
      <?php echo $this_partita['casa']?> - <?php echo $this_partita['ospiti']?>
    | <?php echo $this_partita['punti_1'] ?> - <?php echo $this_partita['punti_2']?>
    </li>

  <?php } ?>

</ul>

<!-- Snack 2 -->
<h1>SNACK 2</h1>
<h2><?php echo $accesso ?></h2>
