const grupoCasaPromedioJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 3.0 },
    "L": { "Estacionamientos": 3.0, "Recámaras": 4.0, "Baños": 3.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 3.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 3.0 }
};
/**const grupoCasPromedioJson = require('C:\\xampp\\htdocs\\datalpine\\resources\\Ciudades\\Tulancingo\\assets\\tablas\\grupo_casa_promedio.json');*/
const grupoCasaMedianaJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 1.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 3.0 },
    "L": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 3.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 }
};
const grupoPrecioMercadoJson = {
    "A": { "Mínimo": "$3,255,000.00", "Máximo": "$3,999,000.00", "Promedio": "$3,602,733.51", "Mediana": "$3,600,000.00" },
    "B": { "Mínimo": "$2,500,002.00", "Máximo": "$3,242,320.00", "Promedio": "$2,881,888.21", "Mediana": "$2,890,000.00" },
    "C": { "Mínimo": "$1,750,050.00", "Máximo": "$2,499,000.00", "Promedio": "$2,115,238.38", "Mediana": "$2,140,000.00" },
    "D": { "Mínimo": "$1,005,000.00", "Máximo": "$1,749,605.00", "Promedio": "$1,394,898.97", "Mediana": "$1,400,000.00" },
    "E": { "Mínimo": "$4,800.00", "Máximo": "$90,000,000.00", "Promedio": "$1,094,975.62", "Mediana": "$999,999.99" },
    "L": { "Mínimo": "$12,100,000.00", "Máximo": "$21,000,000.00", "Promedio": "$16,167,342.34", "Mediana": "$15,500,000.00" },
    "S": { "Mínimo": "$4,020,090.00", "Máximo": "$11,900,000.00", "Promedio": "$5,926,902.77", "Mediana": "$5,350,000.00" },
    "general": { "Mínimo": "$4,800.00", "Máximo": "$90,000,000.00", "Promedio": "$2,190,466.12", "Mediana": "$999,999.99" }
};

const grupoMetrosTerrenoJson = {
    "A": { "Mínimo": "75.00 m²", "Máximo": "1,077.00 m²", "Promedio": "163.45 m²", "Mediana": "144.00 m²" },
    "B": { "Mínimo": "62.00 m²", "Máximo": "15,794.00 m²", "Promedio": "171.47 m²", "Mediana": "129.00 m²" },
    "C": { "Mínimo": "44.00 m²", "Máximo": "14,079.00 m²", "Promedio": "149.37 m²", "Mediana": "120.00 m²" },
    "D": { "Mínimo": "15.00 m²", "Máximo": "8,315.00 m²", "Promedio": "121.92 m²", "Mediana": "105.00 m²" },
    "E": { "Mínimo": "30.00 m²", "Máximo": "16,667.00 m²", "Promedio": "162.99 m²", "Mediana": "126.00 m²" },
    "L": { "Mínimo": "245.00 m²", "Máximo": "24,569.00 m²", "Promedio": "774.62 m²", "Mediana": "500.00 m²" },
    "S": { "Mínimo": "85.00 m²", "Máximo": "32,240.00 m²", "Promedio": "260.96 m²", "Mediana": "200.00 m²" },
    "general": { "Mínimo": "15.00 m²", "Máximo": "32,240.00 m²", "Promedio": "176.38 m²", "Mediana": "128.00 m²" }
};
const grupoMetrosConstruidosJson = {
    "A": { "Mínimo": "75.00 m²", "Máximo": "460.00 m²", "Promedio": "216.10 m²", "Mediana": "222.00 m²" },
    "B": { "Mínimo": "62.00 m²", "Máximo": "29,743.00 m²", "Promedio": "230.52 m²", "Mediana": "200.00 m²" },
    "C": { "Mínimo": "44.00 m²", "Máximo": "640.00 m²", "Promedio": "159.53 m²", "Mediana": "150.00 m²" },
    "D": { "Mínimo": "45.00 m²", "Máximo": "472.00 m²", "Promedio": "119.72 m²", "Mediana": "114.00 m²" },
    "E": { "Mínimo": "25.00 m²", "Máximo": "10,000.00 m²", "Promedio": "200.61 m²", "Mediana": "170.00 m²" },
    "L": { "Mínimo": "245.00 m²", "Máximo": "1,000.00 m²", "Promedio": "567.30 m²", "Mediana": "539.00 m²" },
    "S": { "Mínimo": "30.00 m²", "Máximo": "1,465.00 m²", "Promedio": "300.66 m²", "Mediana": "280.00 m²" },
    "general": { "Mínimo": "25.00 m²", "Máximo": "29,743.00 m²", "Promedio": "205.21 m²", "Mediana": "175.00 m²" }
};
const grupoPrecioMetrosConstruidosJson = {
    "A": { "Mínimo": "$8,043.48", "Máximo": "$47,500.00", "Promedio": "$18,091.71", "Mediana": "$16,237.29" },
    "B": { "Mínimo": "$107.25", "Máximo": "$44,692.00", "Promedio": "$16,086.00", "Mediana": "$14,950.00" },
    "C": { "Mínimo": "$3,358.64", "Máximo": "$42,771.66", "Promedio": "$14,335.25", "Mediana": "$14,000.01" },
    "D": { "Mínimo": "$2,400.66", "Máximo": "$38,000.00", "Promedio": "$12,598.79", "Mediana": "$12,234.04" },
    "E": { "Mínimo": "$19.28", "Máximo": "$295,800.00", "Promedio": "$14,557.42", "Mediana": "$13,750.00" },
    "L": { "Mínimo": "$17,375.00", "Máximo": "$61,224.49", "Promedio": "$30,200.68", "Mediana": "$27,777.78" },
    "S": { "Mínimo": "$2,779.52", "Máximo": "$238,333.33", "Promedio": "$21,695.69", "Mediana": "$19,218.80" },
    "general": { "Mínimo": "$19.28", "Máximo": "$295,800.00", "Promedio": "$15,529.96", "Mediana": "$14,344.26" }
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