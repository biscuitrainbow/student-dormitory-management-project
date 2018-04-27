
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueSwal from 'vue-swal'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('user-page', require('./components/UserPage.vue'));
Vue.component('room-page', require('./components/RoomPage.vue'));
Vue.component('customer-page', require('./components/CustomerPage.vue'));

Vue.use(VueSwal)

const app = new Vue({
    el: '#app'
});
