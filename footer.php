 <!--TSD-4RT | PDM | 13.10-->
 <?php
 $godinaOsnutka=2019;
 date("Y");
 $X=date("Y")-$godinaOsnutka;
 $dan=(int) date("N");
 $sat=(int) date("G");
 $dan = 6;
  $sat = 9;
 if ($dan >= 1 && $dan <= 5 && $sat >= 8 && $sat < 16) {
    $poruka = "Otvoreno — radimo do 16:00";
    $klasa = "status-otvoreno";
} elseif ($dan === 6 && $sat >= 9 && $sat < 13) {
    $poruka = "Otvoreno — radimo do 13:00";
    $klasa = "status-otvoreno";
} else {
    $poruka = "Zatvoreno";
    $klasa = "status-zatvoreno";
}
 ?>
<footer>
    <link rel="stylesheet" href="css/stil.css"></head>
    <p>Na tržištu od 2019. — već <?php echo $X; ?> godina</p>
    <table>
        <thead>
            <tr>
                <th>Dan</th>
                <th>Radno vrijeme</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ponedjeljak – Petak</td>
                <td>08:00 – 16:00</td>
            </tr>
            <tr>
                <td>Subota</td>
                <td>09:00 – 13:00</td>
            </tr>
            <tr>
                <td>Nedjelja</td>
                <td>Zatvoreno</td>
            </tr>
        </tbody>
    </table>
    <p class="<?= $klasa ?>"><?= $poruka ?></p>
    <br>
    <div class="container footer-grid">
        <div>
            <a class="logo" href="index.php"><span>CG</span> CyberGuard</a>
            <p>Stručna rješenja za informacijsku sigurnost i zaštitu digitalnog poslovanja.</p>
        </div>
        <div>
            <h4>Kontakt</h4>
            <p>Ulica sigurnosti 10, Zagreb</p>
            <p>+385 1 555 1234</p>
            <p>info@cyberguard.hr</p>
            <p>Pon–Pet: 08:00–16:00</p>
           
        </div>
        <div>
            <h4>Informacije</h4>
            <a href="#">Politika privatnosti</a>
            <a href="#">Uvjeti korištenja</a>
            <a href="kontakt.php">Kontakt</a>
        </div>
        <div>
            <h4>Pratite nas</h4>
            <div class="social">
                <a href="#">in</a>
                <a href="#">𝕏</a>
                <a href="#">f</a>
            </div><p class="small">Pretplatite se na naš newsletter</p>
            <form class="newsletter"><input type="email" placeholder="Vaš e-mail" required><button>→</button></form>
        </div>
        
<form class="newsletter"
      action="https://formspree.io/f/xeaovqpl"
      method="POST">
    <label for="newsletter-email">Prijava na newsletter</label>
    <input
        id="newsletter-email"
        type="email"
        name="email"
        required
        placeholder="tvoja@adresa.hr">
    <button type="submit">Prijavi me</button>
</form>

    </div>¸
    <?php
    $godina=2026;
    echo  "<p>© $godina CyberGuard. Sva prava pridržana.</p> ";
    ?>
    

    </footer>