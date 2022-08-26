<template>
    <Head title="Labs"/>
    <div class="min-h-screen">
        <TabIdea />
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import TabIdea from '@/Components/Display/TabIdea.vue'


export default {
    components: {
        Head,
        Link,
        TabIdea,
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