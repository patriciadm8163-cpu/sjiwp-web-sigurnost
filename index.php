
<!DOCTYPE html>
<!-- TSD-4RT | PDM | 22.09.2026. -->
 <!--TSD-4RT | PDM | 13.10-->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberGuard | Informacijska sigurnost</title>
    <link rel="stylesheet" href="css/stil.css">
</head>
<body>
    <?php
    include "header.php";
    $recenzije = [
    [
        'klijent' => 'Marko K.',
        'ocjena'  => 5,
        'tekst'   => 'Brza reakcija podrške i pouzdano održavanje.'
    ],
    [
        'klijent' => 'Ana M.',
        'ocjena'  => 4,
        'tekst'   => 'Odličan omjer cijene i kvalitete.'
    ],
    [
        'klijent' => 'Luka P.',
        'ocjena'  => 3,
        'tekst'   => 'Zadovoljni smo uslugom, povremeno bismo voljeli brži odgovor na manje upite.'
    ]
];
    ?>

<main>

    <section class="hero">
        <div class="container hero-content">
            <div>
                <p class="eyebrow">SIGURNOST • POVJERENJE • TEHNOLOGIJA</p>
                <h1>Vaši podaci.<br><span>Naša zaštita.</span></h1>
                <p class="lead">CyberGuard pruža moderna sigurnosna rješenja koja štite tvrtke, zaposlenike i podatke od sve složenijih digitalnih prijetnji.</p>
                <div class="buttons">
                    <a class="btn" href="usluge.php">Naše usluge</a>
                    <a class="btn btn-outline" href="kontakt.php">Kontaktirajte nas</a>
                </div>
            </div>
            <div class="hero-card">
                <div class="shield">✓</div>
                <h3>Digitalna zaštita</h3>
                <p>Sigurnost vašeg poslovanja počinje kvalitetnom procjenom rizika.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-title">
                <p class="eyebrow">ZAŠTO CYBERGUARD?</p>
                <h2>Sigurnost na koju možete računati</h2>
                <p>Naš tim pomaže organizacijama prepoznati rizike i izgraditi sigurnije digitalno okruženje.</p>
            </div>
            <div class="cards three">
                <article class="card">
                    <div class="icon">01</div>
                    <h3>Stručnost</h3>
                    <p>Pratimo moderne tehnologije i metode zaštite informacijskih sustava.</p>
                </article>
                <article class="card">
                    <div class="icon">02</div>
                    <h3>Pouzdanost</h3>
                    <p>Gradimo dugoročne odnose s klijentima temeljene na povjerenju.</p>
                </article>
                <article class="card">
                    <div class="icon">03</div>
                    <h3>Prilagođena rješenja</h3>
                    <p>Svaki sigurnosni plan prilagođavamo potrebama i veličini organizacije.</p>
                </article>
            </div>
        </div>
        <br>
        <div>
    <?php foreach ($recenzije as $recenzija): ?>
        <div>
            <div aria-label="Ocjena <?= $recenzija['ocjena'] ?> od 5">
                <?php
                $ocjena = $recenzija['ocjena'];
                for ($i = 1; $i <= 5; $i++) {
                    echo ($i <= $ocjena) ? '★' : '☆';
                }
                ?>
            </div>
            <p><?= htmlspecialchars($recenzija['tekst']) ?></p>
            <div>— <?= htmlspecialchars($recenzija['klijent']) ?></div>
        </div>
    <?php endforeach; ?>
</div>
    </section>

    <section class="section dark">
        <div class="container split">
            <div>
                <p class="eyebrow">NAŠ PRISTUP</p>
                <h2>Zaštitite ono što je najvažnije.</h2>
                <p>Od procjene rizika do edukacije zaposlenika, pokrivamo ključne dijelove informacijske sigurnosti.</p>
                <a class="text-link" href="o-nama.php">Saznajte više o nama →</a>
            </div>
            <div class="stats">
                <div><strong>24/7</strong><span>Nadzor i podrška</span></div>
                <div><strong>100%</strong><span>Predanost sigurnosti</span></div>
                <div><strong>5+</strong><span>Vrsta usluga</span></div>
                <div><strong>1</strong><span>Cilj – vaša sigurnost</span></div>
            </div>
        </div>
    </section>
</main>
    <?php
    include "footer.php";
    ?>

</body>
</html>