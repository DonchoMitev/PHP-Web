
<?php
if (isset($_GET['lines'])){
    $arr = array_filter(array_map('trim', explode("\n", $_GET['lines'])));
    usort($arr, function ($a, $b){
       return $a <=> $b;
    });
    $sortedLines = implode("\n", $arr);
}

?>

<form>
    <textarea rows="10" name="lines"><?= $sortedLines ?></textarea> <br>
    <input type="submit" value="Sort">
</form>

