<template>
    <Head title="Labs"/>
    <div class="min-h-screen bg-red-500 dark:bg-black">
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import HomeContainer from '@/Components/HomeContainer.vue'

export default {
    components: {
        HomeContainer,
        Head,
        Link,
    },

    layout: [AppLayout],

    data() {
        return {
        }
    },

    methods: {
    },

    computed: {
    },

    mounted() {
    }

}
</script>

<style>

</style>