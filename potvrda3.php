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
<div class="forma_potvrde">
<?php
date_default_timezone_set('Europe/Belgrade');


if (!isset($_POST['ime'])) {
echo "<p class='try-again'>Niste popunili sva polja! "; ?><a href="/poruciPonudu3.php">Pokušajte ponovo</a></p><?php
}
else {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $mobilni = $_POST['mobilni'];
    $address = $_POST['address'];


    class Osoba {
        public $ime, $prezime, $mobilni, $address, $cena;
        public function __construct($ime, $prezime, $mobilni, $address, $cena)
        {
            $this->ime = $ime;
            $this->prezime = $prezime;
            $this->mobilni = $mobilni;
            $this->address = $address;
            $this->cena = $cena;
        }

        public function prikaz() {
            echo "<p>Podaci o osobi: " . $this->ime . " " . $this->prezime . ", " . $this->mobilni . ", " . $this->address . "</p><br>";
        }
    }

    class Porudzbina extends Osoba {
        public function __construct($ime, $prezime, $mobilni, $address, $cena) {
            parent::__construct($ime, $prezime, $mobilni, $address, $cena);
        }
    }

    $cena = "500 din";

    $np = new Porudzbina($ime, $prezime, $mobilni, $address, $cena);


    $polja = array("Ime", "Prezime", "Mobilni", "Adresa", "Cena", "Vreme transakcije");
    $uneto = array($np->ime, $np->prezime, $np->mobilni, $np->address, $np->cena);

    if ($ime=='' || $prezime=='' || $mobilni=='' || $address=='') {
        echo "<p class='try-again'>Niste popunili sva polja!";

        ?>
        <a href="/poruciPonudu3.php">Pokušajte ponovo</a></p>
        <?php
    }

    else { ?>
    <div class="uspesna_potvrda">
        <div class="uspesno">
            <h1>Uspesno ste porucili uslugu!</h1><br><br>
        </div>
        <div class="ispis"><?php
            $np->prikaz();
            ?>
            <table>
                <tr>
                    <?php foreach ($polja as $polje) {?>
                        <th id="gornje"><?php echo $polje; ?></th>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($uneto as $unet) {?>

                        <td id="donje"><?php echo $unet;?></td>

                    <?php }?>
                    <td><?php echo date('H:i, l, jS F Y') ?></td>
                </tr>
            </table>
        </div>
    </div>
        <?php
    }
} ?>
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

