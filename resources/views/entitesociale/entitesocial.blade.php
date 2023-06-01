<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entity Social Form</title>
  <style>
      :root{
    background-color: #050b41;
  }
    body {
  font-family: Arial, sans-serif;
  background-color: #050b41;
}

h2 {
  text-align: center;
}

form {
  max-width: 500px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
  display: inline-block;
  margin-bottom: 5px;
}

input[type="number"],
input[type="text"] {
  width: 90%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
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
	<h2>Entity Social Information</h2>
	<form method="post" action = "/registerEntiteSociale">
    @csrf
		<label for="id_entity_sociale">id_entity_sociale</label>
		<input type="number" id="id_entity_sociale" name="id_entity_sociale" ><br><br>
    @error('id_entity_sociale')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
    <label for="raison_sociale">Raison Sociale:</label>
		<input type="text" id="raison_sociale" name="raison_sociale" ><br><br>
    @error('raison_sociale')
        <div style  = "color:red;"  class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="numero_registre">Numero de Registre:</label>
		<input type="number" id="numero_registre" name="numero_registre" ><br><br>
    @error('numero_registre')
        <div  style  = "color:red;" class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="patente">Patente:</label>
		<input type="text" id="patente" name="patente" ><br><br>
    @error('patente')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="adresse">Adresse:</label>
		<input  type= "text" id="adresse" name="adresse" ></input><br><br>
    @error('adresse')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="code_postal">Code Postal:</label>
		<input type="number" id="code_postal" name="code_postal" ><br><br>
    @error('code_postal')
        <div class="alert alert-danger">{{ $message }}</div><br>
  @enderror
		<input type="submit" value="Save">
	</form>

</body>
</html>