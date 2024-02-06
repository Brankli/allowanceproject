<script setup>
import { useLocalStorage } from '@vueuse/core';
import axios  from 'axios';
import { ref, onMounted } from "vue";
const token=useLocalStorage("token"," ")
const citys = ref([]);
function getcity(){
    axios.defaults.headers.common['Authorization']=token.value
    axios.get(`/api/city`)
    .then((response)=>{
        citys.value=response.data

    })

}
onMounted(()=>{
    getcity();
})
</script>


<template>
  <div class="bg-gray-100">
    <name name="Dashbord" />
    <div class="grid grid-cols-3 gap-4 m-8">


    </div>
    <div class="m-4 rounded">
      <div
        class="w-full bg-white border-b-2 rounded border-gray-200 flex flex-row justify-between">
        <h1 class="font-bold text-gray-500 text-lg p-4">capital city Tabel</h1>
        
        <router-link to="/create-city" class="w-15 text-white bg-sky-700 hover:bg-sky-800 focus:ring-2 focus:outline-none focus:ring-primary-300 font-medium rounded  px-5 py-2.5 m-4 text-center" >Add city</router-link>
      </div>

      <div class="flex bg-white flex-col items-center justify-center">
        <div
          class="w-full relative p-2 overflow-x-auto shadow-md sm:rounded-lg xs:p-5">
          <div
            class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4" >
            <div>
              <select name="time" id="time" class="outline-none focus:bg-gray-300 text-sm text-gray-700 hover:bg-gray-300">
                <option value="1-month" class="hover:bg-slate-500">
                  last 30 days
                </option>
                <option value="3months">3 months</option>
                <option value="6-months">6 months</option>
                <option value="1-year">1 year</option>
              </select>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
              <div
                class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-sky-500 focus:border-sky-500 outline-none" placeholder="Search for items"/>
            </div>
          </div>
          <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3">Number</th>
                <th scope="col" class="px-6 py-3">city_name</th>
                <th scope="col" class="px-6 py-3">desertalw</th>
                <th scope="col" class="px-6 py-3">low</th>
                <th scope="col" class="px-6 py-3">medium</th>
                <th scope="col" class="px-6 py-3">high</th>
                <th scope="col" class="px-6 py-3">status</th>
                <th scope="col" class="px-6 py-3">Action</th>
              </tr>
            </thead>
            <tbody v-if="citys && citys.length > 0">
              <tr v-for="(city, index) in citys" :key="city.id" class="bg-white border-b hover:bg-gray-50">
                <td class="w-4 p-4">{{ index + 1 }}</td>

                <td class="px-6 py-4">{{ city.city_name }}</td>
                <td class="px-6 py-4">{{ city.desertalw }}</td>
                <td class="px-6 py-4">{{ city.low }}</td>
                <td class="px-6 py-4">{{ city.medium }}</td>
                <td class="px-6 py-4">{{ city.high }}</td>
                <td class="px-6 py-4">{{ city.status }}</td>

                <td>
                  <router-link :to="{ name: 'Editcity', params: { id: city.id } }">
                    <span class="text-white rounded border-2 bg-blue-600">Edit</span>
                        </router-link>
                    <span class="text-white rounded border-2 bg-red-600">delete</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
