<template>
    <Head title="Makai"/>
    <img class="absolute object-cover w-full h-full" src="/images/pages/beach1.jpg" />
    <div class="relative h-full px-16">
        <div class="flex items-center w-full h-full">Hi</div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import Layout from '@/PageTemplates/Makai/Layout.vue'

export default {
    components: {
        Head,
        Link,
    },

    layout: [Layout],

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