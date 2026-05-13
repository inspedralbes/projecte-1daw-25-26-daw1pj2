<?php include_once "../header.php"; ?>

    <div class="container mt-5"> <!--con Margin Top: 5-->
        <div class="row justify-content-center align-items-center g-4"> <!-- -->
            <div class="col-md-5 text-center"> <!-- centrar img + txt -->
                <img src="../img/registre-actuacio-img.jpg" alt="imatge tècnic arreglant errors." class="img-fluid rounded shadow mb-4" style="max-width:400px"> <!-- fluid per moure l'imatge-->
                <div class="d-flex gap-2 justify-content-center mt-3" style="margin-top: 100px">
                    <a href="../index.php" class="btn btn-primary rounded text-white btn-index">INICI</a>
                    <a href="tecnic.php" class="btn btn-primary rounded text-white btn-index">TORNAR</a>
            </div>
            </div>
            
            <div class="col-md-6 text-center" > <!-- md: medium -->
                <h1 class="fw-bold text-center mb-5" style="margin-top: 30px">Afegir actuació</h1>
                <form action="insertActuacio.php" method="POST" class="border border-success rounded" style="width:600px; background: linear-gradient(135deg, #cea54d, #fff170);">
                    <div class="p-2">
                        <label class="fs-4 mt-4" for="visible">Visibilitat</label> <br>
                        <select name="visible" id="visible">
                            <option value="0">No visible</option>
                            <option value="1">Visible</option>
                        </select> <br>
                        <label class="fs-4 mt-4" for="temps">Temps dedicat (minuts)</label> <br>
                        <input type="text" name="duracio" id="temps" placeholder="Nombre de minuts..."><br>
                        <label class="fs-4 mt-4" for="descripcion">Descripció</label> <br>
                        <textarea name="descripcio" id="descripcion" placeholder="Descriu l'actuació..." cols="40" rows="10" required></textarea>
                        <input type="hidden" name="idIncidencia" value="<?php echo $_GET['id']; ?>">                        
                    </div>  
                <div class="form-group mb-3"><button class="btn btn-outline-light border-3 shadow">Crear</button></div>
            </form>
        </div>
    </div>
<?php include_once "../footer.php"; ?>
