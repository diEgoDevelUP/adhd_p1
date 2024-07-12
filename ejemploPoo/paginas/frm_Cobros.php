<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style6.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-4">
                <h1>Cobros</h1>
                <form action="../objetos/objeto_cobros.php" method="get">
                    <div class="mb-3">
                        <label for="txtNombre"  class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="txApellido"  class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese su apellido">
                    </div>
                    <div class="mb-3">
                        <label for="txtNumeroTel"  class="form-label">Numero de telefono</label>
                        <input type="number" id="txtNumeroTel" name="txtNumeroTel" class="form-control" placeholder="Ingrese su numero de telefono">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion"  class="form-label">Direccion</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese su direccion">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodigo"  class="form-label">Codigo</label>
                        <input type="text" id="txtCodigo" name="txtCodigo" class="form-control" placeholder="Ingrese su codigo">
                    </div>
                    <div class="mb-3">
                        <label for="txtNivelAcad"  class="form-label">Nivel Academico</label>
                        <input type="text" id="txtNivelAcad" name="txtNivelAcad" class="form-control" placeholder="Ingrese su nivel academico">
                    </div>
                    <div class="mb-3">
                        <label for="txtSueldoBase"  class="form-label">Sueldo Base</label>
                        <input type="text" id="txtSueldoBase" name="txtSueldoBase" class="form-control" placeholder="Ingrese su sueldo base">
                    </div>
                    <div class="mb-3">
                        <label for="txtBonificacion"  class="form-label">Bonificacion</label>
                        <input type="text" id="txtBoniicacion" name="txtBonificacion" class="form-control" placeholder="Ingrese su bonificacion">
                    </div>
                    <div class="mb-3">
                        <label for="txtComisionCobro"  class="form-label">Comision por Cobro</label>
                        <input type="text" id="txtComisionCobro" name="txtComisionCobro" class="form-control" placeholder="Ingrese su comision por cobros">
                    </div>
                    <div class="mb-3">
                    <input type="submit" value="Enviar" class="form-control btn btn-success" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>