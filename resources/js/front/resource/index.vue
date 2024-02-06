<script setup>
import sidbar from "../components/sidebar.vue"
import resource from "./resource.vue";
</script>

<template>
    <div class="grid grid-cols-6 m-16">
        <div class="col-span-4">
            <h1 class="border-b-2 border-gray-200 text-2xl p-5 font-bold text-darkred">Resources</h1>
            <p class="text-md p-4">you can download our resources with pdf file by clicking </p>
            <resource/>
            <resource/>
            <resource/>
            <resource/>
            <resource/>
            <resource/>

            
        </div>
        <div class="col-span-2">
            <sidbar/>
        </div>
    </div>
</template>