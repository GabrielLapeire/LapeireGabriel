const socio1 ={
    apellido: "Parra",
    nombre: "Javier",
    edad: 41,
    facturas: 1,
    dni: 28358603
};
const socio2 ={
    apellido: "Lapeire",
    nombre: "Gabriel",
    edad: 20,
    facturas: 5,
    dni: 44164066
};
const socio3 ={
    apellido: "Puccio",
    nombre: "Soledad",
    edad: 35,
    facturas: 3,
    dni: 32324455
};
const socio4 ={
    apellido: "Otero",
    nombre: "Blanca",
    edad: 90,
    facturas: 20,
    dni: 22583630
};
const socio5 ={
    apellido: "Gonzales",
    nombre: "Jose",
    edad: 23,
    facturas: 7,
    dni: 36853306
};
let socios =[
    socio1,
    socio2,
    socio3,
    socio4,
    socio5
];

function buscar() {
    let dni = document.getElementById('dni').value
    let res = document.getElementById('res')
    let aux = false;
    socios.forEach(element => {
        if (element.dni == dni) {
            aux = true;
            if (element.facturas < 4) {
            res.innerHTML =
        `<p style="background-color: green">Nombre: ${element.nombre}<br>Facturas: ${element.facturas}</p>`
        }
        if (element.facturas > 3 && element.facturas < 7) {
            res.innerHTML =
        `<p style="background-color: yellow">Nombre: ${element.nombre}<br>Facturas: ${element.facturas}</p>`
        }
        if (element.facturas > 6) {
            res.innerHTML =
        `<p style="background-color: red">Nombre: ${element.nombre}<br> Facturas: ${element.facturas}</p>`
        }
        } else {
        if (!aux) {
        res.innerHTML =
        `<p style="background-color: red">No existe un socio con este DNI</p>`
        }
        }
    })
};

function reset() {
    document.getElementById('res').innerHTML =
    ``
};

//se necesita buscar por dni si el socio existe, en caso de no existir mostrar en rojo "no existe"
//si existe, evaluar lo siguiente:
//si tiene no mas de 3 facturas mostrar en verde, entre 4 y 6 amarillo, mas de 6 rojo
//en todos los casos nombre y cantidad de facturas