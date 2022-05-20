function sol() {
  fetch ('https://randomuser.me/api')
  .then (res => res.json())
  .then (data => {
    if (data.results[0].gender == "female" && data.results[0].dob.age > 20 && data.results[0].dob.age < 40) {
      document.getElementById(`user`).innerHTML =
      `<p>Nombre: ${data.results[0].name.first}</p>
      <p>Apellido: ${data.results[0].name.last}</p>
      <p>Sexo: ${data.results[0].gender}</p>
      <p>Edad: ${data.results[0].dob.age}</p>
      <p>Email: ${data.results[0].email}</p>
      <p>Foto: <img src="${data.results[0].picture.large}"></p>
      <p>Latitud: ${data.results[0].location.coordinates.latitude}</p>
      <p>Longitud: ${data.results[0].location.coordinates.longitude}</p>`
      var map = L.map('map').setView([data.results[0].location.coordinates.latitude, data.results[0].location.coordinates.longitude], 13);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18
      }).addTo(map);
      var marker = L.marker([data.results[0].location.coordinates.latitude, data.results[0].location.coordinates.longitude]).addTo(map);
    } else {
      document.getElementById(`user`).innerHTML =
      `No existe el usuario`
    }
  })
}

