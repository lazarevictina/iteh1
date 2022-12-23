<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salon lepote</title>
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
  <!-- Modal za izmenu -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Izmena usluge</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- sadrzaj modala -->
          <form>
            <div class="form-group centered">
              <label for="naziv_usluge">Naziv usluge:</label>
              <input type="text" class="form-control" id="naziv_usluge" value='' required>
            </div>
            <div class="form-group">
              <label for="pruzalac">Pružalac usluge:</label>
              <select type="text" class="form-control" id="pruzalac" value='' required></select>
            </div>
            <fieldset disabled>
              <div class="form-group">
                <label for="broj_termina">Broj termina</label>
                <!-- placeholder/value -->
                <input type="text" id="broj_termina" class="form-control" placeholder="0">
              </div>
            </fieldset>
            <div class="d-grid gap-2">
              <a href='./terminiZaUslugu.php' id='sviTermini'><button class="btn btn-warning" style="background-color: #f3c9bc ;" type="button">Svi termini</button></a>
            </div>
          </form>

        </div>
        <div class="modal-footer align_center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #b6c059;">Zatvori</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="button_sacuvaj" style="background-color: #7d8f01;">Sacuvaj</button>
          <button type='button' class="btn btn-danger" data-dismiss="modal" id="button_delete" style="background-color: #404902;">Obrisi</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal za dodavanje -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dodavanje nove usluge</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- sadrzaj modala -->
          <form>
            <div class="form-group">
              <label for="naziv_usluge_dodaj">Naziv usluge:</label>
              <input type="text" class="form-control" id="naziv_usluge_dodaj" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="pruzalac_dodaj">Pružalac usluge:</label>
              <select class="form-control" id="pruzalac_dodaj" placeholder="" required>

              </select>
            </div>
            <fieldset disabled>
              <div class="form-group">
                <label for="broj_termina_dodaj">Broj termina</label>
                <input type="text" id="broj_termina_dodaj" class="form-control" placeholder="0">
              </div>
            </fieldset>
          </form>

        </div>
        <div class="modal-footer align_center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #7d8f01;">Zatvori</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="button_dodaj" style="background-color: #7d8f01;">Dodaj</button>
        </div>
      </div>
    </div>
  </div>


  <?php include 'header.php'; ?>

  <div class='centerDiv'>
    <div class='left_div grid-item'>
    </div>
    <div class='middle_div grid-item'>
      <div class='h_div'>
        <h1 class='h1_text'>Usluge</h1>
      </div>
      <div class='table_div table-hover'>
        <table class="table">
          <thead class="thead-red" style="background-color: #E6E5A3;">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Usluga</th>
              <th scope="col">Pružalac</th>
              <th scope="col">Broj termina</th>
            </tr>
          </thead>
          <tbody id='usluge'>


          </tbody>
        </table>
      </div>
      <div class="button_div1">
        <button data-toggle="modal" data-target="#exampleModal" type="button" style="background-color: #c2b19c;" data-backdrop="static"
          class="btn btn-secondary btn-lg btn-block">NOVA USLUGA</button>
      </div>

    </div>

    <div class='right_div grid-item'>

    </div>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  
</body>

</html>