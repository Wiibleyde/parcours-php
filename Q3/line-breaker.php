<?php
function breakLines($inputString, $maxLength): string {
    $maxLength += 1;
    $lines = explode("\n", $inputString);
    $result = '';
    foreach ($lines as $line) {
        $words = explode(' ', $line);
        $currentLine = '';
        foreach ($words as $word) {
            $potentialLine = $currentLine . $word . ' ';
            if (strlen($potentialLine) > $maxLength || (strlen($word) > 0 && ctype_upper($word[0]))) {
                $result .= trim($currentLine) . "\n";
                $currentLine = $word . ' ';
            } else {
                $currentLine = $potentialLine;
            }
        }
        $result .= trim($currentLine);
    }
    return substr($result, 1);
}
echo breakLines('Title is long
Line with words break', 12);
?>