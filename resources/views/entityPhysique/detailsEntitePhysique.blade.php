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
       table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th,
td {
  text-align: left;
  padding: 12px;
}

th {
  background-color: #555;
  color: white;
}

tr{
  background-color: white;
}



td:first-child {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

td:last-child {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

@media (max-width: 768px) {
  table {
    font-size: 14px;
  }

  th,
  td {
    padding: 8px;
  }
}
.back-button {
    background-color: #ddd;
    color: black;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }
  .back-button:hover{
    background-color: #555;
  color: white;
  }
  h1 {
    color: white;
  }

    </style>
</head>
<body>
  <h1>This Table Have The Contrat and The Article Also THE Role of Contact </h1>
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
    <th>Role</th>

</tr>

    @foreach ($contrat as $contrat)
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
      <td>{{$contratRole ->role}}</td>
    </tr>
   @endforeach
</table>
<div style="display: flex; justify-content: center;">
  <button class="back-button" onclick="window.location.href='/afficheentityphysique';">Back</button>
</div>

</body>
</html>