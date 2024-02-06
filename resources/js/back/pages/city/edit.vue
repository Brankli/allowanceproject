<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter, useRoute } from "vue-router";
import { useLocalStorage } from "@vueuse/core";
const token = useLocalStorage("token", "");
const router = useRouter();
const route = useRoute();
const id = ref(route.params.id);
const city_list = ref({value:[]});
function editcity() {
  axios.defaults.headers.common["Authorization"] = token.value;
  axios.post(`/api/updatecity/${id.value}`, {
      city_name: city_list.value.city_name,
      desertalw: city_list.value.desertalw,
      low: city_list.value.low,
      medium: city_list.value.medium,
      high: city_list.value.high,
      status: city_list.value.status,
    })
    .then(res => {
      router.push("/");

      console.log(res.city_list.value);
    });
  onMounted(() => {
    axios.defaults.headers.common["Authorization"]= token.value;
    axios.get(`./api/editcity/${id.value}`)
      .then(res => {
        city_list.value = res.data;
      })
      .catch(err => {
        console.log(err);
      });
  });
}
</script>


<template>
  <name name="Post News" />
  <div class="bg-gray-100 p-16">
    <div
      class="border-2 bg-white border-gray-300 shadow-lg max-w-4xl mx-auto rounded shadow-gray-100"
    >
      <div class="w-full bg-white rounded-lg md:mt-0 xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-lg text-sky-700 leading-tight tracking-wide">
            please edit the city
          </h1>
          <form class="mb-6">
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
                >capital_city name</label
              >
              <input
                type="text"
                v-model="city_list.city_name"
                id="info"
                rows="4"
                name="city_name"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder="enter city name"
              />
            </div>

            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
                >low
              </label>
              <input
                type="text"
                v-model="city_list.low"
                name="low"
                id="info"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder="enter scale name"
              />
            </div>
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
                >medium
              </label>
              <input
                type="text"
                v-model="city_list.medium"
                id="info"
                rows="4"
                name="medium"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "
              />
            </div>
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
                >high
              </label>
              <input
                type="text"
                v-model="city_list.high"
                id="info"
                name="high"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "
              />
            </div>

            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
              >
                desertalw</label
              >
              <input
                type="checkbox"
                v-model="city_list.desertalw"
                name="desertalw"
                id="info"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "
              />
            </div>
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
              >
                status</label
              >
              <input
                type="checkbox"
                v-model="city_list.status"
                id="info"
                name="check"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "
              />
            </div>
            <button @click.prevent="editcity()" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block"> update city</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>



<style>
</style>

