// TSD-4RT | PDM | 13.10
<!DOCTYPE html>
<!-- TSD-4RT | PDM | 22.09.2026. -->
<html lang="hr">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Kontakt | CyberGuard</title><link rel="stylesheet" href="css/stil.css"></head>
<body>
<?php
    include "header.php";
    ?>
<main>
<section class="page-head"><div class="container"><p class="eyebrow">KONTAKT</p><h1>Razgovarajmo o vašoj sigurnosti.</h1><p>Pošaljite nam upit, a naš tim će vam odgovoriti u najkraćem mogućem roku.</p></div></section>
<section class="section"><div class="container contact-grid">
<div><p class="eyebrow">JAVITE NAM SE</p><h2>Pošaljite upit</h2><form id="contactForm" novalidate>
<label for="ime">Ime i prezime</label><input type="text" id="ime" name="ime" required><small class="error" id="imeError"></small>
<label for="email">E-mail</label><input type="email" id="email" name="email" required><small class="error" id="emailError"></small>
<label for="poruka">Poruka</label><textarea id="poruka" name="poruka" rows="7" required></textarea><small class="error" id="porukaError"></small>
<button class="btn" type="submit">Pošalji poruku</button><p id="formSuccess" class="success"></p>
</form></div>
<div class="contact-info"><div class="info-box"><h3>CyberGuard</h3><p>Ulica sigurnosti 10<br>10000 Zagreb, Hrvatska</p><p><strong>Telefon:</strong><br>+385 1 555 1234</p><p><strong>E-mail:</strong><br>info@cyberguard.hr</p><p><strong>Radno vrijeme:</strong><br>Pon–Pet: 08:00–16:00</p></div><div class="map"><iframe src="https://www.google.com/maps?q=Zagreb,Croatia&output=embed" loading="lazy"></iframe></div></div>
</div></section>
</main>
<?php
    include "footer.php";
    ?>
<script src="js/skripta.js"></script>
</body></html>