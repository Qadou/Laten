<!DOCTYPE html>
<html lang="en">
<head>
   <title>confirm delete</title>
   <style>
 
    body {
  font-family: Arial, sans-serif;
  background-color:  #050b4a;
  padding: 20px;
  text-align: center;
}

h2 {
  color: white;
  font-size: 28px;
  margin-bottom: 10px;
}

p {
  color: #666;
  font-size: 16px;
  line-height: 1.5;
}

button {
  display: inline-block;
  border-radius: 4px;
  background-color:#1dd3d2;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.cancel {
  background-color: #f44336;
}



   </style>
</head>
<body>
 <h2>Vous Voulez Vraiment supprime  set societe Id : {{ $id }}</h2><br/><br/><br/><br/><br/><br/><br/><br/>
  

 <button onclick="window.location.href='http://127.0.0.1:8000/confirmdeletes/{{ $id }}';">
      Confirm
    </button>
    <button onclick="window.location.href= '/affiche'">Cancel</button>
</body>
</html>