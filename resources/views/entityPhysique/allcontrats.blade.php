<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Contrats</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #050b41;
        }        

        h3 {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 90%;
            max-width: 1200px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dddddd;
            font-size: 14px;
            vertical-align: middle;
        }

        th {
            background-color: #f2f2f2;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        button {
            background-color: #1dd3d2;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #3e8e41;
        }

        button:active {
            background-color: #367d39;
        }

        p {
            text-align: center;
        }
  

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
    </style>
</head>

<body>
    <h3>Tout Les Contrats AC sont Duplication</h3>

    <table>

        <tr>
            <th>id_contrat</th>
            <th>id_entite_physique</th>
            <th>numero_contrat</th>
            <th>statut_contrat</th>
            <th>version_contrat</th>
            <th>type_contrat</th>
            <th>fréquence_facturation</th>
            <th>date_creation</th>
            <th>date_demarrage</th>

        </tr>
        @foreach( $allcontrats as $contratvalue)
        <tr>
            <td>{{ $contratvalue->id_contrat }}</td>
            <td>{{ $contratvalue->id_entite_physique }} </td>
            <td> {{ $contratvalue->numero_contrat }} </td>
            <td> {{ $contratvalue->statut_contrat }} </td>
            <td> {{ $contratvalue->version_contrat }} </td>
            <td> {{ $contratvalue->type_contrat }} </td>
            <td> {{ $contratvalue->frequence_facturation }} </td>
            <td> {{ $contratvalue->date_creation }} </td>
            <td> {{ $contratvalue->date_demarrage }} </td>
        </tr>
        @endforeach

    </table>
    <br><br><br><br>
    <div class="container">
        <div class="center">
            <button onclick="window.location.href='http://127.0.0.1:8000/afficheentityphysique';">
                Back
            </button>
        </div>
    </div>
</body>

</html>