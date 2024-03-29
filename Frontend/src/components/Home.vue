<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth";

const authStore = useAuthStore();

onMounted(async () => {
  await authStore.getUser();
});
</script>
<template>
  <div class="relative">
    <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
      <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
      <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
    </div>
    <div class="relative pt-36 ml-auto">
      <div class="lg:w-2/3 text-center mx-auto">
        <h1 class="text-gray-900 dark:text-white font-bold text-5xl md:text-6xl xl:text-7xl">If you want create a Todo
          you need to Login first</h1>
        <div class="hidden py-8 mt-16 border-y border-gray-100 sm:flex justify-between">
          <div class="text-left">
            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The lowest price</h6>
            <p class="mt-2 text-gray-500">Some text here</p>
          </div>
          <div class="text-left">
            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The fastest on the market</h6>
            <p class="mt-2 text-gray-500">Some text here</p>
          </div>
          <div class="text-left">
            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The most loved</h6>
            <p class="mt-2 text-gray-500">Some text here</p>
          </div>
        </div>
        <div class="mt-12 p-4 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6">
          <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
            <img src="https://astrolus.netlify.app/images/clients/microsoft.svg" class="h-12 w-auto mx-auto"
              loading="lazy" alt="client logo" width="" height="" />
          </div>
          <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
            <img src="https://astrolus.netlify.app/images/clients/airbnb.svg" class="h-12 w-auto mx-auto" loading="lazy"
              alt="client logo" width="" height="" />
          </div>
          <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
            <img src="https://astrolus.netlify.app/images/clients/google.svg" class="h-9 w-auto m-auto" loading="lazy"
              alt="client logo" width="" height="" />
          </div>
          <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
            <img src="https://astrolus.netlify.app/images/clients/ge.svg" class="h-12 w-auto mx-auto" loading="lazy"
              alt="client logo" width="" height="" />
          </div>
          <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
            <img src="https://astrolus.netlify.app/images/clients/netflix.svg" class="h-8 w-auto m-auto" loading="lazy"
              alt="client logo" width="" height="" />
          </div>
          <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
            <img src="https://astrolus.netlify.app/images/clients/google-cloud.svg" class="h-12 w-auto mx-auto"
              loading="lazy" alt="client logo" width="" height="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>