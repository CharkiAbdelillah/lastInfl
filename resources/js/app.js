/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: axios } = require('axios');

require('./bootstrap');
import common from './common'
window.Vue = require('vue');
import ViewUI from 'view-design';
import 'view-design/dist/styles/iview.css';
Vue.use(ViewUI);
Vue.mixin(common)

import swal from 'sweetalert2';
window.Swal = swal;

//global registration
import VueStepWizard from 'vue-step-wizard'
import 'vue-step-wizard/dist/vue-step-wizard.css'
Vue.use(VueStepWizard);

import store from './store/store'
// import Multiselect from 'vue-multiselect'


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//*admin*
//manager
Vue.component('managers-component', require('./components/admin/manager/managers.vue').default);
Vue.component('add-manager', require('./components/admin/manager/addManager.vue').default);
Vue.component('edit1-manager', require('./components/admin/manager/editManager.vue').default);
//client
Vue.component('users-component', require('./components/admin/user/users.vue').default);
Vue.component('add-user', require('./components/admin/user/addUser.vue').default);
Vue.component('edit1-user', require('./components/admin/user/editUser.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
//*manager*
//influenceur
Vue.component('influenceur-component', require('./components/manager/Infl.vue').default);
Vue.component('add-infl', require('./components/manager/addInfl.vue').default);
Vue.component('addInflInfo', require('./components/manager/addInflInfo.vue').default);
Vue.component('instagrame', require('./components/manager/instagram.vue').default);
Vue.component('snapchat', require('./components/manager/snapchat.vue').default);
Vue.component('facebook', require('./components/manager/facebook.vue').default);
Vue.component('youtube', require('./components/manager/youtube.vue').default);

// Vue.component('wizard', require('./components/manager/wizard.vue').default);
// Vue.component('wizard2', require('./components/manager/wizard2.vue').default);
Vue.component('edit-infl', require('./components/manager/editInfl.vue').default);
Vue.component('edit-inflInfo', require('./components/manager/editInfInfo.vue').default);
Vue.component('edit-inflInsta', require('./components/manager/editInstagram.vue').default);
Vue.component('edit-inflFb', require('./components/manager/editFacebook.vue').default);
Vue.component('edit-inflYtb', require('./components/manager/editYoutube.vue').default);
Vue.component('edit-inflSnap', require('./components/manager/editSnapchat.vue').default);

Vue.component('add-infl', require('./components/manager/addInfl.vue').default);
Vue.component('add-inflInfo', require('./components/manager/addInflInfo.vue').default);
Vue.component('add-inflInsta', require('./components/manager/instagram.vue').default);
Vue.component('add-inflFb', require('./components/manager/facebook.vue').default);
Vue.component('add-inflYtb', require('./components/manager/youtube.vue').default);
Vue.component('add-inflSnap', require('./components/manager/snapchat.vue').default);
// Vue.component('edit-inflType', require('./components/manager/editInfType.vue').default);
// Vue.component('edit-inflInsta', require('./components/manager/editInstagram.vue').default);

//*user*
// Vue.component('user_home', require('./components/user/home.vue').default);
Vue.component('app-home', require('./AppHome.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page.d Then, you may begin adding components to this application
 * or customize the JavaScript scafkfolding to fit your unique needs.
 */
import router from './routes/routes.js';
const app = new Vue({
    el: '#app',
    router,
    store
});
