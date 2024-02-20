<script setup lang="ts">
  const size_variations = ['xs','sm','md','lg','xl'];
  const color_variations = [
    'primary',
    'secondary',
    'success',
    'info',
    'warning',
    'danger'
  ];

  const variations = [ 'size', 'color', 'type' ];

  const defaults =  {};

  variations.forEach((v) => {
    defaults[v] =  {
        color: v === 'color' ? null:'primary',
        type: v === 'type' ? null:'',
        size: v === 'size' ? null:'md',
    }
  });

  const btn_sizes = size_variations.map( (v) => {
    return {
      class:`btn-${v}`
    }
  });

  const btn_colors = color_variations.map( (v) => {
    return {
      class:`btn-${v}`
    }
  });

  const btn_variations = variations.map((v) => {



  })


</script>

<template>

  <pre>{{defaults}}</pre>

  <div class="flex flex-col gap-4">
    <div class="border p-4 shadow-md">
      <h1 class="text-lg border-b -mx-4 px-4 py-2 bg-gray-100 -mt-4 font-semibold">Buttons</h1>
      <div class="flex flex-wrap flex-col">
        <h2 class="mt-5">Button Sizes</h2>
        <div class="flex flex-wrap gap-4 items-center border p-4 shadow">
          <div v-for="btn in btn_sizes"  class="border px-4 py-2">
            <button class="btn btn-primary btn-icon" :class="btn.class">
              <font-awesome-icon icon="fa-solid fa-moon" />
            </button>
            <div>{{ `btn btn-icon ${btn.class}` }}</div>
          </div>
        </div>
      </div>
    </div>

  </div>

</template>


<style scoped>

</style>
