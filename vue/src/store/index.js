// import axios from "axios";
import { createStore } from "vuex";

const store = createStore({
  state() {
    return {
      formRegistration: {
        name: null,
        email: null,
        password: null,
      },
      formEntry: {
        name: null,
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
    SET_FORM_ENTRY(state, newFormEntry) {
      state.formEntry = newFormEntry;
    },
  },
  actions: {
    getCharacters({ commit }, newCharacters) {
      commit("GET_CHARACTERS", newCharacters);
    },
    setFormRegistration({ commit }, newFormRegistration) {
      let formRegistration = JSON.parse(newFormRegistration);
      commit("SET_FORM_REGISTRATION", formRegistration);
      // axios.post("http://127.0.0.1:8000/api/registration", formRegistration);
    },
    setFormEntry({ commit }, newFormEntry) {
      let formEntry = JSON.parse(newFormEntry);
      commit("SET_FORM_ENTRY", formEntry);
      // axios.post("http://127.0.0.1:8000/api/entry", formEntry);
    },
  },
});

export default store;
