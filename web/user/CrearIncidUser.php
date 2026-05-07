<?php include_once "../header.php"; ?>

<link rel="stylesheet" href="../css/responsive.css">

    <div class="container mt-5"> <!--con Margin Top: 5-->
        <div class="row justify-content-center align-items-center"> <!-- -->
            <div class="col-md-5 align-items-start"> <!--  ¿? -->
                <img src="../img/formularis-incidencies.jpg" alt="img Incidencies" style="max-width:400px" class="img-fluid rounded shadow"> <!-- fluid per moure l'imatge-->
                <div class="d-grid gap-2 d-md-flex justify-content-md-center" style="margin-top: 100px">
                    <a href="../index.php" class="btn rounded text-white btn-index" style="background-color:#129987">INICI</a>
                    <a href="userList.php" class="btn rounded text-white btn-index" style="background-color:#129987">LLISTAR INCIDÈNCIES</a>
            </div>
            </div>
            
            <div class="col-md-6 text-center" > <!-- md: medium -->
                <h1 class="fw-bold text-center mb-5" style="margin-top: 60px">Crear incidència</h1> <!--Color anterior del formulario: background-color: #60c7b6-->
                <form action="InsertIncidUser.php" method="POST" class="border border-success rounded" style="width:600px; background: linear-gradient(172deg,rgba(96, 199, 182, 1) 0%, rgba(133, 199, 161, 1) 0%, rgba(95, 178, 222, 1) 100%);">
                
                    <div class="p-2">
                        <label class="fs-4 mt-4" for="descripcion">Descripció</label> <br>
                        <textarea name="descripcion" id="descripcion" placeholder="Descriu la incidència ..." cols="40" rows="10" required></textarea>
                    </div>
                    <div class="p-2">
                        <label class="fs-4" for="data">Data de la incidència</label>
                        <input type="date" name="data" required>
                    </div>    
                    <div class="p-2"> <!--el for busca al id del input-->
                        <label class="fs-4" for="departament">Departament</label>
                        <select name="departament" id="department">
                            <option value="1">Informàtica</option>
                            <option value="2">Català</option>
                            <option value="3">Matemàtiques</option>
                            <option value="4">Secretaria</option>
                        </select>
                    </div>
                <div class="form-group mb-3"><button class="btn btn-success">Crear</button></div>
            </form>
        </div>
    </div>
<?php include_once "../footer.php"; ?>
