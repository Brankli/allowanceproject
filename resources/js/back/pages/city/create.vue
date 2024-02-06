<script setup>
import { useLocalStorage } from "@vueuse/core";
import axios from "axios";
import { ref,onMounted  } from "vue";
const token = useLocalStorage("token", " ");
const city = ref(" ");
const low = ref("");
const meduim = ref("");
const high = ref("");
const desertalw = ref("");
const check = ref(false);

function postcity() {
  axios.defaults.headers.common["Authorization"] = token.value;
  axios.post(`api/create_city` ,{
      city_name:city.value,
      low:low.value,
      medium:meduim.value,
      high:high.value,
      desertalw:desertalw.value,
      status:check.value,
    })
    .then((response) => {
      console.log(response);
    })
    .catch((error) => {
      console.log(error);
    });
}
onMounted(() => {
  postcity();
});
</script>













 <template>
  <name name="Post News" />
  <div class="bg-gray-100 p-16">
    <div
      class="border-2 bg-white border-gray-300 shadow-lg max-w-4xl mx-auto rounded shadow-gray-100"
    >
      <div class="w-full bg-white rounded-lg md:mt-0 xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-lg text-sky-700 leading-tight tracking-wide">
            please Add new city
          </h1>
          <form class="mb-6">
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
                >capital_city name</label
              >
              <input
                type="text"
                v-model="city"
                id="info"
                rows="4"
                name="city_name"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder="enter city name"
              />
            </div>

            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900">low
              </label>
              <input
                type="text"
                v-model="low"
                name="low"
                id="info"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder="enter scale name"
              />
            </div>
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
                >medium
              </label>
              <input
                type="text"
                v-model="meduim"
                id="info"
                rows="4"
                name="medium"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "
              />
            </div>
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
                >high
              </label>
              <input
                type="text"
                v-model="high"
                id="info"
                name="high"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "
              />
            </div>

            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
              >
                desertalw</label
              >
              <input
                type="checkbox"
                v-model="desertalw"
                name="desertalw"
                id="info"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "
              />
            </div>
            <div class="mb-6">
              <label
                for="info"
                class="block mb-2 text-sm font-medium text-gray-900"
              >
                status</label
              >
              <input
                type="checkbox"
                v-model="check"
                id="info"
                name="check"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                placeholder=" "/>
            </div>
              <router-link to="/">
           <button @click.prevent="postcity()" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Submit city</button>
           </router-link>
            </form>
        </div>
      </div>
    </div>
  </div>
</template>
