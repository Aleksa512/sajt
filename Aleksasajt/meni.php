<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gastro Novi</title>
        
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="header col-8 centar">
            <div><img src="slike/logo2.png" alt="logo" class="col-2"></div>
            <div class="toggle"></div>
                <div class="navigation">
                <div class="overlay"></div>
                <nav id="main-menu">
                    <ul>
                        <li><a href="index.html">Naslovna</a></li>
                        <li><a href="o_nama.html">O nama</a></li>
                        <li><a href="kontakt.html">Kontakt</a></li>
                    </ul>
                  </nav>
                  
                  <input type="checkbox" id="hamburger-input" class="burger-shower" />
                  <label id="hamburger-menu" for="hamburger-input">
                    <nav id="sidebar-menu">
                      <h3>Navigacija</h3>
                      <ul>
                <ul>
                    <li><a href="index.html">Naslovna</a></li>
                    <li><a href="o_nama.html">O nama</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                </ul>
            </div>
      </div>
    </nav>
        <div class="col-8 telo">
            <div class="naslov">
                <p>Piće</p>
            </div>
            <table class="col-9">
                <tr>
                    <th class="col-7 bold">Izgled</th>
                    <th class="col-7 bold">Naziv</th>
                    <th class="bold">Količina</th>
                    <th class="bold">Cena</th>
                </tr>
                <?php
                $meni1=json_decode(file_get_contents("tabela1.json"));
                foreach($meni1 as $meni1){
                    $meni1=(array)$meni1;
                    echo '<tr>';
                    echo '<th>';
                    echo '<img class=col-7 src="slike/'.$meni1['slika'].'" alt="'.$meni1['ime'].'"class="image">';
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni1['ime'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni1['kolicina'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni1['cena'];
                    echo '</th>';
                    echo '</th>';
                    echo '</th>';
                    echo '</tr>';
                }
               ?>
            </table>
            <div class="naslov">
                <p>Krompirići</p>
            </div>
            <table class="col-9">
                <tr>
                    <th class="col-7 bold">Izgled</th>
                    <th class="col-7 bold">Naziv</th>
                    <th class="bold">Količina</th>
                    <th class="bold">Cena</th>
                </tr>
                <?php
                $meni2=json_decode(file_get_contents("tabela2.json"));
                foreach($meni2 as $meni2){
                    $meni2=(array)$meni2;
                    echo '<tr>';
                    echo '<th>';
                    echo '<img class=col-7 src="slike/'.$meni2['slika'].'" alt="'.$meni2['ime'].'"class="image">';
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni2['ime'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni2['kolicina'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni2['cena'];
                    echo '</th>';
                    echo '</th>';
                    echo '</th>';
                    echo '</tr>';
                }
               ?>
            </table>
            <div class="naslov">
                <p>Za gurmane</p>
            </div>
            <table class="col-9">
                <tr>
                    <th class="col-7 bold">Izgled</th>
                    <th class="col-7 bold">Naziv</th>
                    <th class="bold">Sadržaj</th>
                    <th class="bold">Cena</th>
                </tr>
                <?php
                $meni3=json_decode(file_get_contents("tabela3.json"));
                foreach($meni3 as $meni3){
                    $meni3=(array)$meni3;
                    echo '<tr>';
                    echo '<th>';
                    echo '<img class=col-11 src="slike/'.$meni3['slika'].'" alt="'.$meni3['ime'].'"class="image">';
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni3['ime'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni3['sadrzaj'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni3['cena'];
                    echo '</th>';
                    echo '</th>';
                    echo '</th>';
                    echo '</tr>';
                }
               ?>

            </table>
            <div class="naslov">
                <p>Da se zasladiš</p>
            </div>
            <table class="col-9">
                <tr>
                    <th class="col-7 bold">Izgled</th>
                    <th class="col-7 bold">Naziv</th>
					<th class="bold">Sadržaj</th>
                    <th class="bold">Cena</th>
                    <?php
                $meni4=json_decode(file_get_contents("tabela4.json"));
                foreach($meni4 as $meni4){
                    $meni4=(array)$meni4;
                    echo '<tr>';
                    echo '<th>';
                    echo '<img class=col-7 src="slike/'.$meni4['slika'].'" alt="'.$meni4['ime'].'"class="image">';
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni4['ime'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni4['sadrzaj'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni4['cena'];
                    echo '</th>';
                    echo '</th>';
                    echo '</th>';
                    echo '</tr>';
                }
               ?>
            </table>
            <div class="naslov">
                <p>Dodaci</p>
            </div>
            <table class="col-9">
                <tr>
                    <th class="col-7 bold">Izgled</th>
                    <th class="col-7 bold">Naziv</th>
					<th class="bold">Količina</th>
                    <th class="bold">Cena</th>
                </tr>
                <?php
                $meni5=json_decode(file_get_contents("tabela5.json"));
                foreach($meni5 as $meni5){
                    $meni5=(array)$meni5;
                    echo '<tr>';
                    echo '<th>';
                    echo '<img class=col-7 src="slike/'.$meni5['slika'].'" alt="'.$meni5['ime'].'"class="image">';
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni5['ime'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni5['kolicina'];
                    echo '<th>';
                    echo '<div class="col-7 text">'.$meni5['cena'];
                    echo '</th>';
                    echo '</th>';
                    echo '</th>';
                    echo '</tr>';
                }
               ?>
            </table>
        </div>
        <footer class="col-12">
            <p>Copyright</p>
        </footer>
    </body>
</html>