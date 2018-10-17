<form>
    <textarea rows="10" name="text"></textarea><br>
    <input type="submit" value="Extract">
</form>

<?php

    if (isset($_GET['text'])){
        $text = $_GET['text'];

        preg_match_all("/\b[A-Z]+\b/", $text, $matches);


        echo implode(", ", $matches[0]);
    }
?>