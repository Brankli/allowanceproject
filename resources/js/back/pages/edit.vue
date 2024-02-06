<script setup>
import { useLocalStorage } from '@vueuse/core';
import axios from 'axios';
import { onMounted, ref } from 'vue';
import { useRouter,useRoute } from 'vue-router';


const token = useLocalStorage('token','')

const scale_val = ref({ value:[]}); // Adjusted to match the column name in your database


const router = useRouter()
const route = useRoute()
const id = ref(route.params.id);
console.log(id.value)
function editPost(){


    axios.defaults.headers.common['Authorization'] = token.value

  axios.post(`./api/update/${id.value}`, {

    scale_name:scale_val.value.scale_name,
    value:scale_val.value.value,
    status:scale_val.value.status,
})
  .then(()=>{
    router.push('/')
    console.log(scale_val.value);
  })
}
onMounted(()=>{
    axios.defaults.headers.common['Authorization'] = token.value
 axios.get(`./api/edit/${id.value}`)
 .then(res=>{

      scale_val.value = res.data; // Adjusted to match the column name in your database
    console.log(res.data);
 }).catch(err=>{
    console.log(err)
 })
})
</script>




<template>
    <name name="Post News"/>
    <div class="bg-gray-100 p-16">
        <div class="border-2  bg-white border-gray-300 shadow-lg max-w-4xl mx-auto rounded shadow-gray-100">
            <div class="w-full  bg-white rounded-lg   md:mt-0 xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-lg  text-sky-700 leading-tight tracking-wide">please edit Scale</h1>
                    <router-link to="/posts"  class="btn btn-primary">back</router-link>

                    <form class="mb-6">



                            <div class="mb-6">

                                <label for="info" class="block mb-2 text-sm font-medium text-gray-900">Scale name</label>
                                <input required type="text" id="info" v-model="scale_val.scale_name" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder="enter scale name">
                            </div>


                            <div class="mb-6">
                                <label for="info" class="block mb-2 text-sm font-medium text-gray-900"> Sacle value</label>
                                <input type="number" id="info" v-model="scale_val.value" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder="please enter scale value"></div>
                            <div class="mb-6">
                                <label for="info" class="block mb-2 text-sm font-medium text-gray-900">status</label>
                                <input type="checkbox" id="check" v-model="scale_val.status" name="check" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder="please enter status">
                            </div>
                        <button @click.prevent="editPost()" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">updated</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</template>
