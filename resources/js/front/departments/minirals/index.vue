<script setup>
import depProfile from '../components/depProfile.vue';
</script>

<template>
    <div class="grid md:grid-cols-3 sm:m-16">
        <div class="md:col-span-1 border-r-2 border-gray-200">
            <depProfile/>
        </div>
        <div class="md:col-span-2">
            <div class="lg:flex  lg:flex-row gap-8 m-8">
                <img src="asset/images/binocular.png" class="w-32 h-32  rounded-full" alt="">
                <div>
                    <h1 class="font-bold text-4xl text-sky-500">Vision</h1>
                    <p class="font-roboto text-md pt-4">To see the development of our city's mineral resources and the improvement of the living standards of the society</p>
                </div>
            </div>
            <div class="lg:flex  lg:flex-row gap-8 m-8">
                <img src="asset/images/bulb.jpg" class="w-32 h-32 rounded-full" alt="">
                <div >
                    <h1 class="font-bold text-4xl text-red-500">Mission</h1>
                    <p class="font-roboto text-md pt-4">By researching the size and distribution of our mineral resources, increasing the participation of private investors in the sector and pooling expertise, increasing the income of the urban community from mineral resources.</p>
                </div>
            </div>
            <div class="lg:flex  lg:flex-row gap-8 m-8">
                <img src="asset/images/goal.png" class="w-32 h-32 rounded-full" alt="">
                <div>
                    <h1 class="font-bold text-4xl text-gray-950">Goal</h1>
                    <p class="font-roboto text-md pt-4">Strengthening the legal system of mining resources so that they can increase the resource stock of the community in the city.</p>
                </div>
            </div>

        </div>
    </div>
</template>


