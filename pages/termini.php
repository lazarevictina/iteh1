<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Termini usluga</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>


<body>

  <?php include 'header.php'; ?>
  <div class='centerDiv'>

    <div class='left_div grid-item'>

    </div>

    <div class='middle_div grid-item'>

      <div class='h_div'>
        <h1 class='h1_text'>Termini usluga</h1>
        <br>
        <hr>
      </div>
      <div class="row">
        <div class="col-3">
          <label>Sortiraj po datumu</label>
          <select id='sortiraj' class='form-control'>
            <option value="asc">Najskorije</option>
            <option value="desc">Najudaljenije</option>
          </select>
        </div>
        <div class="col-3">
        <label>Pretraži po datumu</label>
          <input type="text" id="datum" onkeyup="funkcijaZaPretragu1()" placeholder="Pretraži termine">
        </div>
        <div class="col-3">
        <label>Pretraži po prostoriji</label>
          <input type="text" id="prostorija" onkeyup="funkcijaZaPretragu2()" placeholder="Pretraži termine">
        </div>
      </div>

      <div class='table_div'>
        <table class="table">
          <thead class="thead-red" style="background-color: #e6e5a3  ;">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Usluga</th>
              <th scope="col">Klijent</th>
              <th scope="col">Datum</th>
              <th scope="col">Prostorija</th>
            </tr>
          </thead>
          <tbody id='termini'>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</body>

</html>