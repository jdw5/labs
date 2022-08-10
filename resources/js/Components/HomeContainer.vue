<template>
    <Link :href="href" @mouseenter="showText=true" @mouseleave="showText=false" class="relative group rounded bg-4x animate-gradient transition duration-500 ease-in-out hover:-translate-y-1" :style="`${bg}`" :class="classes">
        <div class="flex flex-row items-center sm:justify-center rounded-sm h-full">
            <div class="group z-1 text-left sm:text-center">
                <p class="font-bold text-slate-700 text-lg sm:text-xl mt-8">
                    {{ title }}
                </p>
                <div class="overflow-hidden h-16">
                <transition
                    enter-active-class="transition ease-in-out duration-500"
                    enter-from-class="opacity-0 -translate-y-full"
                    enter-to-class="opacity-100"
                    leave-active-class="transition ease-in-out duration-500"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0 -translate-y-full">

                    <p v-show="showText" class="font-light text-gray-600 text-xs sm:text-sm">
                        {{ text }}
                    </p>
                </transition>
                </div>
            </div>
        </div>
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link
    },

    data () {
        return {
            showText: false
        }
    },

    props: {
        bg: {
            type: String,
            required: true,
        },

        grid: {
            type: String,
            required: true
        },

        title: {
            type: String,
            default: 'Example',
        },

        text: {
            type: String
        },

        href: {
            type: String
        },

        view: {
            type: Boolean
        }
    },

    computed: {
        classes() {
            return !this.view ? 
            ''
            : `${this.grid} px-4`
        }
    },

    mounted() {

    }

}
</script>

<style>
</style>