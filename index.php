<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulario</h1>
    <main class="formulario container">
        <form class="form" action="mostrar.php" method="post">
            <div class="form-consta">
                <input type="text" name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-consta">
                <input type="text" name="apellido" placeholder="Apellido">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-consta">
                <input type="phone" name="phone" placeholder="Telefono">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="form-consta">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <input type="submit" class="btn" value="Enviar">
        </form>
    </main>
</body>
</html>