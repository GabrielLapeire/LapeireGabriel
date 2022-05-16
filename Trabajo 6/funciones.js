let superHeroes = {
        "squadName": "Super hero squad",
        "homeTown": "Metro City",
        "formed": 2016,
        "secretBase": "Super tower",
        "active": true,
        "members": [
          {
            "name": "Capitan America",
            "age": 29,
            "secretIdentity": "Dan Jukes",
            "powers": [
              "Radiation resistance",
              "Turning tiny",
              "Radiation blast"
            ]
          },
          {
            "name": "Iron Man",
            "age": 39,
            "secretIdentity": "Jane Wilson",
            "powers": [
              "Million tonne punch",
              "Damage resistance",
              "Superhuman reflexes"
            ]
          },
          {
            "name": "Sub Zero",
            "age": 1000000,
            "secretIdentity": "Unknown",
            "powers": [
              "Immortality",
              "Heat Immunity",
              "Inferno",
              "Teleportation",
              "Interdimensional travel"
            ]
          }
        ]
}

//console.log(superHeroes.members[2].powers[2])
//for (let i = 0; i < superHeroes.members.length; i++) {
//    let j = i
//    for (let i = 0; i < superHeroes.members[j].powers.length; i++) {
//        if (superHeroes.members[j].age > 35) {
//            console.log(superHeroes.members[j].powers[i])
//        }
//    }
//}

//function old() {
//    for (let i = 0; i < superHeroes.members.length; i++) {
//      if (superHeroes.members[i].age > 100) {
//        document.getElementById(`sh`).innerHTML = `Nombre: ${superHeroes.members[i].name}`
//      }
//    }
//}

function info() {
  document.getElementById(`div1`).innerHTML =
  `<h3>Nombre del equipo: ${superHeroes.squadName}</h3>
  <h3>Fecha de fundación: ${superHeroes.formed}</h3>
  <h3>Localización: ${superHeroes.homeTown}, ${superHeroes.secretBase}</h3>
  <h3>Miembros: </h3>`
  document.getElementById(`div2`).innerHTML =
  `<table border="2">
    <tr>
      <td>Nombre</td>
      <td>${superHeroes.members[0].name}</td>
    </tr>
    <tr>
      <td>Edad</td>
      <td>${superHeroes.members[0].age}</td>
    </tr>
    <tr>
      <td>Identidad secreta</td>
      <td>${superHeroes.members[0].secretIdentity}</td>
    </tr>
    <tr>
      <td>Poderes</td>
      <td>${superHeroes.members[0].powers}</td>
    </tr>
  </table>
  <table border="2">
    <tr>
      <td>Nombre</td>
      <td>${superHeroes.members[1].name}</td>
    </tr>
    <tr>
      <td>Edad</td>
      <td>${superHeroes.members[1].age}</td>
    </tr>
    <tr>
      <td>Identidad secreta</td>
      <td>${superHeroes.members[1].secretIdentity}</td>
    </tr>
    <tr>
      <td>Poderes</td>
      <td>${superHeroes.members[1].powers}</td>
    </tr>
  </table>
  <table border="2">
    <tr>
      <td>Nombre</td>
      <td>${superHeroes.members[2].name}</td>
    </tr>
    <tr>
      <td>Edad</td>
      <td>${superHeroes.members[2].age}</td>
    </tr>
    <tr>
      <td>Identidad secreta</td>
      <td>${superHeroes.members[2].secretIdentity}</td>
    </tr>
    <tr>
      <td>Poderes</td>
      <td>${superHeroes.members[2].powers}</td>
    </tr>
  </table>`
}

function clearHeroes() {
  document.getElementById(`div1`).innerHTML =
  `<h3>Nombre del equipo: </h3>
  <h3>Fecha de fundación: </h3>
  <h3>Localización: </h3>
  <h3>Miembros: </h3>`
  document.getElementById(`div2`).innerHTML =
  ``
}