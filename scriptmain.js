
fetch('pedir.php')
.then(res => res.json())
.then(data => {



    //console.log(data);
    let info = '';
    data.map(item => {
        info += `
            <div  class="card" style="width: 18rem;">
        <img id="info" src="${item.img_link}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">${item.nombre}</h5>
          <p class="card-text">${item.clasificacion}</p>
          <p class="card-text price">${item.precio}</p>
          <a href="/templates/carrito.html" class="btn btn-primary">Añadir al carro</a>
        </div>
    </div>
        `
    });

    document.getElementById('aa').innerHTML = info;
});
