const libro1 ={
    id: 1,
    autor: "J.K. Rowling",
    titulo: "Harry Potter",
    stock: 20,
    valor: 80,
    editorial: "Bloomsbury Salamandra Scholastic"
};
const libro2 ={
    id: 2,
    autor: "J.R.R. Tolkien",
    titulo: "El Señor de los Anillos",
    stock: 14,
    valor: 120,
    editorial: "George Allen & Unwin HarperCollins"
};
const libro3 ={
    id: 3,
    autor: "Anna Frank",
    titulo: "El diario de Anna Frank",
    stock: 4,
    valor: 140,
    editorial: "Contact"
};
const libro4 ={
    id: 4,
    autor: "Miguel de Cervantes Saavedra",
    titulo: "El Ingenioso Hidalgo Don Quijote De La Mancha",
    stock: 8,
    valor: 90,
    editorial: "La Flor"
};
const libro5 ={
    id: 5,
    autor:"José Hernández",
    titulo: "Martín Fierro",
    stock: 5,
    valor: 100,
    editorial: "La Flor"
};
let libros =[
    libro1,
    libro2,
    libro3,
    libro4,
    libro5
];

function buscar() {
    let id = document.getElementById('id').value;
    let res = document.getElementById('res');
    let existe = false;
    let color = String;
    let caja = "padding:15px; margin-inline:180px";
    const bajo = 5;                 //valor bajo para stock
    const piso = 100;               //precio minimo para descuento
    const editorial = "La Flor"     //editorial disponible para descuento

    libros.forEach(element => {
        if (element.id == id) {
            existe = true;

        if (element.stock <= bajo) {
            color = "red";
        }
        if (element.stock > bajo) {
            color = "green";
        }

        let descuento = 1;
        if (element.valor >= piso) {
            descuento = descuento - 0.2;
        }
        if (element.editorial == editorial) {
            descuento = descuento - 0.05;
        }

        res.innerHTML =
        `<div style=${caja};">
        <p>Autor: ${element.autor}<br>
        Titulo: ${element.titulo}</p><br>
        <div style="background-color:${color}; ${caja};">
        Stock: ${element.stock}</div><br>
        <p>Valor: ${element.valor}<br>
        Valor final: ${element.valor * descuento}</p></div>`;
        } else {
        if (!existe) {
        res.innerHTML =
        `<p>No existe un libro con este ID</p>`;
        }
        }
    })
};

function reset() {
    document.getElementById('res').innerHTML =
    ``;
};

//mostrar si existe, autor, titulo, stock y valor
//si stock <= 5 mostrar en rojo, sino verde
//si valor >= 100 +20% de descuento
//si editorial = "la flor" +5% de descuento