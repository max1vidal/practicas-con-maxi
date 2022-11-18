<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



</head>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="imagenes/Logo-removebg-preview.png" height="75px" width="75px" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">



          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>







        </ul>




  </nav>


  <form action="nueva_foto.php" method="post" enctype="multipart/form-data">
    <fieldset>


      <div class="form-group">
        <label name="curso" for="curso" class="form-label mt-4">Curso</label>
        <select class="form-select" name="cmbCurso" id="curso">
          <option value="1">MMO</option>
          <option value="2">Electro</option>
          <option value="3">Informatíca mañana</option>
          <option value="4">Informatíca tarde</option>

        </select>
      </div>




      <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <textarea class="form-control" name="txtNombre" id="nombre" rows="1"></textarea>
      </div>




      <div class="form-group">
        <label for="ig" class="form-label mt-4">Instagram</label>
        <textarea class="form-control" name="txtIg" id="ig" rows="1"></textarea>
      </div>



      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripción</label>
        <textarea class="form-control" name="txtDes" id="descripcion" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="img" class="form-label mt-4">Subir Archivo</label>
        <input class="form-control" name="txtImg" type="file" id="img">
        <fieldset class="d-flex justify-content-end">
          <button class="btn btn-secondary my-2 my-sm-0" type="sumbit" class="btn btn-primary">Subir</button>
        </fieldset>
      </div>





    </fieldset>
  </form>










</body>

</html>