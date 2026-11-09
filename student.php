<?php
/* ============================================================
   student.php – můj studentský profil
   Simona Koucká, 2. ročník IT, SOŠ Rokycany
   Tento soubor vypisuje moje údaje a jejich datové typy.
   ============================================================ */

// Jednořádkový komentář: tady níže ukládám svoje údaje do proměnných.
// Proměnná v PHP vždy začíná znakem dolar ($).

// string = text
$jmeno = "Simona Koucká";

// int = celé číslo. Sem doplň svůj věk, např. 17.
$vek = 0;

// string = text
$trida = "2. ročník IT";

// float = desetinné číslo. Sem doplň svoji výšku v metrech, např. 1.68.
$vyska = 0.0;

// bool = pravda (true) nebo nepravda (false)
$student = true;

// string = text. Sem doplň svůj oblíbený programovací jazyk.
$jazyk = "k doplnění";
?>
<!DOCTYPE html>
<html lang="cs" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Můj studentský profil – Simona Koucká</title>

  <!-- CSS framework DaisyUI + Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-100 text-base-content">

  <!-- HLAVIČKA S NAVIGACÍ (stejná jako v index.php) -->
  <header>
    <div class="navbar bg-base-200 sticky top-0 z-50 shadow-sm">
      <div class="navbar-start">
        <!-- Hamburgerové menu pro mobil -->
        <!-- Hamburgerové menu pro mobil -->
<div class="dropdown">
  <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
    ☰
  </div>

  <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-200 rounded-box z-50 mt-3 w-52 p-2 shadow">
    <li><a href="index.php">Domů</a></li>
    <li><a href="index.php#o-mne">O mně</a></li>
    <li><a href="index.php#umim">Co umím</a></li>
    <li><a href="index.php#galerie">Galerie</a></li>
    <li><a href="index.php#kontakt">Kontakt</a></li>
    <li><a href="student.php">Můj profil</a></li>
  </ul>
</div>

      <!-- Menu pro počítač -->
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="index.php">Domů</a></li>
          <li><a href="index.php#o-mne">O mně</a></li>
          <li><a href="index.php#umim">Co umím</a></li>
          <li><a href="index.php#galerie">Galerie</a></li>
          <li><a href="index.php#kontakt">Kontakt</a></li>
          <li><a href="student.php" class="active">Můj profil</a></li>
        </ul>
      </div>
    </div>

    <!-- Menu, které se rozbalí na mobilu -->
    <ul id="mobile-menu" class="menu bg-base-200 p-4 lg:hidden hidden">
      <li><a href="index.php">Domů</a></li>
      <li><a href="index.php#o-mne">O mně</a></li>
      <li><a href="index.php#umim">Co umím</a></li>
      <li><a href="index.php#galerie">Galerie</a></li>
      <li><a href="index.php#kontakt">Kontakt</a></li>
      <li><a href="student.php" class="active">Můj profil</a></li>
    </ul>
  </header>

  <!-- OBSAH STRÁNKY -->
  <main class="px-6 py-16">
    <div class="max-w-2xl mx-auto">

      <h1 class="text-3xl md:text-4xl font-bold mb-2">Můj studentský profil</h1>
      <p class="text-base-content/70 mb-8">
        Tato stránka je vytvořená v PHP. Údaje jsou uložené v proměnných a vypisuji je pomocí
        <code>echo</code>.
      </p>

      <!-- VYPISUJI HODNOTY PROMĚNNÝCH -->
      <div class="card bg-base-200 shadow-md mb-10">
        <div class="card-body">

          <p class="py-1">
            <strong>Jméno a příjmení:</strong>
            <?php echo $jmeno; ?>
          </p>

          <p class="py-1">
            <strong>Věk:</strong>
            <?php
              // Jednoduchá podmínka: pokud je věk větší než 0, vypíše se číslo,
              // jinak se vypíše text "k doplnění".
              if ($vek > 0) {
                  echo $vek . " let";
              } else {
                  echo "k doplnění";
              }
            ?>
          </p>

          <p class="py-1">
            <strong>Třída:</strong>
            <?php echo $trida; ?>
          </p>

          <p class="py-1">
            <strong>Výška:</strong>
            <?php
              // Stejná podmínka jako u věku, jen pro desetinné číslo.
              if ($vyska > 0) {
                  echo $vyska . " m";
              } else {
                  echo "k doplnění";
              }
            ?>
          </p>

          <p class="py-1">
            <strong>Student:</strong>
            <?php
              // Ternární operátor: když je $student true, vypíše se "Ano", jinak "Ne".
              echo $student ? "Ano" : "Ne";
            ?>
          </p>

          <p class="py-1">
            <strong>Oblíbený programovací jazyk:</strong>
            <?php echo $jazyk; ?>
          </p>

        </div>
      </div>

      <!-- DRUHÁ ČÁST: DATOVÉ TYPY -->
      <h2 class="text-2xl font-bold mb-4">Datové typy</h2>
      <p class="text-base-content/70 mb-4">
        Funkce <code>var_dump()</code> vypíše datový typ proměnné a její hodnotu.
      </p>

      <div class="card bg-base-200 shadow-md">
        <div class="card-body">
          <div class="font-mono text-sm leading-8">
            <?php
              // Každý var_dump() vypíše jednu proměnnou.
              // Značka <br> udělá nový řádek.
              var_dump($jmeno);   echo "<br>";
              var_dump($vek);     echo "<br>";
              var_dump($trida);   echo "<br>";
              var_dump($vyska);   echo "<br>";
              var_dump($student); echo "<br>";
              var_dump($jazyk);   echo "<br>";
            ?>
          </div>
        </div>
      </div>

      <div class="mt-10">
        <a href="index.php" class="btn btn-primary">← Zpět na hlavní stránku</a>
      </div>

    </div>
  </main>

  <!-- PATIČKA -->
  <footer class="footer footer-center p-6 bg-base-300 text-base-content">
    <p>© 2026 Simona Koucká – SOŠ Rokycany, 2. ročník IT</p>
  </footer>

  
  
</body>
</html>
