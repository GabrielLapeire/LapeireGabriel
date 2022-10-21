function sol() {
    id = document.getElementById('id_pj').value
    fetch (`https://rickandmortyapi.com/api/character/${id}`)
    .then (res => res.json())
    .then (res => {
        document.getElementById(`res`).innerHTML =
        `<p>Nombre: ${res.name}</p>
        <p>Estado: ${res.status}</p>
        <p>Especie: ${res.species}</p>
        <p>Tipo: ${res.type}</p>
        <p>Genero: ${res.gender}</p>
        <p>Origen: ${res.origin.name}</p>
        <p>Ubicación: ${res.location.name}</p>
        <p>Imagen: <img src="${res.image}"></p>`
        `<input type="hidden" name="nombre">
        <input type="hidden" name="estado">
        <input type="hidden" name="especie">`
    })
}

function limpiar() {
    document.getElementById(`res`).innerHTML =
    ``
}