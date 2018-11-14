<form method="get">
    <label>Name:</label><br>
    <input type="text" name="personName"><br>
    <label>Age:</label><br>
    <input type="text" name="age"><br>
    <label>Town:</label><br>
    <select name="townId">
        <option value="10">Sofia</option>
        <option value="20">Varna</option>
    </select><br>
    <input type="submit">
</form>

<?php
   var_dump($_GET)
?>