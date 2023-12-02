<?php
    include "PHP/conexion.php";

    $libros = $conectar->query("SELECT * FROM libros");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="row justify-content-center align-items-center">
    <div class="container col-auto">
        <h1 class="text-white text-center">BIBLIOTECA</h1>
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formulario">Agregar libro</button> 
            <h2 class="text-white text-center">Libros existentes</h2>  
                     
        </div>
        <div>
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Descripción</th>
      <th scope="col" colspan=2>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($libros as $libro){ ?>
    <tr>
      <td><?php echo $libro['id'] ?></td>
      <td><?php echo $libro['titulo'] ?></td>
      <td><?php echo $libro['autor'] ?></td>
      <td><?php echo $libro['descripcion'] ?></td>
      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar" data-info="<?php echo $libro['id'] ?>">Editar</button> </td>
      <td><a href="PHP/eliminar.php?id=<?php echo $libro['id'] ?>" class="btn btn-danger">Eliminar</a></td>
    </tr> 
    <?php } ?>
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">FORMULARIO DE REGISTRO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="PHP/registro.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo" >    
  </div>
  <div class="mb-3">
    <label class="form-label">Autor</label>
    <input type="text" class="form-control" name="autor">
  </div> 
  <div class="mb-3">
    <label class="form-label">Descripción</label>
    <textarea class="form-control" rows="3" name="descripcion"></textarea>
  </div> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">FORMULARIO DE REGISTRO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-data"></div>
        
      <form action="PHP/editar.php" method="POST">
  <div class="mb-3">  
    <label class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo" >    
  </div>
  <div class="mb-3">
    <label class="form-label">Autor</label>
    <input type="text" class="form-control" name="autor">
  </div> 
  <div class="mb-3">
    <label class="form-label">Descripción</label>
    <textarea class="form-control" rows="3" name="descripcion"></textarea>
  </div> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>
    </form>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
    $(".btn-primary").click(function () {
        let info = $(this).data('info');
        //$('.modal-data').html(info);
        
    });
});
</script>
    
    <script src="JS/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
