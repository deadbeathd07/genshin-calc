import { createApp } from "vue";
import router from "./router";
import store from "./store";
import "./style.css";
import App from "./App.vue";
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {
  faTwitter,
  faYoutube,
  faFacebookF,
} from "@fortawesome/free-brands-svg-icons";
import "v-calendar/style.css";

library.add({ faTwitter, faYoutube, faFacebookF });

createApp(App)
  .component("font-awesome-icon", FontAwesomeIcon)
  .use(store)
  .use(router)
  .mount("#app");
