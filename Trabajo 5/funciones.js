const persona1 = {
    nombre: `Raul`,
    apellido: `Martinez`,
    edad: 33,
    sexo: `M`,
    nombreCompleto: function () {
        return (this.nombre + `,` + this.apellido)
    }
}
const persona2 = {
    nombre: `Ana`,
    apellido: `Hernandez`,
    edad: 12,
    sexo: `F`,
    nombreCompleto: function () {
        return (this.nombre + `,` + this.apellido)
    }
}
const persona3 = {
    nombre: `Blanca`,
    apellido: `Gonzales`,
    edad: 94,
    sexo: `F`,
    nombreCompleto: function () {
        return (this.nombre + `,` + this.apellido)
    }
}
const mostrarPersona = {
}
console.log(persona1.nombreCompleto())
console.log(persona2.nombreCompleto())
console.log(persona3.nombreCompleto())
//mostrar mayores de 18 con una funcion en la constante mostrarPersona