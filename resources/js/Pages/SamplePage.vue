<template>
    <AppLayout>
        <div class="container">
            <h2>Sample Page</h2>
            <button class="btn btn-primary" @click="fetchSampleData" :disabled="isLoading">データを取得</button>
            <p v-if="error" class="error">{{ error }}</p>
            <div v-if="isLoading">Loading...</div>
            <div v-if="!isLoading && sampleData.length > 0">
                <BaseCard
                v-for="item in sampleData"
                :key="item.id"
                :title="item.sample_str"
                :description="item.sample_num"
                :createdAt="item.created_at"
                />
            </div>
        </div>
    </AppLayout>
</template>

<script lang="ts" setup>
import { useSampleData } from "@/Composables/useSampleData";
import BaseCard from "@/Components/BaseCard.vue";
import { SampleData } from "@/Types/SampleTypes";


const { initialSamples } = defineProps<{
    initialSamples: SampleData[];
}>();


const { sampleData, isLoading, error, fetchSampleData } = useSampleData( initialSamples );

</script>

<style>
.error {
    color: red;
}
</style>
