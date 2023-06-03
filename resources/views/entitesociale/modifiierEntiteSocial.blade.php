<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entity Social Form</title>
  <style>
      body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #050b41;
}

h2 {
  text-align: center;
  margin: 20px 0;
  color: white;
}

form {
  max-width: 600px;
  margin:  auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="number"],
select,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  font-family: inherit;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
  </style>
</head>
<body>
	<h2>Update Entity Social Information</h2>
	<form method="post" action = "/update">
    @csrf
		<label for="id_entity_sociale">id_entity_sociale</label>
		<input type="number" id="id_entity_sociale" name="id_entity_sociale" value ={{$id_entite_social}} required><br><br>
    <!-- mli kykoun error (condition)-->
    @error('id_entity_sociale')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="raison_sociale">Raison Sociale:</label>
		<input type="text" id="raison_sociale" name="raison_sociale"  value ={{$raison_social}} required><br><br>
    @error('raison_sociale')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
		<label for="numero_registre">Numero de Registre:</label>
		<input type="number" id="numero_registre" name="numero_registre" value ={{$numero_registre}} required><br><br>
    @error('numero_registre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
		<label for="patente">Patente:</label>
		<input type="text" id="patente" name="patente" value ={{$patente}} required><br><br>
    @error('patente')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
		<label for="adresse">Adresse:</label>
		<input  type = "text" id="adresse" name="adresse"  value = {{$adresse}} required></input><br><br>
    @error('adresse')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
		<label for="code_postal">Code Postal:</label>
		<input type="number" id="code_postal" name="code_postal" value = {{$code_postal}} required><br><br>
    @error('code_postal')
        <div class="alert alert-danger">{{ $message }}</div>
  @enderror
		<input type="submit" value="Save">
	</form>

</body>
</html>