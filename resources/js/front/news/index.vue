<script setup>
import Card from "./component/newsCard.vue"
import newsHeader from "./component/newsHeader.vue";
import pagitntion from "./component/pagitnation.vue"

</script>
<template>
    <div class="bg-gray-100 text-colorbackground font-body">
        <div class="">
            <main class="px-16 py-6 bg-white ">
                <header> 
                    <div>
                         <div class="flex border-b border-gray-200 justify-between">
                            <newsHeader/>
                            <h3 class="font-semibold text-2xl pb-2 mt-12 ">Latest <span class="bg-red-600 p-4 text-white max-w-fit">News</span></h3>
                         </div>
                        <div class="mt-8 grid lg:grid-cols-4 gap-6">
                            <Card />
                            <Card />
                            <Card />
                            <Card />
                            <Card />
                        </div>
                    </div>
                </header>

                <pagitntion/>
            </main>
        </div>
    </div>
</template>