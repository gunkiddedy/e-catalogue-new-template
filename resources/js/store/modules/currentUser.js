const state = {
    users: [],
    token: '',
};

const getters = {
    DATA_USER: state => {
        return state.users
    },
    DATA_TOKEN: state => {
        return state.token
    }
};

const mutations = {
    GET_USER_DATA : (state, payload) => {
        state.users.push(payload);
    },
    GET_USER_TOKEN : (state, payload) => {
        state.token = payload.token;
    }
};

const actions = {
    GET_USER_DATA: (context, payload) => {
        context.commit('GET_USER_DATA', payload);
        context.commit('GET_USER_TOKEN', payload);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}