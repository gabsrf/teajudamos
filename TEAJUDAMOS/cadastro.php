<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <title>CADASTRO</title>
    <style>

        body{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(#46004A, #8B0091);
            height: 100vh;
            position: relative;
                }

        header {
            position: absolute;
            top: -95px;
            left: 20px;
        }

        .logo img {
            width: 300px;
            height: auto;
            object-fit: cover;
        }

        /* From Uiverse.io by ammarsaa */ 
.form {
  top: 25%;
  left: 40%;
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 420px;
  min-height: 480px;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  background-color: #1a1a1a;
  color: #fff;
  border: 1px solid #333;
}

.title {
  font-size: 28px;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
  color: white;
}

.title::before {
  width: 18px;
  height: 18px;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.title::before,
.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: #ec03ecff;
;
;
}

.message, 
.signin {
  font-size: 14.5px;
  color: #ec03eccf;
}

.signin {
  text-align: center;
}

.signin a {
  color: white;
  text-decoration: none;
  position: relative;
}

.signin a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px; 
  width: 0;
  background: white;
  transition: width 0.3s ease-in-out;
}

.signin a:hover::after {
  width: 100%;
}


.flex {
  display: flex;
  width: 100%;
  gap: 20px;
}

.form label {
  position: relative;
}

.form label .input {
  background-color: #333;
  color: #fff;
  margin-left: -8px;
  width: 100%;
  padding: 20px 05px 05px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  color: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 12.5px;
  font-size: 0.9em;
}

.form label .input:focus + span,
.form label .input:valid + span {
  color: #ec03eccf;
  top: 0px;
  font-size: 0.7em;
  font-weight: 600;
}

.input {
  font-size: medium;
}

.submit {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: black;
  font-size: 18px;
  font-weight: bold;
  transform: .3s ease;
  background-color: #ec03ecff;
  transition: background 0.5s ease-in-out , color 0.5s ease-in-out ;
}

.submit:hover {
  background-color: #870087;
  color: white;
  cursor: pointer;
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}

.password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            width: 300px;
        }

        .toggle-password {
            position: absolute;
            right: 0px;
            top: 55%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 25px;
            color: #ec03ecb0;
        }
    </style>
</head>
<body>
<header>
    <a href="index.php">
        <div class="logo">
            <img src="logo-teajudamos.png" alt="logo">
        </div>
    </a>
</header>
    
<form class="form">
    <p class="title">CADASTRO </p>
    <p class="message">Faça o cadastro para aproveitar sua conta. </p>
        <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Nome</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Sobrenome</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>E-mail</span>
    </label> 
        
    <label>
  <div class="password-wrapper">
    <input class="input password" type="password" placeholder="" required>
    <span>Senha</span> 
    <i class="fa-solid fa-eye toggle-password"></i>
  </div>
</label>

<label>
  <div class="password-wrapper">
    <input class="input password" type="password" placeholder="" required>
    <span>Confirme sua Senha</span> 
    <i class="fa-solid fa-eye toggle-password"></i>
  </div>
</label>


    <button class="submit">CADASTRAR</button>
    <p class="signin">Já tem uma conta ? <a href="login.php">Faça Login</a> </p>
</form>


<script>
  const toggleIcons = document.querySelectorAll('.toggle-password');

  toggleIcons.forEach(icon => {
    icon.addEventListener('click', () => {
      const passwordInput = icon.closest('.password-wrapper').querySelector('.password');
      const isPassword = passwordInput.type === 'password';

      passwordInput.type = isPassword ? 'text' : 'password';

      icon.classList.toggle('fa-eye');
      icon.classList.toggle('fa-eye-slash');
    });
  });

</script>

</body>
</html>
