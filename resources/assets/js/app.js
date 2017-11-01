
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('landing-notify', require('./components/LandingNotify.vue'));

const app = new Vue({
  el: '#app'
});
