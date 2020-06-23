<?php include('data.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>Papá sobre Ruedas</title>
    <style type="text/css">
      body{
       background: #659999;  /* fallback for old browsers */
       background: -webkit-linear-gradient(to right, #f4791f, #659999);  /* Chrome 10-25, Safari 5.1-6 */
       background: linear-gradient(to right, #f4791f, #659999); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .col-md-12{
        text-align: center;
      }
      .lista{
        color: #fff;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12"><br>
          <img src="../img/PapaSobreRuedas_logo2.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-12"><br>
          <table class="table">
            <caption class="lista">Lista de los autos más votados</caption>
               <thead>
                <tr>
                  <th scope="col">##</th>
                  <th scope="col">Auto</th>
                  <th scope="col">Votos</th>
                </tr>
              </thead>
             <tbody>
              <?php
              while ($row = mysqli_fetch_array($query)) {
              ?>
              <tr>
                <th style="color: #fff" scope="row">##</th>
                <td style="color: #fff"><?php echo $row['0']; ?></td>
                <td style="color: #fff"><?php echo $row['1']; ?></td>
              </tr>
                <?php
                  }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>