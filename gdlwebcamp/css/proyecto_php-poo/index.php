<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="container">
        <!--CABECERA-->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo"/>
                <a href="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>
        <!--MENÚ-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                    <a href="#">Categoria 1</a>
                    <a href="#">Categoria 2</a>
                    <a href="#">Categoria 3</a>
                    <a href="#">Categoria 4</a>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>        
        </nav>
        <!--BARRA LATERAL-->
        <div id="content">
            <aside id="lateral">
                <div id="login" class= "block_aside">
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <label for="password">Contrasena</label>
                        <input type="password" name="password"/>
                        <input  type="submit" value="Enviar" />
                    </form>

                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar vategorias</a>
                </div>

            </aside>
        
            <!--CONTENIDO CENTRAL-->
            <div id="contral">
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="">Comprar</a>
                </div>

            </div>
        </div>

        <!--PIE DE PÁGNA-->
        <footer id="footer">
            <p>Desarrollado por Santiago Rodríguez WEB &copy; <?=date('Y')?></p>
        </footer>
    </div>
</body>
</html>