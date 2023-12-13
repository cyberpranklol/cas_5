<?php
    // Postavke cene i početnog rezultata
    $cena = isset($_POST['cena']) ? $_POST['cena'] : 0;
    $rezultat = $cena;

    // Provera tipa proizvoda i dodavanje odgovarajućeg iznosa
    if (isset($_POST['tip_proizvoda'])) {
        $tip_proizvoda = $_POST['tip_proizvoda'];
        
        if ($tip_proizvoda === 'hrana') {
            $rezultat += 50;
        } elseif ($tip_proizvoda === 'racunarska_oprema') {
            $rezultat += 350;
        }
    }

    // Provera da li je označen checkbox za izračunavanje poreza
    if (isset($_POST['izracunaj_porez']) && $_POST['izracunaj_porez'] === 'da') {
        // Dodavanje 10% poreza
        $porez = $rezultat * 0.1;
        $rezultat += $porez;
    }

    // Ispis rezultata
    echo "Konačna cena: $rezultat";
?>