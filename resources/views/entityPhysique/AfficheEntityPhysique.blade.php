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
  margin-bottom: 1rem;
}

th,
td {
  padding: 0.5rem;
  text-align: center;
}

th {
  background-color: #eee;
}

tr {
  background-color: white;
}

a {
  display: inline-block;
  padding: 0.5rem 1rem;
  background-color:#1dd3d2;
  text-decoration: none;
  border-radius: 4px;
  margin-right: 0.5rem;
}

h1{
    text-align: center;
    color: #eee;
}

    </style>
</head>
<body>
    <h1>Entity Physique Infos</h1>
<table>
<tr>
    <th>id_entite_physique</th>
    <th>id_entite_social</th>
    <th>libelle</th>
    <th>numero_client</th>
    <th>adresse</th>
    <th>status_ep</th>

    <th>code_postal</th>
    <th>date_creation</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
</tr>

    @foreach ($users as $user)
    <tr>
      <td>{{$user ->id_entite_physique}}</td>
      <td>{{$user ->id_entite_social}}</td>
      <td>{{$user ->libelle}}</td>
      <td>{{$user ->numero_client}}</td>
      <td>{{$user ->adresse}}</td>
      <td>{{$user ->status_ep}}</td>
      <td>{{$user ->code_postal}}</td>
      <td>{{$user ->date_creation}}</td>
      <td><a href="/registerentitephysique">Insert</a></td>
      <td><a href="/modifierPhysique/{{$user->id_entite_physique}}/{{$user->id_entite_social}}">Modify</a></td>
      <td><a href="/deletephysique/{{$user->id_entite_physique}}">Delete</a></td>
      <td><a href="/details/{{$user->id_entite_physique}}">Details</a></td>
    </tr>
   @endforeach
   
 
</table>
<a href="/contrats"> Contarts Active plud de Deux </a>
   <a href="/sansremise"> PAs de remise </a>
  <a href="/">  Back</a>
</body>
</html>