<template>
    <div class="border-2 border-gray-300 shadow-lg rounded shadow-gray-100">
        <div class="w-full  bg-white rounded-lg   md:mt-0 xl:p-0 ">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-lg  text-sky-700 leading-tight tracking-wide">
                  Contact ask any queston rearding with our service
                </h1>
                <form class="mb-6">
                  <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Abebe@gmail.com" required>
                  </div>
                  <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone number</label>
                    <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="0911111111" required>
                  </div>
                  <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question</label>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none" placeholder="Your question..."></textarea>
                  </div>
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Send question</button>
                </form>
              </div>
            </div>
      </div>
</template>

