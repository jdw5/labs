<template>
    <Head title="Loaders"/>
    <AppLayout @changeGrid="changeView">
        <div class="gap-4 min-h-screen grid grid-cols-1 sm:grid-cols-4" :class="layout">

        </div>
    </AppLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        Head,
        Link,
        AppLayout,
    },

    data() {
        return {
            view: 0
        }
    },

    methods: {
        changeView (e) {
            this.view = e
        }
    },

    computed: {
        layout () {
            return !this.view ?
            '' 
            : 'grid-flow-row';
        }
    },

    mounted() {
        if (localStorage.view) {
            this.view = localStorage.view;
        }
    }

}
</script>

<style>

</style>