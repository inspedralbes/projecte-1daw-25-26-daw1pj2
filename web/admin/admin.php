<?php require_once "../header.php"; ?>
<!--Contenidor de tot el contingut -->
<div class="container mt-5">
    <!-- Div amb 2 columnes centrades-->
    <div class="row w-100 align-items-center text-center">
        <!-- contingut esquerra -->
        <div class="col d-flex flex-column justify-content-center align-items-center gap-3">
            <div class="row-md-4"> <!-- Utilitzem d-block: display:block per fer un salt de linea ¿? mx-auto +  mb-2?-->
                <a href="listTecnics.php" class="btn btn-index" style="color:#278DE6">
                    <img src="../img/technician-icon.png" alt="Llistar Tècnics" class="border border-3 border-primary d-block mx-auto btn-index" style="width: 150px; height: 150px;">TROBA UN TÈCNIC</a>
            </div>
            <div class="row-md-4">
                <a href="listIncidAdmin.php" class="btn rounded btn-index" style="color:#278DE6">
                    <img src="../img/list-icon.png" alt="Llistar Incidències" class="border border-3 border-primary d-block mx-auto btn-index" style="width: 150px; height: 150px;">LLISTAR INCIDÈNCIES</a>
            </div>
            <div class="row-md-4">
                <a href="listIncidPendents.php" class="btn rounded btn-index" style="color:#278DE6">
                    <img src="../img/choosing-icon.jpg" alt="Assignar incidéncies a un tècnic" class="border border-3 border-primary d-block mx-auto btn-index" style="width: 150px; height: 150px;">ASSIGNAR INCIDÈNCIES</a>
            </div>
            <div>
            <a href="../index.php" class="btn btn-primary rounded text-white btn-index">INICI</a>
            </div>
        </div>
        <!-- Contingut dreta -->
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-primary">Gràfiques Incidències</h3>
                </div>
                <!--Pie chart-->
                <div class="card border-primary text-center"><h6>Pie Chart</h6></div>
            </div>
        </div>
    </div>
</div>

<?php require_once "../footer.php"; ?>
