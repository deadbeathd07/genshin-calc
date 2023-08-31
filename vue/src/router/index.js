import { createRouter, createWebHistory } from "vue-router";
import store from "../store/index.js";
import AuthorizationView from "../views/auth/AuthorizationView.vue";
import DefaultLayout from "../components/layouts/DefaultLayout.vue";
import HomeView from "../views/HomeView.vue";
import PlugView from "../views/PlugView.vue";

const routes = [
  {
    path: "/",
    redirect: "/home",
    component: DefaultLayout,
    children: [
      {
        path: "/home",
        name: "HomeView",
        component: HomeView,
      },
    ],
  },
  {
    path: "/auth",
    name: "AuthorizationView",
    component: AuthorizationView,
  },

  {
    path: "/plug",
    name: "PlugView",
    component: PlugView,
  },
];

const router = createRouter({
  history: createWebHistory(import.meta.env.APP_URL),
  routes,
});

export default router;
