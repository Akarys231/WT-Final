<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="Image/png" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Programming Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    body {
        background-color: #E3E7E8;
        font-family: system-ui;
    }

    .container {
        width: 1000px;
        margin: auto;
        transition: 0.5s;
    }

    header {
        display: grid;
        grid-template-columns: 1fr 50px;
        margin-top: 50px;
    }

    header .shopping {
        position: relative;
        text-align: right;
    }

    header .shopping img {
        width: 40px;
    }

    header .shopping span {
        background: red;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        position: absolute;
        top: -5px;
        left: 80%;
        padding: 3px 10px;
    }

    .list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 20px;
        row-gap: 20px;
        margin-top: 50px;
    }

    .list .item {
        text-align: center;
        background-color: #DCE0E1;
        padding: 20px;
        box-shadow: 0 50px 50px #757676;
        letter-spacing: 1px;
    }

    .list .item img {
        width: 90%;
        height: 430px;
        object-fit: cover;
    }

    .list .item .title {
        font-weight: 600;
    }

    .list .item .price {
        margin: 10px;
    }

    .list .item button {
        background-color: #1C1F25;
        color: #fff;
        width: 100%;
        padding: 10px;
    }

    .card {
        position: fixed;
        top: 0;
        left: 100%;
        width: 500px;
        background-color: #453E3B;
        height: 100vh;
        transition: 0.5s;
    }

    .active .card {
        left: calc(100% - 500px);
    }

    .active .container {
        transform: translateX(-200px);
    }

    .card h1 {
        color: #E8BC0E;
        font-weight: 100;
        margin: 0;
        padding: 0 20px;
        height: 80px;
        display: flex;
        align-items: center;
    }

    .card .checkOut {
        position: absolute;
        bottom: 0;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);

    }

    .card .checkOut div {
        background-color: #E8BC0E;
        width: 100%;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        cursor: pointer;
    }

    .card .checkOut div:nth-child(2) {
        background-color: #1C1F25;
        color: #fff;
    }

    .listCard li {
        display: grid;
        grid-template-columns: 100px repeat(3, 1fr);
        color: #fff;
        row-gap: 10px;
    }

    .listCard li div {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .listCard li img {
        width: 90%;
    }

    .listCard li button {
        background-color: #fff5;
        border: none;
    }

    .listCard .count {
        margin: 0 10px;
    }
</style>

<body style="font-family: 'Century Gothic', sans-serif;" class="color-change">
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="page-home.php"><img src="logologo.png" width="25" height="25" class="me-2">Programming Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="page-home.php" style="border-radius: 10px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-courses.php" style="border-radius: 10px;">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-teachers.php" style="border-radius: 10px;">Teachers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>      
<div class="container">
        <header class="mt-5 d-flex justify-content-between">
            <h1>Available Course</h1>
            <div class="shopping">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <span class="quantity">0</span>
            </div>
        </header>
        <div class="list">
</div>
    
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    

   
    <script>
        let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', () => {
  body.classList.add('active');
});
closeShopping.addEventListener('click', () => {
  body.classList.remove('active');
});

let products = [
  {
    id: 1,
    name: 'Web development for beginners',
    image: './images/web.jpg',
    price: 120000
  },
  {
    id: 2,
    name: 'Basics of programming and algorithmization in C++',
    image: './images/c++.jpg',
    price: 120000
  },
  {
    id: 3,
    name: 'Python developer',
    image: './images/python.jpg',
    price: 220000
  },
  {
    id: 4,
    name: 'Learn programming by creating games on Unity',
    image: './images/c++.jpg',
    price: 123000
  },
  {
    id: 5,
    name: 'Databases for beginners | SQL',
    image: './images/sql.jpg',
    price: 320000
  },
];
let listCards = [];

function initApp() {
  products.forEach((value, key) => {
    let newDiv = document.createElement('div');
    newDiv.classList.add('item', 'col-12');
    newDiv.innerHTML = `
      <img src="${value.image}">
      <div class="title">${value.name}</div>
      <div class="price">${value.price.toLocaleString()}</div>
      <button onclick="addToCard(${key})">Add To Card</button>`;
    list.appendChild(newDiv);
  });
}

initApp();

function addToCard(key) {
  if (listCards[key] == null) {

    listCards[key] = JSON.parse(JSON.stringify(products[key]));
    listCards[key].quantity = 1;
  }
  reloadCard();
}

function reloadCard() {
  listCard.innerHTML = '';
  let count = 0;
  let totalPrice = 0;
  listCards.forEach((value, key) => {
    totalPrice = totalPrice + value.price;
    count = count + value.quantity;
    if (value != null) {
      let newDiv = document.createElement('li');
      newDiv.innerHTML = `
        <div><img src="${value.image}"/></div>
        <div>${value.name}</div>
        <div>${value.price.toLocaleString()}</div>
        <div>
          <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
          <div class="count">${value.quantity}</div>
          <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
        </div>`;
      listCard.appendChild(newDiv);
    }
  });
  total.innerText = totalPrice.toLocaleString();
  quantity.innerText = count;
}

function changeQuantity(key, quantity) {
  if (quantity == 0) {
    delete listCards[key];
  } else {
    listCards[key].quantity = quantity;
    listCards[key].price = quantity * products[key].price;
  }
  reloadCard();
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
