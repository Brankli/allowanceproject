<script setup>
import heronews from './component/heronews.vue';
import recentListVue from './component/recentList.vue';
import newsHeader from './component/newsHeader.vue';
</script>
<template>
    <div class="m-8 ml-0 border-b-2 border-gray-100">
        <newsHeader />
    </div>
    <div class="grid lg:grid-cols-4 gap-4">
        <div class="lg:col-span-2">
            <heronews />
        </div>
        <div class="lg:col-span-2">
            <recentListVue />
            <recentListVue />
            <recentListVue />
            <recentListVue />
            <recentListVue />
        </div>
    </div>
</template>

