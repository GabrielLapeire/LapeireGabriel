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

function old() {
    for (let i = 0; i < superHeroes.members.length; i++) {
      if (superHeroes.members[i].age > 100) {
        document.getElementById(`sh`).innerHTML = `Nombre: ${superHeroes.members[i].name}`
      }
    }
}

function clearHeroes() {
  document.getElementById(`sh`).innerHTML = `Nombre: `
}
//mostrar nombre, fecha de fundacion y ubicacion del escuadron y en 3 tablas los datos de 3 heroes