import Welcome from './components/Welcome';
import LoginPage from './components/LoginPage';
import SignupPage from './components/SignupPage';
import CompanyPage from './components/CompanyPage';
import CompanyProfile from './components/CompanyProfile';
import CompanyList from './components/CompanyList';
import ProductList from './components/ProductList';
import UserBlacklist from './components/UserBlacklist';
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
            path: '/company-profile/:id',
            component: CompanyProfile,
            name: 'company-profile',
            props: true
        },
        {
            path: '/company-list',
            component: CompanyList,
            name: 'company-list'
        },
        {
            path: '/product-list',
            component: ProductList,
            name: 'product-list'
        },
        {
            path: '/user-blacklist',
            component: UserBlacklist,
            name: 'user-blacklist'
        },
        {
            path: '/product-detail/:id',
            name: 'product-detail',
            component: ProductDetail,
            props: true
        },
    ]
}