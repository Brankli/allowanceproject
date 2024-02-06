<script setup>
import { ref } from "vue";
import axios from 'axios'
import { useLocalStorage } from '@vueuse/core'

const email = ref('')
const password = ref('')
const errors = ref([])
const authErr = ref('');
const token = useLocalStorage('token', '')

const login = ()=>{
    axios.post('./api/login',{
        email:email.value,
        password:password.value
    }).then(res=>{
        token.value = 'Bearer ' + res.data.access_token
        window.location.href = '/admin'
    }).catch(error=>{
        if(error.response.status == 422){
            errors.value = error.res.data.errors;
            authErr.value = ''
        }else if(error.response.status == 401){
            authErr.value = error.res.data.message;
            errors.value = []
        }
    })
    console.log(token.value);
}



</script>

<template>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full bg-white rounded-lg shadow-2xl  md:mt-0 sm:max-w-md xl:p-0 ">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight">
              Login
            </h1>
            <form class="space-y-4 md:space-y-6" action="#">
              <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" v-model="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 outline-none " placeholder="name@gmail.com" required>
              </div>
              <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" v-model="password" name="password" id="password"  class="bg-gray-50 border border-sky-300 text-gray-900 sm:text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 outline-none" required>
              </div>
              <div class="flex items-center justify-between">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" class="w-4 h-4 border border-sky-300 rounded bg-gray-50 focus:ring-3 focus:ring-sky-300" required>
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="remember" class="text-gray-700">Remember me</label>
                  </div>
                </div>
                <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Forgot password?</a>
              </div>
              <button @click.prevent="login" class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Sign in</button>

            </form>
          </div>
        </div>

      </div>
</template>