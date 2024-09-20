<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Montserrat", sans-serif;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #F0F4F3;
}
.container{
    width: 800px;
    height: 500px;
    display: flex;
    position: relative;
    background-color: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 0 10px rgb(0, 0,0,0.3)
}
.container-form{
    width: 100%;
    overflow: hidden;
}
.container-form form{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: transform 0.5s ease-in;
}
.container-form h2{
    font-size: 30px;
    margin-bottom: 20px;
}
.social-networks{
    display: flex;
    gap: 12px;
    margin-bottom: 25px;
}
.social-networks ion-icon{
    border: 1px solid #C9CCCB;
    border-radius: 6px;
    padding: 8px;
    cursor: pointer;
}
.container-form span{
    font-size: 12px;
    margin-bottom: 15px;
}
.container-input{
    width: 300px;
    height: 40px;
    margin-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    padding: 0 15px;
    background-color: #EEEEEE;
}
.container-input input{
    border: none;
    outline: none;
    width: 100%;
    height: 100%;
    background-color: inherit;
}
.container-form a{
    color: black;
    font-size:  14px;
    margin-bottom: 20px;
    margin-top: 5px;
}
.button{
    width: 170px;
    height: 45px;
    font-size: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;  
    background-color: #fd460a;  
    color: white;
}
/*Animation form*/

.sign-up{
    transform: translateX(-100%);
}
.container.toggle .sign-in{
    transform: translateX(100%);
}
.container.toggle .sign-up{
    transform: translateX(0);
}

/*Welcome*/
.container-welcome{
    position: absolute;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    transform: translateX(100%);
    background-color: #fd460a ;
    transition: transform 0.5s ease-in-out, border-radius 0.5s ease-in-out;
    overflow: hidden;
    border-radius: 50% 0 0 50%;
}
.container.toggle .container-welcome{
    transform: translateX(0);
    border-radius: 0 50% 50% 0;
    background-color: #fd460a;
}
.container-welcome .welcome{
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    padding: 0 50px;
    color: white;
    transition: transform 0.5s ease-in-out;
}
.welcome-sign-in{
    transform: translateX(100%);
}
.container-welcome h3{
    font-size: 40px;
}
.container-welcome p{
    font-size: 14px;
    text-align: center;
}
.container-welcome .button{
    border: 2px solid white;
    background-color: transparent;
}

.container.toggle .welcome-sign-in{
    transform: translateX(0);
}
.container.toggle .welcome-sign-up{
    transform: translateX(-100%);
}</style>
</head>
<body>
        
    <div class="container">
        <div class="container-form">
            <form action="./controlador.php" method="post" class="sign-in">
                <h2>Iniciar Sesión</h2>
                <div class="social-networks">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use su Nombre y contraseña</span>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Nombre" name="nombre">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <a href="index.html">volver</a>

                <input type="submit" value="Inicio Sesion" name="inicio" class="button" >
            </form>
        </div>

        <div class="container-form">
            <form method="post" class="sign-up">
                <h2>Registrarse</h2>
                <div class="social-networks">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use su correo electrónico para registrarse</span>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Nombre" name="nombre">
                </div>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <?php
                include("controlador.php");
                ?>
                <input type="submit" value="Registrase" name="registrar" class="button" >
            </form>
        </div>

        <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <h3>Real Pasion</h3>
                <p>Ingresa para obtener información más detallada acerca     de tú proceso.</p>
                <button class="button" id="btn-sign-up">Registrarse</button>
            </div>
            <div class="welcome-sign-in welcome">
                <h3>Bienvenido Real Pasion</h3>
                <p>Regístrese con sus datos personales para usar todas las funciones del sitio</p>
                <button class="button" id="btn-sign-in">Iniciar Sesión</button>
            </div>
        </div>

    </div>


    <script>
    const container = document.querySelector(".container");
const btnSignIn = document.getElementById("btn-sign-in");
const btnSignUp = document.getElementById("btn-sign-up");

btnSignIn.addEventListener("click",()=>{
   container.classList.remove("toggle");
});
btnSignUp.addEventListener("click",()=>{
   container.classList.add("toggle");
});
</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>