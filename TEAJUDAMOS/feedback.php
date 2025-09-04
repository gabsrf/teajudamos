<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
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

        .container {
            min-width: 620px;
            min-height: 495px;
            background-color: #F0F0F0;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .container p {
            margin-top: 35px;
            color: #BBBBBB;
            font-size: 35px;
            font-weight: bold;
            display: flex;
            margin-left: 50px;
        }

        .container textarea {
            margin-left: 50px;
            margin-top: -20px;
            border-radius: 5px;
            background-color: #BBBBBB;
            min-width: 500px;
            max-width: 530px;
            min-height: 270px;
            font-size: 20px;
            padding: 10px;
            color: #4e4e4eff;
            font-weight: bold;
            resize: none;
        }

        .icones-feedback {
            display: flex;
            align-items: center;
            margin: 15px 45px 0 60px;
        }

        .icones-feedback i.fa-face-smile,
        .icones-feedback i.fa-face-frown {
            font-size: 40px;
            color: #4e4e4eff;
            margin-right: 15px;
            transition: color 0.3s;
            cursor: pointer;
        }

        .icones-feedback i.fa-face-smile:hover {
            color: #2dda0bff;
        }

        .icones-feedback i.fa-face-frown:hover {
            color: red;
        }

        .icones-feedback button {
            background: none;
            border: none;
            cursor: pointer;
            margin-left: auto;
            padding: 8px;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .icones-feedback button i {
            font-size: 40px;
            color: #3a3a3a;
            transition: color 0.3s, padding 0.25s ease;
        }

        .icones-feedback button:hover {
            background-color: #3a3a3a;
        }

        .icones-feedback button:hover i {
            color: white;
            padding: 8px;
            border-radius: 5px;
        }

        .selecionado-feliz {
            color: #2dda0bff !important;
        }

        .selecionado-triste {
            color: red !important;
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

<div class="container">
    <form method="POST" action="salvar_feedback.php"> 
        <p> FEEDBACK </p>

        <textarea name="feedback" placeholder="Digite seu Feedback"></textarea>

        <input type="hidden" name="emocao" id="campo-emocao">

        <div class="icones-feedback">
            <i id="icone-feliz" class="fa-solid fa-face-smile"></i>
            <i id="icone-triste" class="fa-solid fa-face-frown"></i>
            <button type="submit">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </div>
    </form>
</div>

<script>
    const feliz = document.getElementById("icone-feliz");
    const triste = document.getElementById("icone-triste");
    const campoEmocao = document.getElementById("campo-emocao");

    let selecionado = null;

    feliz.addEventListener("click", () => {
        if (selecionado === "feliz") {
            feliz.classList.remove("selecionado-feliz");
            campoEmocao.value = "";
            selecionado = null;
        } else {
            feliz.classList.add("selecionado-feliz");
            triste.classList.remove("selecionado-triste");
            campoEmocao.value = "feliz";
            selecionado = "feliz";
        }
    });

    triste.addEventListener("click", () => {
        if (selecionado === "triste") {
            triste.classList.remove("selecionado-triste");
            campoEmocao.value = "";
            selecionado = null;
        } else {
            triste.classList.add("selecionado-triste");
            feliz.classList.remove("selecionado-feliz");
            campoEmocao.value = "triste";
            selecionado = "triste";
        }
    });
</script>

</body>
</html>
