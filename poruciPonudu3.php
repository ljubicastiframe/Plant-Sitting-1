<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibile" content="IE=edge">
    <title>Plant Sitting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <a href="index.php"><h1>Plant Sitting</h1></a>
    <nav>
        <ul class="nav_links">
            <li><a href="index.php">Naslovna</a></li>
            <li><a href="poruciUsluge.php">Poruci Usluge</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </nav>
</header>

<div class="forma_porucivanja">
    <h2>Porucite uslugu 3</h2>
    <form name="order" method="post" action="/potvrda3.php">
        <label for="ime"> Ime: </label>
        <input type="text" id="ime" name="ime">

        <label for="prezime"> Prezime: </label>
        <input type="text" id="prezime" name="prezime">

        <label for="mobilni"> Mobilni tel.: </label>
        <input type="text" id="mobilni" name="mobilni">

        <label for="address"> Adresa: </label>
        <input type="text" id="address" name="address" minlength="3">

        <span> Cena: 500din/dan </span> <br>
        <div>
            <button class="button" onclick="location.href='/potvrda3.php';" type="submit"> Poruci </button>
        </div>
    </form>

</div>




<footer>
    <div class="footer_content">
        <h3>Plant Sitting</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="footer_bottom">
        <p>copyright &copy;2022 PlantSitting. designed by <span>Stevan Zakula</span></p>
    </div>
</footer>
