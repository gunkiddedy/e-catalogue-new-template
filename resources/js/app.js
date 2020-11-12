require('./bootstrap');

window.Vue = require('vue');



import VueRouter from 'vue-router';
import routes from './routes';

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

Vue.use(VueRouter);

window.moment = require('moment');

Vue.component('header-component', require('./components/HeaderCompany.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
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
    router: new VueRouter(routes)
});
