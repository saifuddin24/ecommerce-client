<script setup lang="ts">
import SiteDrawer from "@/js/components/SiteDrawer.vue"
import SiteHeader from "@/js/components/SiteHeader.vue";
import SiteFoooter from "@/js/components/SiteFoooter.vue";
</script>
<template>

    <SiteHeader class="bg-gray-50 shadow-md" />
    <SiteDrawer class="bg-gray-50 shadow-md" />

    <main class="flex-grow p-4 ml-64 mt-16 border border-red-300 min-h-[500px]">
      <slot></slot>
    </main>
<!--    <SiteFoooter></SiteFoooter>-->


</template>
<style scoped>

</style>
