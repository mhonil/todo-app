import { createRouter, createWebHistory } from "vue-router";

import Home from "../components/Home.vue";
import Login from "../components/Login.vue";
import Register from "../components/Register.vue";
import ForgotPassword from "../components/ForgotPassword.vue";
import ResetPassword from "../components/ResetPassword.vue";
import CreateTodo from "../components/CreateTodo.vue";
import IndexTodo from "../components/IndexTodo.vue";
import UpdateTodo from "../components/UpdateTodo.vue";


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { 
      path: "/", 
      name: "Home", 
      component: Home 
    },
    { 
      path: "/create", 
      name: "CreateTodo", 
      component: CreateTodo 
    },
    { 
      path: "/show", 
      name: "IndexTodo", 
      component: IndexTodo 
    },
    { 
      path: "/update", 
      name: "UpdateTodo", 
      component: UpdateTodo 
    },
    {
      path: "/login",
      name: "Login",
      component: Login,
    },
    {
      path: "/register",
      name: "Register",
      component: Register,
    },
    {
      path: "/forgot-password",
      name: "ForgotPassword",
      component: ForgotPassword,
    },
    {
      path: "/password-reset/:token",
      name: "ResetPassword",
      component: ResetPassword,
    },
  ]
});

export default router;
