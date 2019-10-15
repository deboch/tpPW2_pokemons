
<div class="container">
<br><br>
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <br><br>
                    <h5 class="card-title text-center">¡Bienvenido!</h5>
                    <form class="form-signin" method="post" action="controlador/controlador_login.php">
                        <div class="form-label-group">
                            <input type="email" name="email" id="inputEmail" class="form-control"
                                   placeholder="Ejemplo@email.xyz" required autofocus>
                            <label for="inputEmail" class="labels">Ingrese su email</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control"
                                   placeholder="Contraseña" required>
                            <label for="inputPassword" class="labels">Ingrese su contraseña</label>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-block submit"
                                type="submit">Ingresar</button>
                    </form>
                    <a href="registrarse.php" class="text-center linkr btn-block">Registrarme
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
