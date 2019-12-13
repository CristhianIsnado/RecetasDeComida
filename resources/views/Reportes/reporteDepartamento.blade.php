<!DOCTYPE html>
<html>
<title>Reporte Departamentos - React js</title>
<head>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
</head>
<body>
  <h2>Reporte de departamentos</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
    </tr>
    @foreach($departamentos AS $d)
    <th>
      <th>{{ $d->id }}</th>
      <th>{{ $d->nombre }}</th>
    </th>
    @endforeach
  </table>
</body>
<script type="text/javascript" src="js.app.js"></script>
</html>
