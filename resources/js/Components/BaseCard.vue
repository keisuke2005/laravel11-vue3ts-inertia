<template>
    <div class="card my-3">
        <div class="card-body">
            <h3 class="card-title">{{ title }}</h3>
            <p class="card-text">{{ description }}</p>
            <p class="text-muted small mb-0">{{ createdAt }}</p>
        </div>
    </div>
</template>

<script lang="ts" setup>
defineProps({
    title: String,
    description: Number,
    createdAt: String,
});
</script>