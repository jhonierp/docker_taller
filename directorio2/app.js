const express = require('express');
const app = express();

// Ruta principal que devuelve un mensaje simple
app.get('/', (req, res) => res.send('Hola desde Node y Docker!'));

// Inicia el servidor en el puerto 3000
app.listen(3000, () => console.log('Servidor en puerto 3000'));