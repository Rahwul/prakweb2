<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
  <form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tp" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <input id="tp" name="tp" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tlu" class="col-4 col-form-label">Tanggal lahir/usia</label> 
    <div class="col-8">
      <input id="tlu" name="tlu" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-4 col-form-label">Jenis kelamin</label> 
    <div class="col-8">
      <input id="jk" name="jk" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      
    </div>
  </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
    table {
      width: 50%;
      border-collapse: collapse;
      margin-left: auto;
      margin-right: auto;
    }
    th, td {
      border: 1px solid black;
      padding: 5px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
    th:first-child, td:first-child {
      border-bottom: none;
    }
    th:-child, td:second-child {
      border-bottom: none;
    }
  </style>
</head>
<body>
<br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Jenis Tes</th>
                        <th scope="col">Hasil Pemeriksaan</th>
                        <th scope="col">Normal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tekanan darah </td>
                        <td></td>
                        <td>120/80 mmhg</td>
                    </tr>
                    <tr>
                        <td>Asam urat </td>
                        <td></td>
                        <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Kolesterol total</td>
                        <td></td>
                        <td>
                            < 200 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Gula Darah</td>
                        <td></td>
                        <td>Puasa: 70-110 mg/d</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Sewaktu/acak : 70-125 mg/d</td>
                    </tr>
                </tbody>
            </table>
</body>
</html>