/**
 * plugins/index.js
 *
 * Automatically included in `./src/main.js`
 */

// Plugins
import { loadFonts } from "./webfontloader";
import vuetify from "./vuetify";
import router from "@/router";
import store from "@/store";
import axios from "axios";
import VueAxios from "vue-axios";

export function registerPlugins(app) {
  loadFonts();
  app.use(vuetify).use(router).use(store).use(VueAxios, axios);
}
