let btn = document.getElementById("btn_cargar_usuarios"); //trae al boton cargar usuarios que activa la cascada de eventos
let loader = document.getElementById("loader"); // ruedita que aparece mientras carga la informacion

btn.addEventListener("click", function () {
  let peticion = new XMLHttpRequest(); //hacemos una nuevainstancia del objeto http para trabajar con peticiones

  // peticion.open("GET", "https://api.npoint.io/302c0f922cda56388428"); // para trabajar con peticiones. dentro del () coloco POST o GET y la direccion del archivo al que queremos acceder (en esta caso es la direccion del archivo json que creamos online, pero podria ser un archivo php que me traiga el json del servidor)

  peticion.open("GET", "php/leer-datos.php");

  loader.classList.add("active"); // esto hace que cuando hago click en "cargar usuarios", el loader adquiere la clase active y se muestra en pantalla

  peticion.onload = function () {
    //la peticion siempre nos devuelve un TEXTO. aunque externamente se vea como un json. con la funcion JSON.parse, convierto ese texto en un archivo json como tal

    let datos = JSON.parse(peticion.responseText);

    // datos.forEach((persona) => {
    //   let elemento = document.createElement("tr"); //para crear una fila de tabla "tr" en html
    //   elemento.innerHTML += "<td>" + persona.id + "</td>"; //creo el elemento id de la persona con su fila pero no lo coloco aun
    //   elemento.innerHTML += "<td>" + persona.nombre + "</td>";
    //   elemento.innerHTML += "<td>" + persona.edad + "</td>";
    //   elemento.innerHTML += "<td>" + persona.pais + "</td>";
    //   elemento.innerHTML += "<td>" + persona.correo + "</td>";
    //   document.getElementById("tabla").appendChild(elemento); //tomo la tabla y le agrego el elemento
    // });

    for (let i = 0; i < datos.length; i++) {
      let elemento = document.createElement("tr"); //para crear una fila de tabla "tr" en html
      elemento.innerHTML += "<td>" + datos[i].id + "</td>"; //creo el elemento id de la persona con su fila pero no lo coloco aun
      elemento.innerHTML += "<td>" + datos[i].nombre + "</td>";
      elemento.innerHTML += "<td>" + datos[i].edad + "</td>";
      elemento.innerHTML += "<td>" + datos[i].pais + "</td>";
      elemento.innerHTML += "<td>" + datos[i].correo + "</td>";
      document.getElementById("tabla").appendChild(elemento); //tomo la tabla y le agrego el elemento
    }
  }; //nos permite ejecutar una funcion cuando la peticion ya cargo

  peticion.onreadystatechange = function () {
    if (peticion.readyState == 4 && peticion.status == 200) {
      loader.classList.remove("active"); // remuevo la clase active cuando la peticion esta lista, cosa de que se elimine la rueda de carga
    }
  }; //nos permite ejecutar una funcion cada vez que el estado de la peticion cambie - envio / recibo la peticion -. Con el readyState 4 me dice que la peticion se mando o recibio bien 2 = peticion recibida, 3 = peticion procesandose, 4 = peticion finalizada con respuesta lista. El status marca si esta correcto o con problema : 404 falta la pagina, 200 todo correcto

  peticion.send(); //envia la peticion para que funcione lo antes escrito
});
