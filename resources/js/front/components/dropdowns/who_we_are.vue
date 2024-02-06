<script setup>
const emit = defineEmits(['someEvent'])
const handelevent = (event) => {
    emit('someEvent');
}

</script>

<template>
    <div @click.prevent="handelevent" class="absolute dropdowns bg-white border-2 border-gray-200 rounded shadow-lg shadow-sky-200">
    <div  class="grid sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4">
        <div class="border-r-2 hidden lg:flex border-gray-100">
            <div class="bg-gray-200 rounded m-8" >
                <h2 class="text-3xl bold mt-3 text-sky-800 text-center p-4"><strong>Who We Are</strong></h2>
                <p class="p-8 text-md">In Kombolcha Rijopolitan City Administration,
                    the Department of Industry and Investment will increase
                    investment options in tourist attractions,
                    projects and commercial service activities in our city.</p>
            </div>
        </div>
        <router-link to="/Aboutekocha" class="flex-item p-8">
            <h2 class="text-xl bold mt-7 text-gray-950"><strong>About Kombolcha City</strong></h2>
            <div class=" block">
                <div class="mt-8 flex flex-col text-md ml-3 text-sky-700">
                    <a class="hover:text-sky-900 p-1" href="#history">History</a>
                    <a class="hover:text-sky-900 p-1" href="#location">Geographical location</a>
                    <a class="hover:text-sky-900 p-1" href="#weather">Weather condition</a>
                    <a class="hover:text-sky-900 p-1" href="#advantages">Comparative advantages</a>
                </div>
            </div>
        </router-link>
        <router-link to="/aboutdeps" class="flex-item p-8">
            <h2 class=" bold text-xl  mt-5 text-gray-950"><strong> Industry & investment department</strong></h2>
            <div class="mt-8 flex flex-col text-md ml-3 text-sky-700 ">
                <a  class="hover:text-sky-900 p-2" href="#aboutus">About Us</a>
                <a  class="hover:text-sky-900 p-2" href="#mission">Mission</a>
                <a  class="hover:text-sky-900 p-2" href="#vision" >Vision</a>
            </div>
        </router-link>
    </div>
    </div>
</template>

<style>

</style>
<style>
.dropdowns {
    z-index: 10;
}
</style>