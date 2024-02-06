<script setup>
import sidbar from "./components/sidebar.vue"
import home from './news/home.vue';
import recentList from "./news/component/recentList.vue";
</script>
<template>
    <div class="grid sm:grid-cols-9 gap-8 mt-8 ">
        <div class="sm:cpl-span-1">
        </div>
        <div class="sm:col-span-5 border-b-2 border-gray-200">
            <home />
            <div class="text-end">
                <router-link to="news"  class="bg-sky-700 hover:bg-sky-600 text-white p-5 text-xl rounded font-bold">More</router-link >
            </div>
        </div>
        <div class="col-span-2">
            <sidbar/>
        </div>
    </div>
    <div class="grid sm:grid-cols-9 gap-8">
        <div class="cpl-span-1">

        </div>
        <div class="sm:col-span-5 border-b-2 border-gray-200">
            <div class="w-full m-8 ml-0 border-b-2 border-gray-200">
                <h1 class=" text-darkred  p-4 border-b-4 border-darkred w-fit font-bold text-2xl">Announcments</h1>
            </div>
            <recentList />
            <recentList />
            <recentList />
            <recentList />
            <div class="text-end">
                <router-link to="/news"  class="bg-sky-700 hover:bg-sky-600 text-white p-5 text-xl rounded font-bold">More</router-link >
            </div>
        </div>
        <div class="sm:col-span-2">
        </div>
    </div>
    <div class="grid sm:grid-cols-9 gap-8 mb-16">
        <div class="sm:col-span-1">

        </div>
        <div class="sm:col-span-5 border-b-2 border-gray-200">
            <div class="w-full  m-8 ml-0 border-b-2 border-gray-200">
                <h1 class=" text-darkred  p-4 border-b-4 border-darkred w-fit font-bold text-2xl">Events</h1>
            </div>
            <recentList />
            <recentList />
            <recentList />
            <recentList />
            <div class="text-end ">
                <router-link to="/news" class="bg-sky-700 hover:bg-sky-600 text-white p-5 text-xl rounded font-bold">More</router-link >
            </div>
        </div>
        <div  class="sm:col-span-2 ">
        </div>
    </div>
</template>