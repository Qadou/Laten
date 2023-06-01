<!DOCTYPE html>
<html lang="en">
<head>
   <title>confirm delete</title>
   <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #050b41;
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
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #3e8e41;
}

.cancel {
  background-color: #f44336;
}

.cancel:hover {
  background-color: #da190b;
}

   </style>
</head>
<body>
 <h2>Are you sure do you want to delete Client number : {{ $id }}</h2>
  

    <button onclick="window.location.href='http://127.0.0.1:8000/confirmdeletep/{{ $id }}';">
      Confirm
    </button>
    <button onclick="window.location.href= '/afficheentityphysique'">Cancel</button>
</body>
</html>