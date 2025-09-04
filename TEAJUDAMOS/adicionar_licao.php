<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <title>Adicionar Lição</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #B61AB6;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 100px;
        }

        .adicionar {
            background-color: #8B0091;
            height: 130px;
            margin-top: 14%;
            width: 130px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .adicionar p {
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-top: -15px; 
        }

        .adicionar i {
            font-size: 60px;
            margin-top: -10px;
            transition: transform 0.3s ease, color 0.5s ease;
        }

        .adicionar:hover {
            transform: scale(1.1);
        }

        .adicionar:hover i {
            transform: scale(1.1);
            color: white;
        }

        .salvar {
            margin-top: 100px;
            padding: 5px;
            width: 180px;
            margin-left: 45%;
            justify-content: center;
            display:flex;
            align-items: center;
            border-radius: 10px;
            color: black;
            font-size: 20px;
            font-weight: bold;
            transform: .3s ease;
            background-color: #ec03ecff;
            transition: background 0.5s ease-in-out , color 0.5s ease-in-out ;
        }

        .salvar:hover{
            background-color: #870087;
            color: white;
            cursor: pointer;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="adicionar">
        <p>Imagem</p>    
        <i class="fas fa-plus"></i>
    </div>

    <div class="adicionar">
        <p>Imagem</p>    
        <i class="fas fa-plus"></i>
    </div>

    <div class="adicionar">
        <p>Título</p>    
        <i class="fas fa-plus"></i>
    </div>

    <div class="adicionar">
        <p>Materiais</p>    
        <i class="fas fa-plus"></i>
    </div>
</div>


<div class="salvar">Salvar</div>

<div class="salvar">Ver Prévia</div>


</body>
</html>
