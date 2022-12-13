<template>
    <Head title="Labs"/>
    <div class="min-h-screen">
        <TabIdea />
        <TabIdea2 />
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import TabIdea from '@/Components/Display/TabIdea.vue'
import TabIdea2 from '@/Components/Display/TabIdea2.vue'


export default {
    components: {
        Head,
        Link,
        TabIdea,
        TabIdea2,
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