import { createStore } from "vuex";

const store = createStore({
    state: {
        agreement: true,
        user: {
            token: 8736873468756347856,
            google_token: 76347475873498579845,
            apple_token: 7364563485638568,
        },
    },
    mutations: {
        SET_AGREEMENT(state, agreement) {
            console.log("SET_AGREEMENT: ", agreement);
            state.agreement = agreement;
        },
    },
    actions: {
        changeAgreement({ commit }, agreement) {
            commit("SET_AGREEMENT", agreement);
        },
    },
    getters: {},
});

export default store;
