<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entity Physique Form</title>
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
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #202123;
}

label {
  display: block;
  margin-bottom: 10px;
  color: white;
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
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
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
  </style>
</head>
<body>
	<h2>Entity Physique Information</h2>
	<form method="post" action = "/update">
    @csrf
    
    <label for="id_entity_sociale">id_entite_physique</label>
		<input type="number" id="id_entite_physique" name="id_entite_physique" value="{{$id_entite_physique}}"><br><br>
    @error('id_entite_physique')
        <div style="color: white;" class="alert alert-danger">{{ $message }}</div><br>
    @enderror
    <label for="list_enttitesocial"> List_entite sociale</label>
    <select name="list_enttitesocial" id="list_enttitesocial">
     @foreach ($list_entitesociale as  $list )
      <option value="{{$list->id_entite_social }}" {{$list->id_entite_social == $id ? 'selected' : ''}}>{{$list->raison_social}}</option>
   @endforeach
  
    </select>
    <br><br>

    <label for="Libelle">Libelle</label>
		<input type="text" id="Libelle" name="Libelle" value="{{$Libelle}}"><br><br>
    @error('Libelle')
        <div style  = "color:red;"  class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="Numero_de_Client">Numero De Client:</label>
		<input type="number" id="Numero_de_Client" name="Numero_de_Client"  value="{{$Numero_de_client}}"><br><br>
    @error('Numero_de_Client')
        <div  style  = "color:red;" class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="Adresse">Adresse</label>
		<input type="text" id="Adresse" name="Adresse" value="{{$Adress}}" ><br><br>
    @error('Adresse')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<label for="code_postal">Code Postal</label>
		<input type="number" id="code_postal" name="code_postal"  value="{{$code_postal}}"><br><br>
    @error('code_postal')
        <div class="alert alert-danger">{{ $message }}</div><br>
  @enderror
  <label for="StatusEp">StatusEp:</label>
		
<!-- <input  type= "text" id="StatusEp" name="StatusEp" value="{{$StatusEp}}" ></input> -->
<select name="StatusEp" id="StatusEp" >
      <option value="AC" {{$StatusEp == "AC" ? 'selected' : '' }}>AC</option>
      <option value="KO" {{$StatusEp == "KO" ? 'selected' : '' }}>KO</option>
      <option value="PR" {{$StatusEp == "PR" ? 'selected' : '' }}>PR</option>
    </select><br><br>
    @error('StatusEp')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
    <label for="date_de_creation">date de creation :</label>
		<input  type= "date" id="date_de_creation" name="date_de_creation"  value = {{$date_de_creation}}></input><br><br>
    @error('date_de_creation')
        <div class="alert alert-danger">{{ $message }}</div><br>
    @enderror
		<input type="submit" value="Save">
	</form>

</body>
</html>