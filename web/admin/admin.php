<?php require_once "../header.php"; ?>

<div class="container mt-5">
<!-- posición end como punto de referncia -->
    <div class="row align-items-end text-center">
        <div class="col-md-4"> <!-- Utilitzem d-block: display:block per fer un salt de linea ¿? mx-auto +  mb-2?-->
            <a href="listTecnics.php" class="btn btn-index" style="color:#278DE6">
                <img src="../img/technician-icon.png" alt="Llistar Tècnics" class="d-block mx-auto mb-2" style="width: 150px; height: 150px;">TROBA UN TÈCNIC</a>
        </div>
        <div class="col-md-4">
            <a href="listIncidAdmin.php" class="btn rounded btn-index" style="color:#278DE6">
                <img src="../img/list-icon.png" alt="Llistar Incidències" class="d-block mx-auto" style="width: 150px; height: 150px;">LLISTAR INCIDÈNCIES</a>
        </div>
        <div class="col-md-4">
            <a href="listIncidPendents.php" class="btn rounded btn-index" style="color:#278DE6">
                <img src="../img/choosing-icon.jpg" alt="Assignar incidéncies a un tècnic" class="d-block mx-auto" style="width: 150px; height: 150px;">ASSIGNAR INCIDÈNCIES</a>
        </div>
    </div>

    <div>
        <a href="../index.php" class="btn btn-primary rounded text-white btn-index">INICI</a>
        </div>
</div>

<?php require_once "../footer.php"; ?>
