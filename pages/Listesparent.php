<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    font-family: "Open Sans", sans-serif;
    line-height: 1.25;
  }
  table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    table-layout: fixed;
    width: 100%;
  }
  table caption {
    font-size: 1.5em;
    margin: .5em 0 .75em;
  }
  table tr {
    border: 1px solid #ddd;
    padding: .35em;
  }
  table tr:nth-child(even) {
    background: #f8f8f8;  
  }
  table th,
  table td {
    padding: .625em;
    text-align: left;
  }
  table th {
    background: #999;
    color: #fff;
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
  }
  table td {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
<body>
<?php
// Données des parents
$parents = array(
    array('Id parent' => 1, 'Nom complet' => 'cissé amadou', 'E-mail' => 'a75588@gmail.com', 'Mot de passe' => '10081990')
);

// Générer le code HTML de la table
$html = '<table>
  <caption>LISTE DES PARENT</caption>
  <thead>
    <tr>
      <th scope="col">Id parent</th>
      <th scope="col">Nom complet</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mot de passe</th>
    </tr>
  </thead>
  <tbody>';

foreach ($parents as $parent) {
    $html .= '<tr>';
    $html .= '<td>' . $parent['Id parent'] . '</td>';
    $html .= '<td>' . $parent['Nom complet'] . '</td>';
    $html .= '<td>' . $parent['E-mail'] . '</td>';
    $html .= '<td>' . $parent['Mot de passe'] . '</td>';
    $html .= '</tr>';
}

$html .= '</tbody>
</table>';

// Afficher la table
echo $html;
?>

</body>
</html>