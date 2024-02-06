<script setup>
const emit = defineEmits(['someEvent'])
const handelevent = (event)=>{
    emit('someEvent');
}
</script>

<template>
    <div class="absolute dropdowns bg-white border-2 border-gray-200 rounded shadow-lg shadow-sky-200">
        <div @click.prevent="handelevent" class="grid sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4">
            <div class="border-r-2 hidden lg:flex border-gray-100">
                <div class="bg-gray-200 rounded m-8">
                    <h2 class="text-3xl bold mt-3 text-sky-800 text-center p-4"><strong>Our Office</strong></h2>
                    <p class="p-8 text-md">In Kombolcha Rijopolitan City Administration, 
                        Department of Industry and Investment will increase investment options in tourist attractions,
                         projects and commercial service activities in our city.</p>
                </div>
            </div>
            <div class="flex-item p-8">
                <h2 class="text-xl bold mt-7 text-gray-950"><strong>Departments</strong></h2>
                <div class=" block">
                    <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                        <router-link to="/aboutdeps" class="hover:text-sky-900 p-1" href="#history">Department head</router-link>
                        <router-link to="/expansion" class="hover:text-sky-900 p-1">Expansion of investment</router-link>
                        <router-link to="/development" class="hover:text-sky-900 p-1" href="#weather">Industry Development Technology Group</router-link>
                        <router-link to="/minirals" class="hover:text-sky-900 p-1" href="#advantages">Mining Operations Licensing and Management Group</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.dropdowns{
    z-index: 10;
}
</style>

