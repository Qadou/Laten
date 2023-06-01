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
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    th,
    td {
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    a {
      color: #007bff;
    }

    a:hover {
      text-decoration: none;
      color: #0056b3;
    }

    tr:hover {
      background-color: #e8f1f8;
      transition: background-color 0.2s ease-in-out;
    }

    @media only screen and (max-width: 600px) {

      table,
      thead,
      tbody,
      th,
      td,
      tr {
        display: block;
      }

      thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
      }

      tr {
        border: 1px solid #ccc;
      }

      td {
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%;
      }

      td:before {
        position: absolute;
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
      }

      td:nth-of-type(1):before {
        content: "id_entite_physique:";
      }

      td:nth-of-type(2):before {
        content: "id_entite_social:";
      }

      td:nth-of-type(3):before {
        content: "libelle:";
      }

      td:nth-of-type(4):before {
        content: "numero_client:";
      }

      td:nth-of-type(5):before {
        content: "adresse:";
      }

      td:nth-of-type(6):before {
        content: "status_ep:";
      }

      td:nth-of-type(7):before {
        content: "code_postal:";
      }

      td:nth-of-type(8):before {
        content: "date_creation:";
      }

      td:nth-of-type(9):before {
        content: "id_contrat:";
      }

      td:nth-of-type(10):before {
        content: "numero_contrat:";
      }

      td:nth-of-type(11):before {
        content: "statut_contrat:";
      }

      td:nth-of-type(12):before {
        content: "version_contrat:";
      }

      td:nth-of-type(13):before {
        content: "type_contrat:";
      }

      td:nth-of-type(14):before {
        content: "frequence_facturation:";
      }

      td:nth-of-type(15):before {
        content: "date_demarrage:";
      }

      td:nth-of-type(16):before {
        content: "id_article:";
      }

      td:nth-of-type(17):before {
        content: "libelle:";
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
      margin-right: 20px;
    }

    .back-button:hover {
      background-color: #555;
      color: white;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>id_entite_physique</th>
      <th>id_entite_social</th>
      <th>libelle</th>
      <th>numero_client</th>
      <th>adresse</th>
      <th>code_postal</th>
      <th>status_ep</th>
      <th>date_creation</th>
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

    </tr>

    @foreach ($sansremise as $user)
    <tr>
      <td>{{$user ->id_entite_physique}}</td>
      <td>{{$user ->id_entite_social}}</td>
      <td>{{$user ->libelle}}</td>
      <td>{{$user ->numero_client}}</td>
      <td>{{$user ->adresse}}</td>
      <td>{{$user ->status_ep}}</td>
      <td>{{$user ->code_postal}}</td>
      <td>{{$user ->date_creation}}</td>
      <td>{{$user ->id_contrat}}</td>
      <td>{{$user ->numero_contrat}}</td>
      <td>{{$user ->statut_contrat}}</td>
      <td>{{$user ->version_contrat}}</td>
      <td>{{$user ->type_contrat}}</td>
      <td>{{$user ->frequence_facturation}}</td>
      <td>{{$user ->date_demarrage}}</td>
      <td>{{$user ->id_article}}</td>
      <td>{{$user ->libelle}}</td>
      <td>{{$user ->montant}}</td>
      <td>{{$user ->remise}}</td>
      <td>{{$user ->devise}}</td>
      <td>{{$user ->date_creation}}</td>
      <td>{{$user ->prix_facture}}</td>
    </tr>
    @endforeach
    <tr>
      <td></td>
    </tr>
  </table>
  <div style="display: flex; justify-content: center;">
    <button class="back-button" onclick="window.location.href='/addremise'"> Ajouter Remise de 10 %</button>
    <button class="back-button" onclick="window.location.href='/afficheentityphysique';">Back</button>
  </div>
</body>

</html>