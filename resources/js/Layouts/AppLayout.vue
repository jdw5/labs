<template>
    <div class="font-cabin">
        <header class="w-full relative shadow-xl bg-slate-800 overflow-hidden">
            <nav class="flex justify-between container mx-auto px-2 sm:px-16">
                <div class="invisible sm:visible flex items-center gap-x-2">
                    <svg @click="changeView(1)" class="w-8 h-8 stroke-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Grid view</title>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    <svg @click="changeView(0)" class="w-8 h-8 stroke-8 stroke-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>List view</title>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                </div>

                <div class="bg-red-500 w-32 h-16">

                </div>
                <button @click="toggleDarkMode" class="group flex flex-row w-fit items-center justify-center relative px-1" title="Dark mode toggle">
                    <transition appear=false
                        enter-active-class="transition ease-in-out duration-500 delay-500"
                        enter-from-class="transform opacity-0 -translate-x-full rotate-90"
                        enter-to-class="transform opacity-100"
                        leave-active-class="transition ease-in-out duration-500 translate-x-[200%] rotate-90"
                        leave-from-class="transform opacity-100 translate-x-full"
                        leave-to-class="transform opacity-0">
                            <svg v-show="!darkMode" id="sun" class="stroke-textDark dark:stroke-textLight group-hover:stroke-primary h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                    </transition>
                    <transition appear=false
                        enter-active-class="transition ease-in-out duration-500 delay-500"
                        enter-from-class="transform opacity-0 -translate-x-full rotate-90"
                        enter-to-class="transform opacity-100"
                        leave-active-class="transition ease-in-out duration-500 translate-x-full rotate-90"
                        leave-from-class="transform opacity-100 translate-x-0"
                        leave-to-class="transform opacity-0">
                            <svg v-show="darkMode" id="moon" class="stroke-textDark dark:stroke-textLight group-hover:stroke-primary h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                    </transition>
                </button>
                

            </nav>
        </header>
        <main class="relative bg-gradient-to-br from-slate-700 to-slate-900 w-full">
            <div class="mx-auto px-2 sm:px-16 py-16 container min-h-screen">
                <slot />
            </div>
        </main>
        <footer class="bg-slate-800 w-full grid grid-cols-1">
            <span class="relative self-center z-10 w-full h-px bg-gradient-to-r from-transparent via-red-500 to-transparent" />
            <div class="container mx-auto px-2 sm:px-16 py-6 flex flex-row justify-between">
                <small class="text-sm font-medium text-white">
                    &copy; Joshua Wallace
                </small>
                <div class="flex flex-row gap-x-2">
                    <a href="https://joshua-wallace.com">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                    <Link href="/">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </Link>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link
    },

    data () {
        return {
            view: 1
        }
    },

    methods: {
        changeView (selected) {
            localStorage.setItem('view', selected);
            this.view = selected;
            this.$emit('changeGrid', this.view)
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