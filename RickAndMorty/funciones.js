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
        <p>Ubicacion: ${res.location.name}</p>
        <p>Imagen: <img src="${res.image}"></p><br>
        <form name="form" method="post" action="conexion.php">
            <input type="hidden" name="id" value="${id}">
            <input type="hidden" name="nombre" value="${res.name}">
            <input type="hidden" name="estado" value="${res.status}">
            <input type="hidden" name="especie" value="${res.species}">
            <input type="hidden" name="tipo" value="${res.type}">
            <input type="hidden" name="genero" value="${res.gender}">
            <input type="hidden" name="origen" value="${res.origin.name}">
            <input type="hidden" name="ubicacion" value="${res.location.name}">
            <input type="hidden" name="imagen" value="${res.image}"><br>
            <input type="submit" value="Guardar">
        </form>`
    })
}

function limpiar() {
    document.getElementById(`res`).innerHTML =
    ``
}