const grupoCasaPromedioJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "L": { "Estacionamientos": 4.0, "Recámaras": 4.0, "Baños": 3.0 },
    "S": { "Estacionamientos": 3.0, "Recámaras": 3.0, "Baños": 3.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 }
};
/**const grupoCasPromedioJson = require('C:\\xampp\\htdocs\\datalpine\\resources\\Ciudades\\Tulancingo\\assets\\tablas\\grupo_casa_promedio.json');*/
const grupoCasaMedianaJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "L": { "Estacionamientos": 5.0, "Recámaras": 4.0, "Baños": 3.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 }
};
const grupoPrecioMercadoJson = {
    "E": { "Mínimo": "$148,640.00", "Máximo": "$335,410,000.00", "Promedio": "$2,463,555.15", "Mediana": "$700,000.00" },
    "D": { "Mínimo": "$1,005,000.00", "Máximo": "$335,410,000.00", "Promedio": "$2,463,555.15", "Mediana": "$1,375,000.00" },
    "C": { "Mínimo": "$1,754,500.00", "Máximo": "$335,410,000.00", "Promedio": "$2,463,555.15", "Mediana": "$2,170,000.00" },
    "B": { "Mínimo": "$2,502,235.00", "Máximo": "$335,410,000.00", "Promedio": "$2,879,851.13", "Mediana": "$2,850,000.00" },
    "A": { "Mínimo": "$3,252,000.00", "Máximo": "$335,410,000.00", "Promedio": "$3,645,082.27", "Mediana": "$3,667,939.00" },
    "S": { "Mínimo": "$3,252,000.00", "Máximo": "$335,410,000.00", "Promedio": "$5,722,921.80", "Mediana": "$5,035,499.00" },
    "L": { "Mínimo": "$12,250,000.00", "Máximo": "$335,410,000.00", "Promedio": "$15,461,298.26", "Mediana": "$15,000,000.00" },
    "general": { "Mínimo": "$148,640.00", "Máximo": "$335,410,000.00", "Promedio": "$3,831,041.97", "Mediana": "$2,490,000.00" }
};
const grupoMetrosTerrenoJson = {
    "A": { "Mínimo": "50.00 m²", "Máximo": "22,715.00 m²", "Promedio": "273.29 m²", "Mediana": "140.00 m²" },
    "B": { "Mínimo": "43.00 m²", "Máximo": "26,964.00 m²", "Promedio": "272.16 m²", "Mediana": "124.00 m²" },
    "C": { "Mínimo": "28.00 m²", "Máximo": "19,124.00 m²", "Promedio": "276.67 m²", "Mediana": "102.00 m²" },
    "D": { "Mínimo": "33.00 m²", "Máximo": "12,289.00 m²", "Promedio": "156.45 m²", "Mediana": "97.00 m²" },
    "E": { "Mínimo": "30.00 m²", "Máximo": "220,000.00 m²", "Promedio": "333.05 m²", "Mediana": "150.00 m²" },
    "L": { "Mínimo": "80.00 m²", "Máximo": "9,288.00 m²", "Promedio": "837.64 m²", "Mediana": "682.00 m²" },
    "S": { "Mínimo": "34.00 m²", "Máximo": "7,500,000.00 m²", "Promedio": "2,442.58 m²", "Mediana": "220.00 m²" },
    "general": { "Mínimo": "28.00 m²", "Máximo": "7,500,000.00 m²", "Promedio": "904.43 m²", "Mediana": "149.00 m²" }
};
const grupoMetrosConstruidosJson = {
    "A": { "Mínimo": "60.00 m²", "Máximo": "17,468.00 m²", "Promedio": "287.29 m²", "Mediana": "200.00 m²" },
    "B": { "Mínimo": "58.00 m²", "Máximo": "14,583.00 m²", "Promedio": "257.83 m²", "Mediana": "146.00 m²" },
    "C": { "Mínimo": "28.00 m²", "Máximo": "40,642.00 m²", "Promedio": "303.60 m²", "Mediana": "119.00 m²" },
    "D": { "Mínimo": "33.00 m²", "Máximo": "12,289.00 m²", "Promedio": "160.57 m²", "Mediana": "101.50 m²" },
    "E": { "Mínimo": "30.00 m²", "Máximo": "220,000.00 m²", "Promedio": "321.13 m²", "Mediana": "180.00 m²" },
    "L": { "Mínimo": "120.00 m²", "Máximo": "9,288.00 m²", "Promedio": "649.59 m²", "Mediana": "566.00 m²" },
    "S": { "Mínimo": "69.00 m²", "Máximo": "7,500,000.00 m²", "Promedio": "3,236.60 m²", "Mediana": "300.00 m²" },
    "general": { "Mínimo": "28.00 m²", "Máximo": "7,500,000.00 m²", "Promedio": "904.43 m²", "Mediana": "149.00 m²" }
};
const grupoPrecioMetrosConstruidosJson = {
    "A": { "Mínimo": "$213.98", "Máximo": "$57,716.67", "Promedio": "$21,676.53", "Mediana": "$18,624.10" },
    "B": { "Mínimo": "$205.00", "Máximo": "$48,710.08", "Promedio": "$19,938.89", "Mediana": "$19,271.89" },
    "C": { "Mínimo": "$44.29", "Máximo": "$86,250.00", "Promedio": "$18,057.26", "Mediana": "$17,594.34" },
    "D": { "Mínimo": "$137.52", "Máximo": "$45,945.95", "Promedio": "$13,273.38", "Mediana": "$13,366.34" },
    "E": { "Mínimo": "$128.06", "Máximo": "$793,310.42", "Promedio": "$7,898.52", "Mediana": "$4,146.09" },
    "L": { "Mínimo": "$1,399.66", "Máximo": "$165,833.33", "Promedio": "$28,511.68", "Mediana": "$26,000.00" },
    "S": { "Mínimo": "$87.83", "Máximo": "$135,714.29", "Promedio": "$21,200.27", "Mediana": "$19,060.61" },
    "general": { "Mínimo": "$44.29", "Máximo": "$793,310.42", "Promedio": "$16,846.93", "Mediana": "$16,164.68" }
};



// Función para actualizar las tablas
function actualizarTablas(segmento) {
    // Obtener los datos 
    const datosPromedios = grupoCasaPromedioJson[segmento];
    const datosMediana = grupoCasaMedianaJson[segmento];
    const datosPrecios = grupoPrecioMercadoJson[segmento];
    const datosMetrosTerreno = grupoMetrosTerrenoJson[segmento];
    const datosMetrosConstruidos = grupoMetrosConstruidosJson[segmento];
    const datosPrecioMetrosConstruidos = grupoPrecioMetrosConstruidosJson[segmento];
    
    // Actualizar tabla 
    document.getElementById("estacionamientos").innerText = datosPromedios.Estacionamientos;
    document.getElementById("recamaras").innerText = datosPromedios.Recámaras;
    document.getElementById("banos").innerText = datosPromedios.Baños;
    document.getElementById("estacionamientos-mediana").innerText = datosMediana.Estacionamientos;
    document.getElementById("recamaras-mediana").innerText = datosMediana.Recámaras;
    document.getElementById("banos-mediana").innerText = datosMediana.Baños;
    document.getElementById("precio-minimo").innerText = datosPrecios.Mínimo;
    document.getElementById("precio-maximo").innerText = datosPrecios.Máximo;
    document.getElementById("precio-promedio").innerText = datosPrecios.Promedio;
    document.getElementById("precio-mediana").innerText = datosPrecios.Mediana;
    document.getElementById("metros-terreno-minimo").innerText = datosMetrosTerreno.Mínimo;
    document.getElementById("metros-terreno-maximo").innerText = datosMetrosTerreno.Máximo;
    document.getElementById("metros-terreno-promedio").innerText = datosMetrosTerreno.Promedio;
    document.getElementById("metros-terreno-mediana").innerText = datosMetrosTerreno.Mediana;
    document.getElementById("metros-construidos-minimo").innerText = datosMetrosConstruidos.Mínimo;
    document.getElementById("metros-construidos-maximo").innerText = datosMetrosConstruidos.Máximo;
    document.getElementById("metros-construidos-promedio").innerText = datosMetrosConstruidos.Promedio;
    document.getElementById("metros-construidos-mediana").innerText = datosMetrosConstruidos.Mediana;
    document.getElementById("precio-metros-construidos-minimo").innerText = datosPrecioMetrosConstruidos.Mínimo;
    document.getElementById("precio-metros-construidos-maximo").innerText = datosPrecioMetrosConstruidos.Máximo;
    document.getElementById("precio-metros-construidos-promedio").innerText = datosPrecioMetrosConstruidos.Promedio;
    document.getElementById("precio-metros-construidos-mediana").innerText = datosPrecioMetrosConstruidos.Mediana;
}

// Obtener el valor del selector (por ejemplo, un select dropdown)
let segmentoSeleccionado = localStorage.getItem('segmentoSeleccionado') || "general";
document.getElementById('segmentFilter').value = segmentoSeleccionado;

// Llamar la función cuando se cambie el valor del select
document.getElementById('segmentFilter').addEventListener('change', (event) => {
    const segmento = event.target.value;
    localStorage.setItem('segmentoSeleccionado', segmento);
    actualizarTablas(segmento);
});

// Llamar la función inicial con el segmento seleccionado por defecto
///actualizarTablas(segmentoSeleccionado); // Cambiado para que empiece mostrando el segmento "General"
window.onload = function() {
    actualizarTablas('general');
};