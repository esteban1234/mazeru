
<?php include 'vistas/encabezado.php' ?>
<body>

<header>
    <div class="menu pull-left">
        <ul>
            <a id="select" href="index.php">INICIO</a>
            <a href="vistas/nosotros.php">NOSOTROS</a>
            <a href="vistas/servicios.php">SERVICIOS</a>
            <a href="vistas/contacto.php">CONTACTO</a>
        </ul>
    </div>

    <figure class="logo pull-right">
        <img src="img/mazeru.png" alt="" class="img-responsive">
    </figure>
</header>

<div class="container slide1">
    <!-- Indicators -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/partes.jpg" alt="Comercio al por menor de partes y refacciones nuevas para automóviles, camionetas y camiones">
                <div class="carousel-caption">
                    <h3>Comercio al por menor</h3>
                    <p>Partes y refacciones nuevas para automóviles, camionetas y camiones</p>
                </div>
            </div>
            <div class="item">
                <img src="img/bisuteria.jpeg" alt="Comercio al por menor bisutería y accesorios de vestir, como pañoletas, mascadas, etc">
                <div class="carousel-caption">
                    <h3>Comercio al por menor</h3>
                    <p>Bisutería y accesorios de vestir, como pañoletas, mascadas, etc</p>
                </div>
            </div>
            <div class="item">
                <img src="img/telas.jpg" alt="Comercio al por menor de telas">
                <div class="carousel-caption">
                    <h3>Comercio al por menor</h3>
                    <p>Telas</p>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    </div>
</div>

<div class="conten">
    <h1 class="text-center" style="padding-top: 2%;">Nuestros servicios</h1>
    <h3 class="text-center" style="padding-top: 0%;">Comercio al por menor y por mayor</h3>
    <div class="contenalgunosserv">
        <div class="servuno">
        <figure class="servunoheader">
            <img src="img/car.png" alt="">
        </figure>
        <p class="tit">Partes y refacciones de automoviles</p>
            <!-- <div class="servunoheader">
                
            </div> -->
        </div>

        <div class="servuno">
        <figure class="servunoheader">
            <img src="img/compu.png" alt="">
        </figure>
        <p class="tit">Equipo y accesorios de cómputo</p>
            <!-- <div class="servunoheader">
                
            </div> -->
        </div>

        <div class="servuno">
        <figure class="servunoheader">
            <img src="img/pulcera.png" alt="">
        </figure>
        <p class="tit">Bisutería y accesorios de vestir</p>
            <!-- <div class="servunoheader">
                
            </div> -->
        </div>
    </div>
<p class="boton" style="text-align: center;"><a class="btn btn-warning btn-lg" href="vistas/servicios.php">Ir a servicios</a></p>

</div>

<div class="marcas">
    <h2 class="text-center" style="padding-top: 5%; color: #D84B4E;">Algunas refacciones de automoviles</h2>

    <div class="contenmarcas">
        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/rines.png" alt="Rines" class="img-responsive">
            </figure>
            <h2>Rines</h2>
        </div>

        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/mofles.png" alt="Mofles" class="img-responsive">
            </figure>
            <h2>Mofles</h2>
        </div>

        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/toma.jpg" alt="Toma de agua" class="img-responsive">
            </figure>
            <h2>Toma de agua</h2>
        </div>

        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/retrovisor.jpg" alt="Retrovisores" class="img-responsive">
            </figure>
            <h2>Retrovisores</h2>
        </div>
    </div> 
</div>


<div class="marcas">
    <h2 class="text-center" style="padding-top: 5%; color: #D84B4E;">Algunas refacciones de computo</h2>

    <div class="contenmarcas">
        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/cargador.jpg" alt="Cargadores" class="img-responsive">
            </figure>
            <h2>Cargadores</h2>
        </div>

        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/bateria.jpg" alt="Baterias" class="img-responsive">
            </figure>
            <h2>Baterias</h2>
        </div>

        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/discos.jpg" alt="Discos Duros" class="img-responsive">
            </figure>
            <h2>Discos Duros</h2>
        </div>

        <div class="marcauno">
            <figure class="imgmarca">
                <img src="img/video.jpg" alt="Tarjetas de video" class="img-responsive">
            </figure>
            <h2>Tarjetas de video</h2>
        </div>
    </div> 
</div>

<p class="boton" style="text-align: center;"><a class="btn btn-warning btn-lg" href="vistas/contacto.php">Contáctanos</a></p>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slide.js"></script>
<script src="js/botonarriba.js"></script>
</body>
</html>
