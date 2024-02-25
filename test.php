<?php
// Data teks
$text = "Download SawanoHiroyuki[nZk]:Jean-Ken Johnny - Chaos Drifters [Opening NO GUNS LIFE 2nd Season] Mp3";

// Pola pencarian menggunakan regular expression
$pattern = "/\[(.*?)\]/";

// Lakukan pencocokan pola menggunakan preg_match
if (preg_match($pattern, $text, $matches)) {
    // $matches[0] akan berisi seluruh kecocokan pola, $matches[1] akan berisi teks di dalam tanda kurung siku
    echo $matches[1]; // Output: kiou
} else {
    echo "Tidak ditemukan kecocokan.";
}
?>
