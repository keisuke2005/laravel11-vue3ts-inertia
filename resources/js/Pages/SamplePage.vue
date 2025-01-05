<template>
    <div class="container mt-5">
        <h1 class="text-primary">{{ message }}</h1>
        <button class="btn btn-success" @click="checkType">Click Me</button>
    </div>
</template>
<script lang="ts">
import { defineComponent, PropType } from 'vue';

export default defineComponent({
    name: 'SamplePage',
    props: {
        message: {
            type: String as PropType<string>,
            required: true,
        },
    },
    methods: {
        checkType() {
            const value: number = 1;
            console.log(value);
            const unusedVar = 'This is not used';
            console.log(unusedVar);
            
        },
    },
});
</script>



<style scoped>

</style>
