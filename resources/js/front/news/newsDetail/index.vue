<script setup>
import newscontact from "./newscontact.vue"
</script>
<template>
    <div  class="bg-white text-colorbackground font-body">
        <div class="grid md:grid-cols-8">
            <div class="md:col-span-2 text-left">
                 <h4 class=" mt-16 "></h4>
                
            </div>
            <main class="px-16 py-6 bg-white md:col-span-5">
                <header>
                    <div>
                        <h4 class="font-light pb-2 mt-12 border-b border-gray-200">kombolcha investment page</h4>
                        <h2 class="text-5xl text-gray-700 p-8 font-bold">WFP warns of major setback to aid efforts as fighting spreads in Sudan</h2>
                        <div class="mt-8 grid lg:grid-cols-1 gap-10">
                        <div class="card hover:shadow-lg">
                            <img src="asset/errorimage/industrypark.jpg" class="w-full h-max-96  object-cover" alt="">
                        </div>                        
                    </div>
                    <div class="m-4">
                                    <span class="font-bold">wednsday, 21-02-2024</span>
                                </div>
                   <div class="grid grid-cols-5 mt-8" >
                                    <div class="col-span-4 p-4 text-xl text-gray-800">
                                        <p>PORT SUDAN – The United Nations World Food Programme (WFP) has been forced to temporarily suspend food assistance in some parts of Gezira State, as fighting spreads south and east of Sudan’s capital Khartoum. This is a major setback to humanitarian efforts in the country’s breadbasket, where WFP had been regularly providing aid to over 800,000 people, including many who escaped the fighting in Khartoum.</p>
                                        <p>“We already lost our homes in Khartoum and watched as our lives were destroyed before our eyes. Now we are forced to flee yet again, leaving behind what little we had left. Hundreds of thousands are fleeing on foot, with nowhere to go. We are so worried about those who already lived through the horrors in Khartoum, and now find themselves trapped in Wad Madani with no way out,” said Karim Abdelmoneim, WFP’s Emergency Coordinator for Gezira State. </p>
                                        <p>“A place of refuge has now become a battleground in a war that has already taken a horrific toll on civilians. This has forced WFP to put on hold food deliveries in some locations in Gezira State at a time when people need our help the most,” said Eddie Rowe, WFP Representative and Country Director in Sudan.</p>
                                        <p>Around 300,000 people have fled Gezira State in a matter of days, since clashes erupted on Friday. Ongoing fighting makes it extremely challenging for humanitarian agencies to safely deliver assistance, especially with more and more people on the move, fleeing for their lives.</p>
                                        <newscontact/>
                                    </div>
                                </div>
                    </div>
                </header>
            </main>
        </div>
    </div>
</template>

<style scoped>
p{
    padding: 16px;
}
</style>