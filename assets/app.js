/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// importar estilos de node_modules directamente
import 'bootstrap/dist/css/bootstrap.min.css';

import '@fortawesome/fontawesome-free/css/all.min.css';



// import '@fortawesome/fontawesome-free/js/fontawesome'
// import '@fortawesome/fontawesome-free/js/solid'
// import '@fortawesome/fontawesome-free/js/regular'
// import '@fortawesome/fontawesome-free/js/brands'

// cargamos el paquete de jquery desde node_modules
import jquery from 'jquery';

// cargamos el paquete de boostrap desde node_modules
import 'bootstrap';

// start the Stimulus application
import './bootstrap';
