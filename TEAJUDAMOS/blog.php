


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>TEAJUDAMOS</title>
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
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    header {
    background-color: purple;
    width: 100%;
    padding: 10px 30px;
    border-radius: 4.3px;
    display: flex;
    align-items: center;
    justify-content: space-between; 
    z-index: 1;
    height: 80px;
    position: fixed;
}

    .logo img{
        margin-top: 15px;
        width: 250px;
        height: auto;
        object-fit: cover;
        cursor: pointer;
    }

    nav {
  display: flex;
  gap: 5px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

/* From Uiverse.io by gharsh11032000 */ 
.menu {
  font-size: 16px;
  line-height: 1.6;
  color: white;
  width: fit-content;
  display: flex;
  background-color: rgb(76, 0, 76);
  width: 80%;
  list-style: none;
  font-weight: 600;
}

.menu a {
  text-decoration: none;
  color: white;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

.menu .link {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 10px 36px;
  border-radius: 16px;
  overflow: hidden;
  transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.menu .link::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 85%;
  height: 80%;
  background-color: purple;
  z-index: -1;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.menu .link svg {
  width: 14px;
  height: 14px;
  margin-right: -10px;
  fill: white;
  transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.menu .item {
  position: relative;
}

.menu .item .submenu {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: absolute;
  top: 100%;
  border-radius: 0 0 16px 16px;
  left: 0;
  width: 100%;
  overflow: hidden;
  border: 1px solid #cccccc;
  opacity: 0;
  visibility: hidden;
  transform: translateY(-12px);
  transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
  z-index: 1;
  pointer-events: none;
  list-style: none;
  background-color: purple;
}

.menu .item:hover .submenu {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  pointer-events: auto;
  border-top: transparent;
  border-color: purple;
  filter: brightness(1.2);
}

.menu .item:hover .link {
  color: #ffffff;
  border-radius: 16px 16px 0 0;
}

.menu .item:hover .link::after {
  transform: scaleX(1);
  transform-origin: right;
}

.menu .item:hover .link svg {
  fill: #ffffff;
  transform: rotate(-180deg);
}

.submenu .submenu-item {
  width: 100%;
  transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.submenu .submenu-link {
  display: block;
  padding: 12px 24px;
  width: 100%;
  position: relative;
  text-align: center;
  transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.submenu .submenu-item:last-child .submenu-link {
  border-bottom: none;
}

.submenu .submenu-link::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  transform: scaleX(0);
  width: 100%;
  height: 100%;
  background-color: purple;
  filter: brightness(1.2);
  z-index: -1;
  transform-origin: left;
  transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.submenu .submenu-link:hover:before {
  transform: scaleX(1);
  transform-origin: right;
}

.submenu .submenu-link:hover {
  color: #ffffff;
}


/* From Uiverse.io by reglobby */ 
.user-profile {
  width: 131px;
  height: 51px;
  border-radius: 15px;
  cursor: pointer;
  transition: 0.3s ease;
  background-color: rgb(76,0, 76);
  display: flex;
  align-items: center;
  justify-content: center;
}

.user-profile:hover,
.user-profile:focus {
  background-color: rgba(185, 0, 185);
  box-shadow: 0 0 10px rgba(185, 0, 185);
  outline: none;
}

.user-profile-inner {
  width: 127px;
  height: 47px;
  border-radius: 13px;
  background-color: rgb(76,0, 76);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  color: #fff;
  font-weight: 600;
}

.user-profile-inner svg {
  width: 27px;
  height: 27px;
  fill: #fff;
}


main {
      position: relative;
      width: 100%;
      height: 100%;
      margin-top: 30px;
    }

    .puzzle {
      width: 85px;
      position: absolute;
    }

    .top-left {
      top: 75px;
      left: 105px;
      transform: rotate(215deg); 

    }

    .top-right {
      top: 75px;
      right: 105px;
      transform: rotate(345deg); 
    }

    .bottom-left {
      bottom: 30px;
      left: 5px;
      transform: rotate(155deg); 
    }

    .mid-right{
      top: 300px;
      right: 190px;
    }

    .mid-left{
      top: 240px;
      left: 170px;
      transform: rotate(205deg); 
    }

    .bottom-right {
      transform: rotate(45deg); 
      bottom: 30px;
      right: 25px;
    }

    .noticia1{
        background-color: #800080 ;
        display: absolute;
        width: 290px;
        height: 300px;
        margin-top: 20vh;
        margin-left: 480px;
        font-size: 30px;
        color: white;
        border-radius: 10px;
        transition: transform .3s ease-in-out;
        cursor: pointer;
    }

    .noticia1:hover{
        transform: scale(1.1)
    }

    .noticia2{
        background-color: #800080 ;
        display: absolute;
        width: 290px;
        height: 300px;
        margin-top: 50px;
        margin-left: 480px;
        font-size: 30px;
        color: white;
        border-radius: 10px;
        transition: transform .3s ease-in-out;
        cursor: pointer;
    }

    .noticia2:hover{
        transform: scale(1.1)
    }

    .noticia_grande{
        background-color: #800080 ;
        display: absolute;
        margin-top: -615px;
        width: 380px;
        height: 550px;
        margin-left: 1000px;
        font-size: 30px;
        color: white;
        border-radius: 10px;
        transition: transform .3s ease-in-out;
        cursor: pointer;
    }

    .noticia_grande:hover{
        transform: scale(1.1);
    }

    .chat {
  position: fixed;
  bottom: 30px;
  right: 70px;
  z-index: 1000;
}

.background {
  background-color: purple;
  border-radius: 50%;
  box-shadow: 0 2.1px 1.3px rgba(0, 0, 0, 0.044),
    0 5.9px 4.2px rgba(0, 0, 0, 0.054), 0 12.6px 9.5px rgba(0, 0, 0, 0.061),
    0 25px 20px rgba(0, 0, 0, 0.1);
  height: 80px;
  left: 10px;
  position: absolute;
  top: 10px;
  width: 80px;
}

.chat:hover .background {
  transform: scale(1.1);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.9),
              0 8px 20px rgba(0, 0, 0, 0.8);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  filter: brightness(1.2);
    
}

.chat .background {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.chat-bubble {
  cursor: pointer;
  position: relative;
}

.bubble {
  transform-origin: 50%;
  transition: transform 500ms cubic-bezier(0.17, 0.61, 0.54, 0.9);
}

.line {
  fill: none;
  stroke: white;
  stroke-width: 2.75;
  stroke-linecap: round;
  transition: stroke-dashoffset 500ms cubic-bezier(0.4, 0, 0.2, 1);
}

.line1 {
  stroke-dasharray: 60 90;
  stroke-dashoffset: -20;
}

.line2 {
  stroke-dasharray: 67 87;
  stroke-dashoffset: -18;
}

.circle {
  fill: white;
  stroke: none;
  transform-origin: 50%;
  transition: transform 500ms cubic-bezier(0.4, 0, 0.2, 1);
}

.active .bubble {
  transform: translateX(24px) translateY(4px) rotate(45deg);
}

.active .line1 {
  stroke-dashoffset: 21;
}

.active .line2 {
  stroke-dashoffset: 30;
}

.active .circle {
  transform: scale(0);
}
</style>

</head>
<body>
  <header>
    <a href="index.php"> <div class="logo"><img src="logo-teajudamos.png" alt="logo"> </div> </a>
    <nav>
<!-- From Uiverse.io by gharsh11032000 --> 
<div class="menu">
  <div class="item">
    <a href="#" class="link">
      <span> Mais </span>
      <svg viewBox="0 0 360 360" xml:space="preserve">
        <g id="SVGRepo_iconCarrier">
          <path
            id="XMLID_225_"
            d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"
          ></path>
        </g>
      </svg>
    </a>
    <div class="submenu">
      <div class="submenu-item">
        <a href="#" class="submenu-link"> Sobre </a>
      </div>
      <div class="submenu-item">
        <a href="#" class="submenu-link"> Ajuda </a>
      </div>
      <div class="submenu-item">
        <a href="#" class="submenu-link"> Feedback </a>
      </div>
      <div class="submenu-item">
        <a href="#" class="submenu-link"> Contato </a>
      </div>
    </div>
  </div>
</div>

<div class="menu">
  <div class="item">
    <a href="#" class="link">
      <span> Notícias </span>
      <svg viewBox="0 0 360 360" xml:space="preserve">
        <g id="SVGRepo_iconCarrier">
          <path
            id="XMLID_225_"
            d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"
          ></path>
        </g>
      </svg>
    </a>
    <div class="submenu">
      <div class="submenu-item">
        <a href="#" class="submenu-link"> Mais Relevantes </a>
      </div>
      <div class="submenu-item">
        <a href="#" class="submenu-link"> Relevantes </a>
      </div>
      <div class="submenu-item">
        <a href="#" class="submenu-link"> Menos Relevantes </a>
      </div>
      
    </div>
  </div>
</div>

    </nav>
    
 <!-- From Uiverse.io by reglobby --> 

 <a href="login.php" style="text-decoration: none;">
<div
  aria-label="User Login Button"
  tabindex="0"
  role="button"
  class="user-profile"
>
  <div class="user-profile-inner">
    <svg
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
    >
      <g data-name="Layer 2" id="Layer_2">
        <path
          d="m15.626 11.769a6 6 0 1 0 -7.252 0 9.008 9.008 0 0 0 -5.374 8.231 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 9.008 9.008 0 0 0 -5.374-8.231zm-7.626-4.769a4 4 0 1 1 4 4 4 4 0 0 1 -4-4zm10 14h-12a1 1 0 0 1 -1-1 7 7 0 0 1 14 0 1 1 0 0 1 -1 1z"
        ></path>
      </g>
    </svg>
    <p>Entrar</p>
  </div>
</div>
</a>

  </header>



    <main>
    
    <img src="peca.png" class="puzzle top-left" alt="Ícone de quebra-cabeça" />
    <img src="peca.png" class="puzzle top-right" alt="Ícone de quebra-cabeça" />
    <img src="peca.png" class="puzzle bottom-left" alt="Ícone de quebra-cabeça" />
    <img src="peca.png" class="puzzle bottom-right" alt="Ícone de quebra-cabeça" />
    <img src="peca.png" class="puzzle mid-right" alt="Ícone de quebra-cabeça" />
    <img src="peca.png" class="puzzle mid-left" alt="Ícone de quebra-cabeça" />

    

    <div class="noticia1">Notícias relevantes </div>
    <div class="noticia2">Notícias relevantes</div>
    <div class="noticia_grande">Noticias Muito relevantes</div>


    
    <div class="chat">
      <div class="background"></div>
      <svg viewBox="0 0 100 100" height="100" width="100" class="chat-bubble">
        <g class="bubble">
          <path d="M 30.7873,85.113394 30.7873,46.556405 C 30.7873,41.101961
          36.826342,35.342 40.898074,35.342 H 59.113981 C 63.73287,35.342
          69.29995,40.103201 69.29995,46.784744" class="line line1"></path>
          <path d="M 13.461999,65.039335 H 58.028684 C
            63.483128,65.039335
            69.243089,59.000293 69.243089,54.928561 V 45.605853 C
            69.243089,40.986964 65.02087,35.419884 58.339327,35.419884" class="line line2"></path>
        </g>
        <circle cx="42.5" cy="50.7" r="1.9" class="circle circle1"></circle>
        <circle r="1.9" cy="50.7" cx="49.9" class="circle circle2"></circle>
        <circle cx="57.3" cy="50.7" r="1.9" class="circle circle3"></circle>
      </svg>
    </div>
    </main>

</body>
</html>

