<script setup>
// Array of Props Define
defineProps({
    title: String
})

</script>
<template>
      <Head :title="`- ${$page.component}`"/>
     <div class="container mx-auto">
        <h1 class="text-5xl md:text-7xl text-center py-6 text-blue-600">
            {{ $page.component }} Page
        </h1>
    </div>
</template>
