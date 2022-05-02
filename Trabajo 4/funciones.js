function ordenar() {
    let miArray = [99, 4, 43, 93, 1]
    miArray.sort()
    console.log(miArray)
}

function mayores() {
    let miArray = [99, 4, 43, 93, 1]
    let mayores = []
    miArray.forEach(Element => {
        if (Element > 50) {
            mayores.push(Element)
        }
    });
    console.log(mayores)
}

function pares() {
    let miArray = [99, 4, 43, 93, 1]
    let pares = []
    miArray.forEach(Element => {
        if(Element % 2 == 0) {
            pares.push(Element)
        }
    });
    console.log(pares);
}