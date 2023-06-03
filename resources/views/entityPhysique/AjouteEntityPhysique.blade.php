<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entity Physique Form</title>
<style>body {
  font-family: Arial, sans-serif;
  background-color: #050b41;
}

form {
  max-width: 600px;
  margin:  auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #202123;
}

input[type="text"],
input[type="number"],
select {
  width: 100%;
  padding: 8px;
  margin: 5px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #ccc;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #1dd3d2;
}
input[type="date"] {
  appearance: none;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 3px;
  padding: 5px 10px;
  font-size: 16px;
  color: #555;
}

/* Style the arrow icon */
input[type="date"]::-webkit-calendar-picker-indicator {
  color: #555;
  font-size: 16px;
}

/* Style the clear button */
input[type="date"]::-webkit-clear-button {
  display: none;
}
h2 {
  text-align: center;
  color: white;
}
label{
  color: white;
}

</style>
</head>
<body>
	<h2>Entity Physique Information</h2>
  <br><br>
	<form method="post" action = "/registerentitephysique">
    @csrf
    <label for="id_entity_sociale">id_entite_physique</label>
		<input type="number" id="id_entite_physique" name="id_entite_physique" ><br><br>
    @error('id_entite_physique')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
    <label for="list_enttitesocial"> List_entite sociale</label>
    <select name="list_enttitesocial" id="list_enttitesocial">
     @foreach ($list_entitesociale as  $list )
      <option value="{{$list -> id_entite_social }}">{{$list->raison_social}}</option>
   @endforeach
    </select>
    <br><br>
    <label for="Libelle">Libelle</label>
		<input type="text" id="Libelle" name="Libelle" ><br><br>
    @error('Libelle')
        <div style  = "color:red;"  class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="Numero_de_Client">Numero De Client:</label>
		<input type="number" id="Numero_de_Client" name="Numero_de_Client" ><br><br>
    @error('Numero_de_Client')
        <div  style  = "color:red;" class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="Adresse">Adresse</label>
		<input type="text" id="Adresse" name="Adresse" ><br><br>
    @error('Adresse')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="code_postal">Code Postal</label>
		<input type="number" id="code_postal" name="code_postal" ><br><br>
    @error('code_postal')
        <div class="alert alert-danger">{{ $message }}</div><br>
  @enderror
  <label for="StatusEp">StatusEp:</label>
		<select name="StatusEp" id="StatusEp">
      <option value="AC">AC</option>
      <option value="KO">KO</option>
      <option value="PR" selected>PR</option>
    </select><br><br>
    @error('StatusEp')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
    <label for="date_de_creation">date de creation :</label>
		<input  type= "date" id="date_de_creation" name="date_de_creation" ></input><br><br>
    @error('date_de_creation')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<input type="submit" value="Save">
	</form>

</body>
</html>