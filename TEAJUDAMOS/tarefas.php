<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Tarefas</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: white;
      color: #333;
      height: 100vh;
    }

    header {
      background-color: purple;
      width: 100%;
      padding: 10px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 80px;
      position: fixed;
      top: 0;
      z-index: 100;
    }

    .logo img {
      width: 200px;
      height: auto;
      margin-top: 10px;
      cursor: pointer;
      transition: transform 0.3s ease-in-out;
    }

    
    .logo img:hover {
      transform: scale(1.08);
    }

    .search-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .search-container input {
      padding: 15px;
      margin-left: -65px;
      border-radius: 10px;
      border: none;
      width: 450px;
      font-size: 18px;
      font-weight: bold;
    }

    .search-container input:focus {
  outline: none;
}

 

    .search-container button {
      background-color: #5e065eff;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-left: -46px;
      padding: 10px;
      transition: all .3s;
    }

    .search-container button:hover {
        transform: scale(1.04);
        border-radius: 0;
        padding: 11px;
    }

    .search-container button img {
      width: 25px;
      height: 25px;
    }

        .profile-icon {
  position: relative;
  display: inline-block;
}

.profile-icon img {
  width: 50px;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
  border-radius: 100px;
  position: relative;
  z-index: 1;
}

.profile-icon:hover::after {
  content: '';
  position: absolute;
  top: -6px;
  left: -6px;
  right: -6px;
  bottom: -6px;
  border-radius: 100px;
  background: linear-gradient(135deg, #a100ff, #ff00dd);
  filter: blur(8px);
  z-index: 0;
  opacity: 1;
}

.profile-icon:hover img {
  transform: scale(1.15);
  cursor: pointer;
}

    .filter-button {
      margin: 100px 0 60px 40px;
      background-color: #ccc;
      padding: 8px 15px;
      border-radius: 6px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      font-weight: 600;
      transition: transform .3s ease, box-shadow .3s linear  ;
    }

    .filter-button:hover{
        transform: scale(1.1);
        box-shadow: 0 0 10px rgba(185, 0, 185)
    }

    .filter-button img {
      width: 18px;
      height: 18px;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
      gap: 50px;
      padding: 0 50px 30px 30px;
    }

    .card {
      background-color: purple;
      border-radius: 10px;
      min-height: 170px;
      min-width: 160px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      padding-top: 0;
      cursor: pointer;
      transition: all .3s ease-in-out;
    }

    .card:hover{
        transform: scale(1.15);
    }

    .card .title {
      width: 100%;
      text-align: center;
      font-weight: bold;
      color: white;
      padding: 10px 0;
      border-radius: 8px 8px 0 0;
    }

    .matematica .title {
      background-color: #2196f3;
    }

    .portugues .title {
      background-color: #e4261fe8;
    }

    .geografia .title {
      background-color: #25ff08de;
    }

    .historia .title {
      background-color: #915a08e8;
    }

    /* Espaço abaixo do header */
    .content {
      padding-top: 70px;
    }

    @media (max-width: 600px) {
      .grid-container {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
     <a href="index.php"> <img src="logo-teajudamos.png" alt="logo"> </a>
    </div>
    <div class="search-container">
      <input type="text" placeholder="BUSCAR MATÉRIAS">
      <button><img src="https://cdn-icons-png.flaticon.com/512/622/622669.png" alt="Buscar"></button>
    </div>
    <div class="profile-icon">
      <img src="https://cdn-icons-png.flaticon.com/512/1144/1144760.png" alt="Perfil" >
    </div>
  </header>

  <div class="content">
    <div class="filter-button">
      <img src="https://cdn-icons-png.flaticon.com/512/565/565722.png" alt="Filtro">
      FILTRAR
    </div>

    <div class="grid-container">

    <div class="card matematica">
        <div class="title">Matemática</div>
      </div>
      <div class="card matematica">
        <div class="title">Matemática</div>
      </div>
      <div class="card matematica">
        <div class="title">Matemática</div>
      </div>
      <div class="card matematica">
        <div class="title">Matemática</div>
      </div>
    
      <div class="card portugues">
        <div class="title">Português</div>
      </div>
      <div class="card portugues">
        <div class="title">Português</div>
      </div>
      <div class="card portugues">
        <div class="title">Português</div>
      </div>
      <div class="card portugues">
        <div class="title">Português</div>
      </div>
   
    
    </div>
  </div>
</body>
</html>
