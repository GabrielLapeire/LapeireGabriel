<?php
$id = $_POST['pj'];
echo $id."<br>";

?>

<script>
function sol() {
    fetch ('https://rickandmortyapi.com/api')
    .then (res => res.json())
    .then (data => {
        document.getElementById(`user`).innerHTML =
        `<p>Nombre: ${data.results[0].name}</p>
        <p>Estado: ${data.results[0]}</p>
        <p>Especie: ${data.results[0]}</p>
        <p>Tipo: ${data.results[0]}</p>
        <p>Genero: ${data.results[0].email}</p>
        <p>Origen: <img src="${data.results[0].picture.large}"></p>
        <p>Ubicación: ${data.results[0].location.coordinates.latitude}</p>
        <p>Imagen: ${data.results[0].location.coordinates.longitude}</p>`
    })
}

//rickandmortyapi.com
//segun se pida mostrar datos de un personaje
//permitir guardar los datos en una base de datos
</script>