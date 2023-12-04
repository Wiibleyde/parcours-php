<?php
function isPangram(string $string): bool {
    $sentences = strtolower(trim($string));
    $letters = str_split("thequickbrownfoxjumpsoverthelazydog");
    foreach ($letters as $letter) {
        if (!strstr($sentences, $letter))
            return false;
    }
    return true;
}

echo isPangram("The quick brown fox jumps over the lazy dog");
?>