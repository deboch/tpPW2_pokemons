<?php require_once("recursos/head.php");?>
<body>
<?php require_once("recursos/header.php");?>

    <section class="mb-4">
    ||<figure>
        <img class="img-fluid rounded d-block m-l-none" alt="Slogan" src="recursos/img/fondo4.jpg">
      </figure>
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">       
            <div class="carousel-inner" role="listbox">                     
                <div class="carousel-item active">
                    <?php require_once("inicioSesion.php");?>
                </div>           
            </div>                  
        </div>
    </section>

<?php require_once("recursos/footer.php");?>


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>
</html>