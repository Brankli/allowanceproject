<script setup>
import who_we_are from '../dropdowns/who_we_are.vue';
import departments from '../dropdowns/departments.vue';
import investment_sec from '../dropdowns/investment_sec.vue';
import { ref } from 'vue';
import search from './search.vue';

const className = ref('hidden');
const searchClass = ref('hidden');
const whoClass = ref('hidden');
const ourClass = ref('hidden');
const depClass = ref('hidden');

const togglemenu = () => {
    if (className.value == 'hidden') {
        className.value = 'unhidden'
        searchClass.value == 'hidden'
    } else {
        className.value = 'hidden'
    }
}

const searchtogle = () => {
    if (searchClass.value == 'hidden') {
        searchClass.value = 'unhidden'
        className.value == 'hidden'
    } else {
        searchClass.value = 'hidden'
    }
}

const whotogle = () => {
    if (whoClass.value == 'hidden') {
        whoClass.value = 'unhidden'
        ourClass.value = 'hidden'
        depClass.value = 'hidden'
    } else {
        whoClass.value = 'hidden'
    }
}
const ourtogle = () => {
    if (ourClass.value == 'hidden' ) {
        ourClass.value = 'unhidden'
        whoClass.value = 'hidden'
        depClass.value = 'hidden'
    } else {
        ourClass.value = 'hidden'
    }
}
const departmenttogle = () => {
    if (depClass.value == 'hidden') {
        depClass.value = 'unhidden'
        whoClass.value = 'hidden'
        ourClass.value = 'hidden'
    } else {
        depClass.value = 'hidden'
    }
}

const collback=()=>{
    depClass.value = 'hidden';
    ourClass.value = 'hidden'
    whoClass.value = 'hidden'
}
</script>
<template>
    <div class=" rounded  w-full lg:w-fit  mx-auto  bg-briteblue">
        <nav class="mb-2">
            <div class="text-lg  flex flex-row mt-2 text-white gap-8  justify-between   font-bold">
                <div class="lg:hidden cursor-pointer" @click.prevent="togglemenu">
                    <i class="material-icons align-middle ml-4 text-white">menu</i>
                </div>
                <div class=" lg:flex lg:flex-row w-full" :class="className">
                    <div class=" border-b-2 hover:bg-gray-100 hover:rounded  p-2 lg:w-fit  lg:border-r-2 border-white">
                        <a class="px-4 border-b-4 hover:text-briteblue border-darkred" href="#">
                            <span>Home</span>
                        </a>
                    </div>
                    <div @click.prevent="departmenttogle" class="border-b-2 p-2 hover:bg-gray-100 hover:rounded  lg:border-r-2 border-white">
                        <a class="px-4  hover:text-briteblue  hover:border-b-4 border-darkred" href="#">
                            <span class="text-one ">Departments</span>
                        </a>
                    </div>
                    <div @click.prevent="whotogle" class="border-b-2 p-2 hover:bg-gray-100 hover:rounded lg:border-r-2 border-white">
                        <a class="px-4   hover:text-briteblue hover:border-b-4 border-darkred" href="#">
                            <span>Who we are</span>
                        </a>
                    </div>
                    <div @click.prevent="ourtogle" class="border-b-2 p-2  hover:bg-gray-100 hover:rounded lg:border-r-2 border-white">
                        <a class="px-4   hover:text-briteblue hover:border-b-4 border-darkred" href="#">
                            <span class="text-one ">Investment sectors</span>
                        </a>
                    </div>
                    <router-link to="/contact" class="border-b-2 p-2 hover:bg-gray-100 hover:rounded  lg:border-r-2 border-white">
                        <a class="px-4   hover:text-briteblue hover:border-b-4 border-darkred" href="#">
                            <span class="text-one ">Contact us</span>
                        </a>
                    </router-link>
                    <router-link to="/resource" class="border-b-2 p-2 hover:bg-gray-100 hover:rounded  lg:border-r-2 border-white">
                        <a class="px-4   hover:text-briteblue hover:border-b-4 border-darkred" href="#">
                            <span>Resource</span>
                        </a>
                    </router-link>
                </div>
                <div class=" border-white cursor-pointer  w-fit flex-row">
                    <i @click.prevent="searchtogle" class="material-icons align-middle mr-4 text-white">search</i>
                </div>
            </div>
        </nav>
        <search :class="searchClass" />
    </div>
    <who_we_are :class="whoClass" @some-event="collback" />
    <departments :class="depClass" @some-event="collback"/>
    <investment_sec :class="ourClass" @some-event="collback" />
</template>
<span class="material-symbols-outdiv ned">

</span>