<script setup>
import { Head } from '@inertiajs/vue3';
// Array of Props Define
defineProps({
    title: String
})

</script>
<template>
     <Head title="Services" />
     <div class="container mx-auto">
        <h1 class="text-5xl md:text-7xl text-center py-6 text-blue-600">
            {{ title }} Page
        </h1>
    </div>
</template>
