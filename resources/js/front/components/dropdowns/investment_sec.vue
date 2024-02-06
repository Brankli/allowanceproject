<script setup>
const emit = defineEmits(['someEvent'])
const handelevent = (event) => {
    emit('someEvent');
}

</script>

<template>
    <div  class="absolute dropdowns bg-white border-2 border-gray-200 rounded shadow-lg shadow-sky-200">
    <div @click.prevent="handelevent" class="grid sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4">
        <div class="border-r-2 hidden lg:flex border-gray-100">
            <div class="bg-gray-200 rounded m-8">
                <h2 class="text-3xl bold mt-3 text-sky-800 text-center p-4"><strong>Our works</strong></h2>
                <p class="p-8 text-md">By building the capacity of institutions
                    that support the development of the city's
                    industry and investment and by supporting
                    technology, ensure the rapid development
                    and continuity of the sector and accelerate
                    the economic structural transition of the city.</p>
            </div>
        </div>
        <router-link to="/ourwork" class="flex-item p-8">
            <div class=" block">
                <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                    <h2 class="text-xl p-1 hover:text-sky-900 font-bold mt-3">In agro processing sectors</h2>
                    <a class="hover:text-sky-900 p-1" href="#history">Processing of meat and meat products;</a>
                    <a class="hover:text-sky-900 p-1" href="#location">Processing of milk and milk products;</a>
                    <a class="hover:text-sky-900 p-1" href="#weather">Manufacturing food and food products;</a>
                    <a class="hover:text-sky-900 p-1" href="#advantages">Fabrication of leather and leather products;</a>
                    <a class="hover:text-sky-900 p-1" href="#advantages">Fruit and vegetable processing,</a>
                </div>
                <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                    <h2 class="text-xl p-1 hover:text-sky-900 font-bold mt-3">In chemical and construction sectors</h2>
                    <a class="hover:text-sky-900 p-1" href="#history">In textile and clothing sectors</a>
                    <a class="hover:text-sky-900 p-1" href="#location">Wood and steel sectors</a>
                </div>
            </div>
        </router-link>
        <router-link to="/ourwork" class="flex-item p-8">
            
            <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                <h2 class="text-xl p-1 hover:text-sky-900 font-bold mt-3">In the hotel and tourism sector</h2>
                <a class="hover:text-sky-900 p-1" href="#history">Star hotels</a>
                <a class="hover:text-sky-900 p-1" href="#location">Guest accommodation</a>
                <a class="hover:text-sky-900 p-1" href="#history">Lodges </a>
                <a class="hover:text-sky-900 p-1" href="#location">Mall</a>
            </div>
            <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                <h2 class="text-xl p-1 hover:text-sky-900 font-bold mt-3">Social sector</h2>
                <a class="hover:text-sky-900 p-1" href="#history">In animal breeding and fattening sector</a>
            </div>
        </router-link >
        <router-link to="/ourwork" class="flex-item p-8">
                <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                    <h2 class="text-xl p-1 hover:text-sky-900 font-bold mt-3">Construction sectors</h2>
                    <a class="hover:text-sky-900 p-1" href="#history">Real estate</a>
                    <a class="hover:text-sky-900 p-1" href="#location">Construction machinery rental</a>
                </div>
                <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                    <h2 class="text-xl p-1 hover:text-sky-900 font-bold mt-3">Urban agriculture sector</h2>
                    <a class="hover:text-sky-900 p-1" href="#history">In animal breeding and fattening sector</a>
                </div>
                <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                    <h2 class="text-xl p-1 hover:text-sky-900 font-bold mt-3">Social sectorr</h2>
                    <a class="hover:text-sky-900 p-1" href="#history">In animal breeding and fattening sector</a>
                </div>
            </router-link >
        </div>
    </div>
</template>

<style>
.dropdowns {
    z-index: 10;
}
</style>