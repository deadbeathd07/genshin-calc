import axios from "axios";
import { createStore } from "vuex";

const store = createStore({
  state() {
    return {
      formRegistration: {
        name: null,
        email: null,
        password: null,
      },
      characters: null,
    };
  },
  mutations: {
    GET_CHARACTERS(state, newCharacters) {
      state.characters = newCharacters;
    },
    SET_FORM_REGISTRATION(state, newFormRegistration) {
      state.formRegistration = newFormRegistration;
    },
  },
  actions: {
    getCharacters({ commit }, newCharacters) {
      commit("GET_CHARACTERS", newCharacters);
    },
    setFormRegistration({ commit }, newFormRegistration) {
      commit("SET_FORM_REGISTRATION", JSON.parse(newFormRegistration));
    },
  },
});

export default store;
