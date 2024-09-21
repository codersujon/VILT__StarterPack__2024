<template>
    <div>
        <h1 class="text-5xl text-center py-8 bg-slate-700 text-white">Blog Page</h1>
        <p class="text-5xl text-center text-blue-700 py-5">Hi, My name is {{ user }}</p>
    </div>
</template>

<script setup>
    defineProps({
        user: String
    })
</script>