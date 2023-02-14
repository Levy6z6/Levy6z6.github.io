<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <?php 
        include_once('connection.php');
        $db = new DB();
        $conex = $db->conexion();  
        include("conn.php");
        $bebidas = "select *from productos";
         ?>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    </head>
    <body>
        <!---page 1----------------------->
    <div data-role="page" id="p1">
<div data-role="header">
    <h1>Mueblería Furniture</h1>
        <div data-role="navbar">
       <ul>
        <li><a href="#p1">Inicio</a></li>
        <li><a href="#p3">Productos</a></li>
        <li><a href="#p4">Sucursales</a></li>
       </ul> 
        </div>
    </div>
    <div data-role="content" style="display: flex; justify-content: center;">
        <img src="./logo.jpg">
    </div>
    <div data-role="footer" data-position="fixed">
        <h1>Copyright &copy; 2021 | Mueblería Furniture</h1>
    </div>
</div>
    <!---page 2----------------------------->
    <div data-role="page" id="p2">
        <div data-role="header" data-position="fixed">
            <h1>Mueblería Furniture</h1>
                <div data-role="navbar">
               <ul>
               <li><a href="#p1">Inicio</a></li>
               <li><a href="#p3">Productos</a></li>
               <li><a href="#p4">Sucursales</a></li>
               </ul> 
                </div>
            </div>
            <div data-role="content">
                <img src="./caliente.jpg">
            </div>

            <div data-role="footer" data-position="fixed">
                <h1>Copyright &copy; 2021 | Mueblería Furniture</h1>
            </div>
        </div>
        <!-----------------page 3------------------->
        <div data-role="page" id="p3">
            <div data-role="header" data-position="fixed">
                <h1>Mueblería Furniture</h1>
                    <div data-role="navbar">
                   <ul>
                   <li><a href="#p1">Inicio</a></li>
                   <li><a href="#p3">Productos</a></li>
                   <li><a href="#p4">Sucursales</a></li>
                   </ul> 
                    </div>
                </div>
                <div data-role="content">
                    <?php $resultado = mysqli_query($conexion, $bebidas);
                    while($row=mysqli_fetch_assoc($resultado)) {?>
                    <img src="./fria.jpg">
                    <ul data-role="listview">
                    <li>
                        <a href="#">
                            <img src="<?php echo $row["idImagen"];?>.jpg" >
                            <h3><?php echo $row["nombre"];?></h3>
                            <p class="text-center"><?php echo $row["descripcion"];?></p>
                        </a>
                    </li>
                    
                </ul>
                <?php }?>
                </div>
                <div data-role="footer" data-position="fixed">
                    <h1>Copyright &copy; 2021 | Mueblería Furniture</h1>
                </div>
            </div>
        <!-- -----page 4------------------------------------>
        <div data-role="page" id="p4">
            <div data-role="header">
                <h1>Mueblería Furniture</h1>
                    <div data-role="navbar">
                   <ul>
                   <li><a href="#p1">Inicio</a></li>
                   <li><a href="#p3">Productos</a></li>
                   <li><a href="#p4">Sucursales</a></li>
                   </ul> 
                    </div>
                </div>
                <div data-role="content">
                    <h3>Sucursal López Mateos</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.3511560367233!2d-103.40276108462275!3d20.655287905797625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428add3f25c57ff%3A0xfabbf42d9c9952b5!2sTutto%20Pelle%20L%C3%B3pez%20Mateos!5e0!3m2!1ses!2smx!4v1675910621256!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div data-role="content">
                    <h3>Sucursal Av.Vallarta</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.310678685536!2d-103.40084848462271!3d20.656935705742328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ef3b9d27b2783%3A0xce7d8f695fef6b1!2sMuebles%20Dico%20L%C3%B3pez%20Mateos!5e0!3m2!1ses!2smx!4v1675910844491!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div data-role="content">
                    <h3>Sucursal Federalismo</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29864.83336984973!2d-103.38784998437502!3d20.66534050000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1ff0252b059%3A0x2b5bc9a140cf8e3a!2sMuebles%20Dico%20Federalismo!5e0!3m2!1ses!2smx!4v1675911005134!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                    <div data-role="footer" data-position="fixed">
                    <h1>Copyright &copy; 2021 | Mueblería Furniture</h1>
                </div>
            </div> 
    </body>
</html>
