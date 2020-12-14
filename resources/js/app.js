require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
import Vuex from 'vuex';

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import routes from './routes';
import dataStore from './store/index';

import VueSweetalert2 from 'vue-sweetalert2';
// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);
Vue.use(ElementUI);
Vue.use(VueRouter);
Vue.use(Vuex);

// Swal.fire({
//     title: 'Do you want to save the changes?',
//     showDenyButton: true,
//     showCancelButton: true,
//     confirmButtonText: `Save`,
//     denyButtonText: `Don't save`,
//     }).then((result) => {
//         /* Read more about isConfirmed, isDenied below */
//         if (result.isConfirmed) {
//             Swal.fire('Saved!', '', 'success')
//         } else if (result.isDenied) {
//             Swal.fire('Changes are not saved', '', 'info')
//         }
// })

const store = new Vuex.Store(dataStore);
const router = new VueRouter(routes);


Vue.component('pagination', require('./components/Pagination.vue').default);
Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('header-company', require('./components/HeaderCompany.vue').default);
Vue.component('header-detail', require('./components/HeaderDetail.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('app-component', require('./components/App.vue').default);
Vue.component('admin-sidebar', require('./components/AdminSidebar.vue').default);
// Vue.component('company-page', require('./components/CompanyPage.vue').default);
// Vue.component('company-list', require('./components/CompanyList.vue').default);
// Vue.component('product-detail', require('./components/ProductDetail.vue').default);
// Vue.component('login-page', require('./components/LoginPage.vue').default);
// Vue.component('register-page', require('./components/SignupPage.vue').default);
// Vue.component('welcome-page', require('./components/Welcome.vue').default);

// Vue.component('card-modal', require('./components/CardModal.vue').default);
// Vue.component('navtab-company', require('./components/NavtabCompany.vue').default);



const app = new Vue({
    el: '#app',
    store,
    router: router
});
