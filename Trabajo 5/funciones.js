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
    mayores: function () {
        let mayores = "";
        if (persona1.edad >= 18) {
            mayores += (persona1.nombreCompleto()) + "; ";
        }
        if (persona2.edad >= 18) {
            mayores += (persona2.nombreCompleto()) + "; ";
        }
        if (persona3.edad >= 18) {
            mayores += (persona3.nombreCompleto()) + "; ";
        }
        return mayores;
    }
}
console.log(`Las personas mayores de edad son: `, mostrarPersona.mayores())