<?php include("./templates/header.php");?>

<br/>
<div class="card">
    <div class="card-header">
        Datos profesional
    </div>
    <div class="card-body">
    
    <form action="./objetoprofesional.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="primernombre" class="form-label">Primer nombre</label>
      <input type="text"
        class="form-control" name="primer_nombre" id="primer_nombre" aria-describedby="helpId" placeholder="Primer nombre">
      
    </div>

    <div class="mb-3">
      <label for="segundonombre" class="form-label">Segundo nombre</label>
      <input type="text"
        class="form-control" name="segundo_nombre" id="segundo_nombre" aria-describedby="helpId" placeholder="Segundo nombre">
    
    </div>

    <div class="mb-3">
      <label for="primerapellido" class="form-label">Primer apellido</label>
      <input type="text"
        class="form-control" name="primer_apellido" id="primer_apellido" aria-describedby="helpId" placeholder="Primer apellido">
    </div>

    <div class="mb-3">
      <label for="segundoapellido" class="form-label">Segundo apellido</label>
      <input type="text"
        class="form-control" name="segundo_apellido" id="segundo_apellido" aria-describedby="helpId" placeholder="Segundo apellido">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Foto</label> 
      <input type="file" class="form-control" name="foto" aria-describedby="helpId" placeholder="Foto">
    </div>

    <div class="mb-3">
      <label for="cv" class="form-label">CV(PDF)</label>
      <input type="file" class="form-control" name="cv" id="cv" placeholder="CV" aria-describedby="fileHelpId">
    </div>

    <button type="submit" class="btn btn-success">Enviar solicitud</button> 

    <a name="cancelar" id="cancelar" class="btn btn-primary" href="#" role="button">Cancelar</a>

    </form>

    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("./templates/footer.php");?>