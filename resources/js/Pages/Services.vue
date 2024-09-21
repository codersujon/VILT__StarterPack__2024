<template>
    <div>
        <h1 class="text-5xl text-center py-8 bg-slate-700 text-white">{{ title }} Page</h1>
        <p class="text-5xl text-center text-blue-700 py-5">Welcome to {{ title }} page</p>
    </div>
</template>

<script setup>
    defineProps({
        title: String
    })
</script>