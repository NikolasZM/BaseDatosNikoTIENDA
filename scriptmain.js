

fetch('pedir.php')
.then(res => res.json())
.then(data => {



    //console.log(data);
    let info = '';
    data.map(item => {
        info += `
        <div class="card" style="width: 18rem;">
          <img src="${item.img_link}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">${item.nombre}</h5>
            <p class="card-text">${item.clasificacion}</p>
            <p class="card-text price">${item.precio}</p>
            <button class="btn btn-primary addToCart" 
                    data-id="${item.id}" 
                    data-nombre="${item.nombre}" 
                    data-clasificacion="${item.clasificacion}" 
                    data-precio="${item.precio}"
                    data-img="${item.img_link}">Añadir al carro</button>
            </div>
        </div>`;
    });

    document.getElementById('aa').innerHTML = info;

    const addToCartButtons = document.querySelectorAll('.addToCart');
    addToCartButtons.forEach(button => {
      button.addEventListener('click', addToCartHandler);
    });
  });


function addToCartHandler(event) {
  event.preventDefault();


  const productId = event.target.getAttribute('data-id');
  const productName = event.target.getAttribute('data-nombre');
  const productClassification = event.target.getAttribute('data-clasificacion');
  const productPrice = event.target.getAttribute('data-precio');
  const productImage = event.target.getAttribute('data-img');


  sessionStorage.setItem('productId', productId);
  sessionStorage.setItem('productName', productName);
  sessionStorage.setItem('productClassification', productClassification);
  sessionStorage.setItem('productPrice', productPrice);
  sessionStorage.setItem('productImage', productImage);

  window.location.href = `carrito.html`;
}
