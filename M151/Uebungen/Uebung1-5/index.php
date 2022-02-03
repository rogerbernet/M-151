<form method="POST" action="post">
    <input type="text" name="name" placeholder="Benutzername" required>
    <select name="klasse" required>
        <option value="D19a">D19a</option>
        <option value="D20a">D20a</option>
        <option value="D21a">D21a</option>
    </select>
    <input type="submit" value="Absenden" />
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['name']))
        {
        $username = $_POST['name'];
        $klasse = $_POST["klasse"];
        echo "Hallo {$username} aus der Klasse {$klasse}!";
        }
        else
        {
            echo "Geben sie einen Namen ein";
        }
    }
?>