<?php

// app/Helpers.php

if (! function_exists('anonymizeEmail')) {

    function anonymizeEmail($email) {
        // Memecah alamat email menjadi dua bagian, yaitu sebelum "@" dan setelah "@"
        $parts = explode('@', $email);

        // Mengambil karakter pertama dari bagian depan email
        $firstChar = substr($parts[0], 0, 1);

        // Mengambil karakter terakhir dari bagian depan email
        $lastChar = substr($parts[0], -1);

        // Mengganti karakter di tengah-tengah dengan karakter bintang (*) sebanyak panjang karakter antara karakter pertama dan terakhir
        $anonymized = $firstChar . str_repeat('*', strlen($parts[0]) - 2) . $lastChar . '@' . $parts[1];

        return $anonymized;
    }
}



?>
