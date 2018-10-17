<?php

if (isset($_GET['input'])) {
    $text = strtolower($_GET['input']);

    preg_match_all('/[A-Za-z]+/', $text, $matches);

    $countWord = [];

    for ($i = 0; $i < count($matches[0]); $i++) {
        if (!isset($countWord[$matches[0][$i]])) {
            $countWord[$matches[0][$i]] = 1;
        } else {
            $countWord[$matches[0][$i]]++;
        }
    }

    echo "<table border='2'>";
    foreach ($countWord as $word => $count) {
        echo "<tr><td>$word</td><td>$count</td></tr>";
    }
    echo "</table>";
}
?>
<form>
    <textarea cols="50" name="input"></textarea><br><br>
    <input type="submit" value="Count words">
</form>

