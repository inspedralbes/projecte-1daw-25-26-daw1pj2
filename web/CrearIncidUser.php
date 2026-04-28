<?php include_once "header.php"; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="d-flex flex-column">
        <div class="p-2">
            <h1>Crear incidència</h1>
        <form action="InsertIncidUser.php" method="POST">
        </div>
        <div class="p-2">
            <label for="descripcion">Descripció</label>
            <textarea name="descripcion" id="descripcion" placeholder="Descriu la incidència ..." cols="30" rows="10" required></textarea>
        </div>
        <div class="p-2">
            <label for="data">Dada de la incidència</label>
            <input type="date" name="data" required>
        </div>    
        <div class="p-2"> <!--el for busca al id del input-->
            <label for="departament">Dapartament</label>
            <select name="departament" id="dept">
                <option value="1">Informàtica</option>
                <option value="2">Català</option>
                <option value="3">Matemàtiques</option>
                <option value="4">Secretaria</option>
            </select>
        </div>
        <div class="form-group"><button class="btn btn-success">Crear</button></div>
        </form>

    </div>
    <a href="index.php"><button>INICI</button></a>
    <button href="">TORNAR</button>
<?php include_once "footer.php"; ?>