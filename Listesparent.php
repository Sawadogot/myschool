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
<table>
  <caption>LISTE DES ELEVES</caption>
  <thead>
    <tr>
      <th scope="col">N</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom(s)</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Classe</th>
      <th scope="col">Trimestre</th>
      <th scope="col">Id parent</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>cissé</td>
        <td>amadou</td>
        <td>10-08-1990</td>
        <td>5ème</td>
        <td>ajout trimestre</td>
        <td>DIAKITE</td>
    </tr>
  </tbody>
</table>
</body>
</html>