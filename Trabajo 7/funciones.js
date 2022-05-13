function sol() {
  fetch ('https://randomuser.me/api')
  .then (res => res.json())
  .then (data => {
    document.getElementById(`user`).innerHTML =
    `<p>Nombre: ${data.results[0].name.first}</p>
    <p>Apellido: ${data.results[0].name.last}</p>
    <p>Sexo: ${data.results[0].gender}</p>
    <p>Edad: ${data.results[0].dob.age}</p>
    <p>Email: ${data.results[0].email}</p>
    <p>Foto: ${data.results[0].picture.large}</p>`
  })
}
//corregir foto