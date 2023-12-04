<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tienda</title>
    <link rel="stylesheet" href="styletemplate.css">
    <style>
        body {
          margin: 0;
          padding: 0;
          font-family: 'Arial', sans-serif;
        }
    
        .contenido {
          padding: 20px;
          color: #fff;
        }
      </style>
</head>

<body style="background-image: url('/static/play4.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    
    <header>
            <div class="menu">
                <div><img src="static/icons8-videogame-64.png"></div>
                <div><a href="">Tienda</a></div> 
                <div><a href="">Productos</a></div> 
                <div><a href="">Oferta</a></div>  
                <div><a href="">Manager</a></div>
                <div><img src = "static/icons8-carrito-de-compras-48.png"></div>
            </div>
    </header>
<link rel="stylesheet" href="stylemain.css">
<div class="container">
  <div id="info2" class="information none">
    <p>Explora un mundo abierto en una ciudad ficticia, participa en misiones y sumérgete en una historia criminal llena de acción.</p>
    <a href="#" class="btn btn-primary">Añadir al carro</a>
    <a href="#" id="close" class="btn btn-danger">Cerrar a scas</a>
  </div>

    <div  class="card" style="width: 18rem;">
        <img id="info" src="descarga.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Grand Theft Auto VI</h5>
          <p class="card-text"> Explora un mundo abierto en una ciudad ficticia, participa en misiones y sumérgete en una historia criminal llena de acción.</p>
          <p class="card-text price">$ 100.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>
    <div  class="card" style="width: 18rem;">
        <img id="info" src="crash.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Crash Bandicoot</h5>
          <p class="card-text">Únete a Crash Bandicoot en emocionantes aventuras de plataformas con desafiantes niveles y personajes encantadores</p>
          <p class="card-text price">$ 100.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img id="info" src="diesel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Assasins Creed Sindicate</h5>
          <p class="card-text">Encarna a asesinos a lo largo de la historia, realizando misiones sigilosas en mundos expansivos y reviviendo momentos históricos.</p>
          <p class="card-text price">$ 80.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img id="info" src="FC24_800X450.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Fifa 2024</h5>
          <p class="card-text">La última entrega de la serie de simulación de fútbol con gráficos realistas y modos innovadores que ofrecen una experiencia auténtica.</p>
          <p class="card-text price">$ 120.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img id = "info" src="pes.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pes 2020</h5>
          <p class="card-text">Experimenta el realismo del fútbol con jugabilidad fluida, gráficos impresionantes y un enfoque en la precisión táctica.</p>
          <p class="card-text price">$ 40.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="keyart.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Just Dance 2023</h5>
          <p class="card-text">Baila al ritmo de éxitos recientes con amigos y familiares en este juego de baile divertido.</p>
          <p class="card-text price">$ 90.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="farcry.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Farcry 6</h5>
          <p class="card-text">Sumérgete en un mundo de revolución y caos en una isla ficticia, luchando contra un dictador opresivo.</p>
          <p class="card-text price">$ 150.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="sonic.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Team Sonic Racing</h5>
          <p class="card-text">Únete a Sonic y amigos en emocionantes carreras de karts, con modos cooperativos y competitivos.</p>
          <p class="card-text price">$ 75.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="nba.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">NBA 2k24</h5>
          <p class="card-text">Vive la emoción del baloncesto con gráficos impresionantes y jugabilidad realista en la cancha de la NBA.</p>
          <p class="card-text price">$ 100.00</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>
</div>
<script>
    let info = document.getElementById("info");
    let info2 = document.getElementById("info2");
    let close = document.getElementById("close");

    info.addEventListener("click", function () {
        info2.classList.toggle("none");
    });

    close.addEventListener("click", function () {
        info2.classList.toggle("none");
    });
</script>
<footer>
  <p> Copyright tienda 2023</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>