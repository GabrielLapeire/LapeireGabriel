function sol() {
  fetch ('https://randomuser.me/api')
  .then (res => res.json())
  .then (data => {
    if (data.results[0].gender == "female" && data.results[0].dob.age > 20 &&
    data.results[0].dob.age < 40) {
      document.getElementById(`user`).innerHTML =
    `<p>Nombre: ${data.results[0].name.first}</p>
    <p>Apellido: ${data.results[0].name.last}</p>
    <p>Sexo: ${data.results[0].gender}</p>
    <p>Edad: ${data.results[0].dob.age}</p>
    <p>Email: ${data.results[0].email}</p>
    <p>Foto: <img src="${data.results[0].picture.large}"></p>
    <p>Latitud: ${data.results[0].location.coordinates.latitude}</p>
    <p>Longitud: ${data.results[0].location.coordinates.longitude}</p>`
    } else {
      document.getElementById(`user`).innerHTML =
      `No existe el usuario`
    }
  })
}

let map = L.map('map').setView([51.505, -0.09], 13);