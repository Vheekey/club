
// mix.copy('../../node_modules/feather-icons/dist/feather.js', 'public/css/app.js');

// import feather from '../../node_modules/feather-icons/dist/feather.min'
// import feather from 'feather-icons'
// const feather = require('feather-icons')
import 'https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js'

feather.replace();

setTimeout(() => {
    $("#myToast").toast('hide').fadeOut('slow');
}, 10000);
