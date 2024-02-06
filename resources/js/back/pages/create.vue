<script setup>
// import name from "../components/name.vue";
import { useLocalStorage } from '@vueuse/core';
import axios from 'axios';
import { ref ,computed} from 'vue';
import { useRouter } from 'vue-router';


const token = useLocalStorage('token','')
const scale_name = ref('')
const sacle_value= ref('')
const check= ref(false)
const message = ref('');
const router = useRouter()



function createPost(){
    axios.defaults.headers.common['Authorization'] = token.value
  axios.post('api/posts',{
    scale_name:scale_name.value,
    value:sacle_value.value,
    status:check.value,
    message:message.value='added successfully'
  })
  .then((res)=>{
    console.log(res);
    router.push('/posts')
  }).catch(error=>{
    message.value=error.message
    console.log('Error:', error);

    // console.log(error);
  })
}
const isSuccess = computed(() => message.value === 'Scale added successfully');

</script>
<template>
    <name name="Post News"/>
    <div class="bg-gray-100 p-16">
        <div class="border-2  bg-white border-gray-300 shadow-lg max-w-4xl mx-auto rounded shadow-gray-100">
            <div class="w-full  bg-white rounded-lg   md:mt-0 xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-lg  text-sky-700 leading-tight tracking-wide">please create new Scale</h1>
                    <form class="mb-6">
                            <div class="mb-6">

                                <label for="info" class="block mb-2 text-sm font-medium text-gray-900">Scale name</label>
                                <input type="text" id="info" v-model="scale_name" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder="enter scale name">
                            </div>


                            <div class="mb-6">
                                <label for="info" class="block mb-2 text-sm font-medium text-gray-900"> Sacle value</label>
                                <input type="text" id="info" v-model="sacle_value" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder="please enter scale value"></div>
                            <div class="mb-6">
                                <label for="info" class="block mb-2 text-sm font-medium text-gray-900">status</label>
                                <input type="checkbox" id="check" v-model="check" name="check" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder="please enter status">
                            </div>
                        <button @click.prevent="createPost()" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Submit scale</button>
                </form>
            </div>
        </div>
        <div v-if="message" :class="{ success: isSuccess, error: !isSuccess }">{{ message }}</div>
    </div>
    </div>
</template>

<style>
.success {
  color: green;
}
.error {
  color: red;
}
</style>
