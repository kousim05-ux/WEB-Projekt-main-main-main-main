<?php
/* ============================================================
   index.php – hlavní stránka mého školního webu
   Simona Koucká, 2. ročník IT, SOŠ Rokycany
   ============================================================ */
?>
<!DOCTYPE html>
<html lang="cs" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simona Koucká – můj web</title>

  <!-- CSS framework DaisyUI + Tailwind CSS (načítají se z internetu) -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-100 text-base-content">

  <!-- ================= HLAVIČKA S NAVIGACÍ ================= -->
  <header>
    <div class="navbar bg-base-200 sticky top-0 z-50 shadow-sm">
      <div class="navbar-start">
        <!-- Hamburgerové menu pro mobil -->
        <button id="menu-btn" type="button" aria-label="Otevřít menu"
                class="btn btn-ghost lg:hidden">☰</button>
        <a href="index.php" class="btn btn-ghost text-xl">Simona Koucká</a>
      </div>

      <!-- Menu pro počítač -->
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="#o-mne">O mně</a></li>
          <li><a href="#umim">Co umím</a></li>
          <li><a href="#galerie">Galerie</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
          <li><a href="student.php">Můj profil</a></li>
        </ul>
      </div>
    </div>

    <!-- Menu, které se rozbalí na mobilu -->
    <!-- Hamburgerové menu pro mobil -->
<div class="dropdown">
  <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
    ☰
  </div>

  <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-200 rounded-box z-50 mt-3 w-52 p-2 shadow">
    <li><a href="#o-mne">O mně</a></li>
    <li><a href="#umim">Co umím</a></li>
    <li><a href="#galerie">Galerie</a></li>
    <li><a href="#kontakt">Kontakt</a></li>
    <li><a href="student.php">Můj profil</a></li>
  </ul>
</div>

  <!-- ================= OBSAH STRÁNKY ================= -->
  <main>

    <!-- ÚVODNÍ ČÁST -->
    <section class="hero min-h-[70vh]"
             style="background-image: url('https://picsum.photos/seed/simona-hero/1600/900');">
      <div class="hero-overlay bg-opacity-70"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-xl">
          <p class="text-sm tracking-widest uppercase mb-3">Osobní portfolio</p>
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Ahoj, jsem Simona Koucká</h1>
          <p class="py-4">
            Jsem studentka 2. ročníku oboru Informační technologie na SOŠ Rokycany.
            Tenhle web je moje školní práce a místo, kde si postupně skládám, co se učím.
          </p>
          <div class="flex flex-wrap gap-2 justify-center">
            <a href="#o-mne" class="btn btn-primary">Více o mně</a>
            <a href="student.php" class="btn btn-outline">Můj studentský profil</a>
          </div>
        </div>
      </div>
    </section>

    <!-- O MNĚ -->
    <section id="o-mne" class="py-20 px-6">
      <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-10">
        <div class="avatar">
          <div class="w-40 rounded-full ring ring-primary ring-offset-base-100 ring-offset-4">
            <!-- Sem doplním svoji vlastní fotografii -->
            <img src="https://picsum.photos/seed/simona-avatar/300/300" alt="Simona Koucká">
          </div>
        </div>
        <div>
          <h2 class="text-3xl font-bold mb-4">O mně</h2>
          <p class="mb-3">
            Jmenuji se Simona Koucká a studuji 2. ročník oboru Informační technologie
            na SOŠ Rokycany. Baví mě tvořit weby a učit se nové věci.
          </p>
          <p class="mb-4 text-base-content/70">
            Tento odstavec si doplním později – napíšu sem, co mě na informatice baví
            a čemu bych se chtěla věnovat dál.
          </p>
          <div class="flex gap-2 flex-wrap">
            <span class="badge badge-primary">HTML</span>
            <span class="badge badge-secondary">CSS</span>
            <span class="badge badge-secondary">Tailwind CSS</span>
            <span class="badge badge-secondary">DaisyUI</span>
            <span class="badge badge-accent">Základy PHP</span>
          </div>
        </div>
      </div>
    </section>

    <!-- CO UMÍM -->
    <section id="umim" class="py-20 px-6 bg-base-200">
      <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-2 text-center">Co umím</h2>
        <p class="text-center text-base-content/70 mb-8">
          Co jsme probrali ve druhém ročníku a co už umím použít.
        </p>

        <div class="collapse collapse-arrow bg-base-100 mb-2">
          <input type="radio" name="umim" checked>
          <div class="collapse-title text-lg font-medium">HTML – struktura stránky</div>
          <div class="collapse-content">
            <ul class="list-disc list-inside space-y-1">
              <li>správné značky: header, main, section, footer</li>
              <li>nadpisy, odstavce, seznamy a tabulky</li>
              <li>odkazy a obrázky s atributy</li>
              <li>jednoduchý formulář</li>
            </ul>
          </div>
        </div>

        <div class="collapse collapse-arrow bg-base-100 mb-2">
          <input type="radio" name="umim">
          <div class="collapse-title text-lg font-medium">CSS a Tailwind CSS</div>
          <div class="collapse-content">
            <ul class="list-disc list-inside space-y-1">
              <li>barvy, písmo a odsazení</li>
              <li>box model</li>
              <li>flexbox a grid</li>
              <li>responzivní design (mobil, tablet, počítač)</li>
            </ul>
          </div>
        </div>

        <div class="collapse collapse-arrow bg-base-100">
          <input type="radio" name="umim">
          <div class="collapse-title text-lg font-medium">Základy programování a PHP</div>
          <div class="collapse-content">
            <ul class="list-disc list-inside space-y-1">
              <li>proměnné a datové typy (string, int, float, bool)</li>
              <li>podmínky a cykly</li>
              <li>výpis pomocí echo a var_dump()</li>
              <li>komentáře v kódu</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- GALERIE -->
    <section id="galerie" class="py-20 px-6">
      <h2 class="text-3xl font-bold mb-2 text-center">Galerie</h2>
      <p class="text-center text-base-content/70 mb-8">
        Zatím ukázkové fotky, postupně je nahradím vlastními.
      </p>

      <div class="max-w-3xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <img src="https://picsum.photos/seed/galerie1/900/600"
               class="w-full h-64 object-cover rounded-box" alt="Ukázková fotka 1">
          <img src="https://picsum.photos/seed/galerie2/900/600"
               class="w-full h-64 object-cover rounded-box" alt="Ukázková fotka 2">
          <img src="https://picsum.photos/seed/galerie3/900/600"
               class="w-full h-64 object-cover rounded-box" alt="Ukázková fotka 3">
          <img src="https://picsum.photos/seed/galerie4/900/600"
               class="w-full h-64 object-cover rounded-box" alt="Ukázková fotka 4">
        </div>
      </div>
    </section>

    <!-- KONTAKT -->
    <section id="kontakt" class="py-20 px-6 bg-base-200">
      <div class="card bg-base-100 shadow-xl max-w-lg mx-auto">
        <div class="card-body">
          <h2 class="card-title text-2xl">Napiš mi</h2>

          <?php
          // Jednoduchá podmínka: když formulář odešlu, zobrazí se hláška.
          // Zpráva se zatím nikam neposílá, je to jen ukázka.
          if (isset($_POST['odeslat'])) {
              echo '<div class="alert alert-success mb-2">Díky za zprávu! Formulář je zatím ukázka.</div>';
          }
          ?>

          <form method="post" action="index.php#kontakt" class="space-y-4">
            <input type="text" name="jmeno" placeholder="Jméno" class="input input-bordered w-full" required>
            <input type="email" name="email" placeholder="E-mail" class="input input-bordered w-full" required>
            <textarea name="zprava" placeholder="Zpráva" rows="4" class="textarea textarea-bordered w-full" required></textarea>
            <div class="card-actions justify-end">
              <button type="submit" name="odeslat" class="btn btn-primary">Odeslat</button>
            </div>
          </form>

          <p class="text-sm text-base-content/70 mt-2">
            Nebo mi napiš přímo na
            <a href="mailto:kousim05@gasos.cz" class="link link-primary">kousim05@gasos.cz</a>.
          </p>
        </div>
      </div>
    </section>

  </main>

  <!-- ================= PATIČKA ================= -->
  <footer class="footer footer-center p-6 bg-base-300 text-base-content">
    <p>© 2026 Simona Koucká – SOŠ Rokycany, 2. ročník IT</p>
    <p class="text-sm opacity-70">Vytvořeno v HTML, Tailwind CSS, DaisyUI a PHP</p>
  </footer>




</body>
</html>
