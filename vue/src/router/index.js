// Composables
import { createRouter, createWebHistory } from "vue-router";
import Default from "@/layouts/default/Default.vue";
import Home from "@/views/Home.vue";
import Register from "@/views/Register.vue";
import Entry from "@/views/Entry.vue";

const routes = [
  {
    path: "/",
    component: Default,
    children: [
      {
        path: "",
        name: "Home",
        component: Home,
      },
      {
        path: "register",
        name: "Register",
        component: Register,
      },
      {
        path: "entry",
        name: "Entry",
        component: Entry,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
