<!DOCTYPE html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
        include_once('valido.php');
        $name = test_input($_POST['name']);
        $apellido = test_input($_POST['apellido']);
        $phone = test_input($_POST['phone']);
        $email = test_input($_POST['email']);
        
        $datos = array(
            "name" => $name,
            "apellido" => $apellido,
            "phone" => $phone,
            "email" => $email
        );
    ?>

    <h1>Bienvenido</h1>

    <main class="formulario container">
        <form class="form" action="mostrar.php" method="post">
            <label for="name">Nombre</label><br>
            <div class="form-consta">                
                <input type="text" name="name" placeholder="Nombre" value = "<?=$datos['name']?>"><br>
                <i class="fa-solid fa-user"></i>
            </div>
            <label for="apellido">Apellido</label><br>
            <div class="form-consta">
                <input type="text" name="apellido" placeholder="Apellido" value = "<?=$datos['apellido']?>"><br>
                <i class="fa-solid fa-user"></i>
            </div>
            <label for="phone">Telefono</label><br>
            <div class="form-consta">                
                <input type="phone" name="phone" placeholder="Telefono" value = "<?=$datos['phone']?>"><br>
                <i class="fa-solid fa-phone"></i>
            </div>
            <label for="email">Correo</label><br>
            <div class="form-consta">                
                <input type="email" name="email" placeholder="Correo" value = "<?=$datos['email']?>"><br>
                <i class="fa-solid fa-envelope"></i>
            </div>
        </form>
    </main>
    
</body>
</html>