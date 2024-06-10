<script setup>
import { useAuthStore } from "../stores/auth";
const authStore = useAuthStore();
 authStore.getUser()
</script>

<template>

  <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://merakiui.com/images/logo.svg" class="h-8" alt="Flowbite Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Todo SPA</span>
      </a>

      <button @click="authStore.getUser()">Fetch User</button>

      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>

      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 rtl:space-x-reverse" id="navbar-sticky">
        <ul
          class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <router-link to="/"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
              >Home</router-link>
          </li>
          <li>
            <router-link to="/create"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Create Todo</router-link>
          </li>
          <li>
            <router-link to="/show"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Todo List</router-link>
          </li>
          
        </ul>

        <!-- This is for mobile version -->
        <ul v-if="authStore.user"
          class="flex flex-col lg:hidden md:hidden max-sm:show gap-2  font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
          >
          <li>
            <button @click="authStore.handleLogout"
              class="block py-2 px-3 text-white bg-gray-700 rounded  hover:text-blue-600">
              Logout
            </button>
          </li>
        </ul>
        <ul v-else
          class="flex flex-col lg:hidden md:hidden max-sm:show gap-2  font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
          >
          <li>
            <router-link to="/login"
              class="block py-2 px-3 text-white bg-gray-700 rounded  hover:text-blue-600">
              Login
            </router-link>
          </li>
        </ul>

      </div>

      <!-- This is for desktop version -->
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse max-sm:hidden max-md:hidden ">
        <ul v-if="authStore.user"
          class="flex font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
          >
          <li>
            <p
              class="block py-2 px-2 text-gray-700 underline underline-offset-4 hover:text-blue-700">
              {{ authStore.user.name }}
            </p>
          </li>
          <li>
            <button @click="authStore.handleLogout"
              class="block py-2 px-3 text-white bg-gray-700 rounded  hover:text-blue-600">
              Logout
            </button>
          </li>
        </ul>
        <ul v-else
          class="flex flex-col gap-2  font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
          >
          <li>
            <router-link to="/login"
              class="block py-2 px-3 text-white bg-gray-700 rounded  hover:text-blue-600">
              Login
            </router-link>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
</template>