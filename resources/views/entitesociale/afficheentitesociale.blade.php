<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laten</title>
  <style>
  :root{
    background-color: #050b41;
  }
   table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

th {
  text-align: left;
  background-color: #ddd;
  padding: 10px;
}

td {
  border: 1px solid #ddd;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr {
  background-color: white;
}

a {
  text-align: center;
  text-decoration:none;
  color: black;
  padding: 5px 10px;
  background-color: #ddd;
  border-radius: 5px;
  transition: all 0.3s ease;
}

a:hover {
  background-color: #555;
  color: white;
} .back-button {
    background-color: #1dd3d2;
    color: black;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    position: fixed;
    bottom: 20px;
  }
  .back-button:hover{
    background-color: #555;
  color: white;
  }
  </style>
</head>
<body>
<table>
<tr>
    <th>raison_sociale</th>
    <th>numero_registre</th>
    <th>adresse</th>
    <th>code_postal</th>
    <th>patente</th>
    <th></th>
    <th></th>
    <th></th>
</tr>

    @foreach ($users as $user)
    <tr>
      <td>{{$user ->raison_social}}</td>
      <td>{{$user ->numero_registre}}</td>
      <td>{{$user ->adresse}}</td>
      <td>{{$user ->code_postal}}</td>
      <td>{{$user ->patente}}</td>
      <td><a href="/modifie/{{$user->id_entite_social}}">Modify</a></td>
      <td><a href="/deletesocial/{{$user->id_entite_social}}"id="aa">Delete</a></td>
    </tr>
   @endforeach
</table>
<br><br>
<div style="display: flex; justify-content: center;">
  <button class="back-button" onclick="window.location.href='/';">Back</button>
  <a href="/registerEntiteSociale">Insert</a>
</div>
</body>
</html>