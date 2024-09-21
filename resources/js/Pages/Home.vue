<script setup>
import { Head } from '@inertiajs/vue3';
/*  Layouts Making and Usage
    import Layout from '../Layouts/Layout.vue';
    defineOptions({
        layout: Layout
    });
*/

// Array of Props Define
defineProps({
    title: String
})

</script>

<template>
    <Head>
        <title>{{ title }}</title> 
        <meta head-key="description" name="description" content="This is the Home page meta">
    </Head>
    <div class="container mx-auto">
        <h1 class="text-5xl md:text-7xl text-center py-6 text-blue-600">
            {{ title }} Page
        </h1>
    </div>
</template>
