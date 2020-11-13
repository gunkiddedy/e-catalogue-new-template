import Welcome from './components/Welcome';
import LoginPage from './components/LoginPage';
import SignupPage from './components/SignupPage';
import CompanyPage from './components/CompanyPage';
import CompanyList from './components/CompanyList';
import ProductDetail from './components/ProductDetail';
import PageNotFound from './components/PageNotFound';

export default {
    mode: 'history',

    routes: [
        {
            path: '*',
            component: PageNotFound,
            name: 'page-not-found'
        },
        {
            path: '/',
            component: Welcome,
            name: 'welcome'
        },
        {
            path: '/login',
            component: LoginPage,
            name: 'login'
        },
        {
            path: '/register',
            component: SignupPage,
            name: 'register'
        },
        {
            path: '/company-page/:id',
            component: CompanyPage,
            name: 'company-page',
            props: true
        },
        {
            path: '/company-list',
            component: CompanyList,
            name: 'company-list'
        },
        {
            path: '/product-detail/:id',
            name: 'product-detail',
            component: ProductDetail,
            props: true
        },
    ]
}