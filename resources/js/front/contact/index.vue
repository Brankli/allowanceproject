<script setup>
import contactform from "./contactus.vue";
</script>

<template>
  <div class="grid grid-cols-2 m-16 gap-8">
    <div class="col-span-1 justify-center ">
      <div class="p-16">
        <h1 class="font-bold text-4xl text-sky-600 p-4">How Can We Help you?</h1>
        <p> you can send your question and get ansewer throught your email from department heads </p>
      </div>
    </div>
    <div class="col-span-1  font-roboto ">
    <contactform class="col-span-1 justify-center" />
  </div>
</div>
</template>