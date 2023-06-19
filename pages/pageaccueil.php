

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container3">
			      <h2>LISTE DES PARENTS</h2>
<div id='liste des parents'class="table-wrapper">
<?php
if(isset($_SESSION['message'] ))
{    echo $_SESSION['message']; }
?>
<table class="fl-table">
    <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Nom complet</th>
            <th scope="col">E-mail</th>
            <th scope="col">Mot de passe</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john.doe@example.com</td>
            <td>********</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>jane.smith@example.com</td>
            <td>********</td>
        </tr>
        <!-- Ajouter d'autres lignes de données ici -->
    </tbody>
</table>

</body>
</html>

