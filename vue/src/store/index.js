import axios from "axios";
import { createStore } from "vuex";

const store = createStore({
  state() {
    return {
      characters: null,
    };
  },
  mutations: {
    GET_CHARACTERS(state, newCharacters) {
      state.characters = newCharacters;
    },
  },
  actions: {
    getCharacters({ commit }, newCharacters) {
      commit("GET_CHARACTERS", newCharacters);
    },
  },
});

export default store;
