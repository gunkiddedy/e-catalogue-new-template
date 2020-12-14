const state = {
    keyword: '',
    keywordCompany: '',
};

const getters = {
    get_keyword: (state) => {
        return state.keyword
    },
    get_keywordCompany: (state) => {
        return state.keywordCompany
    }
};

const mutations = {
    SEARCH_PRODUCTS: (state, payload) => {
       state.keyword = payload;
    },
    SEARCH_PRODUCTS_COMPANY: (state, payload) => {
        state.keywordCompany = payload;
    }
};

const actions = {
    handleSearchProducts: (context, payload) => {
        context.commit('SEARCH_PRODUCTS', payload);
    },
    handleSearchProductsCompany: (context, payload) => {
        context.commit('SEARCH_PRODUCTS_COMPANY', payload);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}

// export default {
//     namespaced: true,
//     state: {
//         keyword: ''
//     },
//     getters: {
//         get_keyword: state => state.keyword
//     },
//     mutations: {
//         SEARCH_PRODUCTS: (state, payload) => {
//             state.keyword = payload;
//         }
//     },
//     actions : {
//         handleSearchProducts: (context, payload) => {
//             context.commit('SEARCH_PRODUCTS', payload);
//         }
//     },
// }