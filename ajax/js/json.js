let nombre = 'Carlos';
let edad = 23;
let pais = "Mexico";

console.log(nombre + " " + edad + " " + pais);


let carlos = {
    "nombre": "Carlos Arturo",
    "edad": 23,
    "pais": "Mexico"
}; //objeto carlos

let alejandro = {
    "nombre": "Alejandro",
    "edad": 25,
    "pais": "España"
}; //objeto alejandro

console.log(carlos.nombre)
console.log(alejandro.pais)


let nombreAmigos = ["Arturo", "Manuel"]; //arreglo

console.log(nombreAmigos[0]);


let jsonAlejandro = ["Alejandro", {
    "nombre": "Alejandro",
    "edad": 25,
    "pais": "España",
    "booleano": true,
    "saludar": ()=>{console.log("Hola, soy alejandro")}
}];

//ejemplos JSON (arreglo con objetos dentro)

let arregloPersonas = [
    {
        "nombre": "Alejandro",
        "edad": 25,
        "pais": "España"
    },
    {
        "nombre": "Raul",
        "edad": 28,
        "pais": "Argentina"
    },
    {
        "nombre": "Miguel",
        "edad": 15,
        "pais": "Chile"
    },
    {
        "nombre": "Salem",
        "edad": 86,
        "pais": "EEUU"
    }
];// El ultimo objeto termina sin "," o da error

console.log(arregloPersonas[0].nombre);