require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('header-company', require('./components/HeaderCompany.vue').default);
Vue.component('footer-page', require('./components/Footer.vue').default);
Vue.component('company-page', require('./components/CompanyPage.vue').default);
Vue.component('company-list', require('./components/CompanyList.vue').default);
Vue.component('product-detail', require('./components/ProductDetail.vue').default);
Vue.component('login-page', require('./components/LoginPage.vue').default);
Vue.component('signup-page', require('./components/SignupPage.vue').default);
Vue.component('welcome-page', require('./components/Welcome.vue').default);

// Vue.component('card-modal', require('./components/CardModal.vue').default);
// Vue.component('navtab-company', require('./components/NavtabCompany.vue').default);



const app = new Vue({
    el: '#app',
});
