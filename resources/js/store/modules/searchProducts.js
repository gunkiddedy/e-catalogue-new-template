const state = {
    keyword: ''
};

const getters = {
    get_keyword: (state) => {
        return state.keyword
    }
};

const mutations = {
    SEARCH_PRODUCTS: (state, payload) => {
       state.keyword = payload;
    }
};

const actions = {
    handleSearchProducts: (context, payload) => {
        context.commit('SEARCH_PRODUCTS', payload);
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