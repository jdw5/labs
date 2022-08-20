<template>
    <div class="font-cabin">
        <div class=" bg-gradient-to-br from-gray-50 to-neutral-200 dark:from-slate-700 dark:to-slate-900">
            <header class="fixed z-50 w-full bg-transparent">
                <nav class="container flex px-4 py-4 mx-auto grow-0">	
                    <div>
                        Logo
                    </div>
                    <button @click="displayMenu = !displayMenu" role="menubutton" id="Menu" :title="displayMenu ? 'Close menu' : 'Open menu'" class="z-50 ml-auto transition duration-300 ease-in-out group" :class="displayMenu ? 'translate-y-1' : ''">
                        <span class="block w-8 h-1 transition-all duration-300 ease-in-out rounded-lg bg-darkMenu group-hover:bg-primary dark:bg-lightMenu" :class="displayMenu ? '-rotate-45 translate-y-1' : ''" ></span>
                        <span class="block w-8 h-1 bg-darkMenu group-hover:bg-primary dark:bg-lightMenu rounded-lg my-1.5 transition-all duration-300 ease-in-out" :class="displayMenu ? 'rotate-45 -translate-y-1.5' : ''" ></span>
                    </button>
                </nav>
            </header>
            <MobileMenu :modelValue="displayMenu" 
                @update:modelValue="displayMenu = false"
            />

            <main class="relative w-full h-screen max-h-screen">
                <slot />
            </main>
        </div>
    </div>
</template>

<script>

import { Inertia, Link } from '@inertiajs/inertia-vue3'
import NavbarLink from '@/Components/Build/NavbarLink.vue'
import MobileMenu from '@/Layouts/MobileMenu.vue'


export default {
    components: {
        Link,
		NavbarLink,
        MobileMenu,
    },
	
	data() {
        let darkMode = localStorage.getItem('darkMode') == 'true'
		return {
			displayMenu: false,
			darkMode,
			elementScrolled: 0,
			pageSwitched: false,
			logoChange: false,
		}
	},

	methods: {

	},

	mounted() {
	}
}
</script>

<style>



</style>