<script setup lang="ts">

</script>
<template>
    <div class="border h-16 w-full flex fixed left-0 right-0 top-0 ">
        <div class="w-64 border-r flex justify-center items-center">
          <div class="font-bold text-2xl">ECOMMERCE</div>
        </div>

        <div class="px-4 flex-grow flex justify-between items-center">

          <button class="bg-gray-200 hover:bg-gray-300 rounded-full size-10">
            <font-awesome-icon icon="fa-solid fa-bars" />
          </button>


          <div class="flex justify-between items-center gap-2">

            <button class="bg-gray-200 hover:bg-gray-300 rounded-full size-10 ml-4">
              <font-awesome-icon icon="fa-solid fa-moon" />
            </button>

            <div class="bg-sky-200 hover:bg-sky-300 rounded-md h-12 flex items-center gap-1 ml-4 px-1 cursor-pointer overflow-hidden">

              <button class="bg-gray-200 hover:bg-gray-300 rounded-full size-10 flex-none">
                <font-awesome-icon icon="fa-regular fa-user" />
              </button>
              <span class="ml-2 flex-none line-clamp-1">Saif Uddin</span>
              <font-awesome-icon icon="fa-solid fa-caret-down" />

            </div>


            <div class="hidden">
              USER MENU
              <div>--Avatar--</div>
              <div>--USER NAME--</div>
              <div class="hidden">
                <div>USER DETAILS</div>
                <ul>
                  <li>--USER ACTIONS--</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
    </div>
</template>


<style scoped>

</style>
