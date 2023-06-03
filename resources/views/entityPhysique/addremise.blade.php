<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      :root{
    background-color: #050b41;
  }
     table,
tr,
th,
td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
  text-align: center;
}

th {
  background-color: lightgray;
}

h1 {
  text-align: center;
  margin-top: 30px;
  color:white;
}

td {
  background-color: white;
}

    </style>
</head>
<body>
  <h1>After ADD Remise of 10%  </h1>
<table>
<tr>
    <th>id_entite_physique</th>
    <th>id_contrat</th>
    <th>numero_contrat</th>
    <th>statu_contrat</th>
    <th>version_contrat</th>
    <th>type_contrat</th>
    <th>frequence_facturation</th>
    <th>date_demarrage</th>
    <th>id_article</th>
    <th>libelle</th>
    <th>montant</th>
    <th>remise</th>
    <th>devise</th>
    <th>Date de creation</th>
    <th>prix_facture</th>


</tr>

    @foreach ($addremise as $contrat)
    <tr>
      <td>{{$contrat ->id_entite_physique}}</td>
      <td>{{$contrat ->id_contrat}}</td>
      <td>{{$contrat ->numero_contrat}}</td>
      <td>{{$contrat ->statut_contrat}}</td>
      <td>{{$contrat ->version_contrat}}</td>
      <td>{{$contrat ->type_contrat}}</td>
      <td>{{$contrat ->frequence_facturation}}</td>
      <td>{{$contrat ->date_demarrage}}</td>
      <td>{{$contrat ->id_article}}</td>
      <td>{{$contrat ->libelle}}</td>
      <td>{{$contrat ->montant}}</td>
      <td>{{$contrat ->remise}}</td>
      <td>{{$contrat ->devise}}</td>
      <td>{{$contrat ->date_creation}}</td>
      <td>{{$contrat ->prix_facture}}</td>
    </tr>
   @endforeach
</table>

</body>
</html>