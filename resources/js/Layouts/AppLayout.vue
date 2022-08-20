<template>
    <div class="font-cabin bg-gradient-to-br from-slate-700 to-slate-900 " :class="darkMode ? 'dark' : ''">
        <header class="fixed z-50 w-full bg-transparent">
            <nav class="container flex flex-row justify-between w-full px-4 py-4 mx-auto grow-0">	
                <a href="https://joshua-wallace.com" class="flex flex-row items-center justify-center px-1 gap-x-2 group">
                    <button id="home">
                        <svg class="w-6 h-6 stroke-textDark dark:stroke-textLight group-hover:stroke-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </button>
                    <label for="home" class="font-medium cursor-pointer text-dark dark:text-light group-hover:text-primary">
                        Home
                    </label>
                </a>
                <h1 @click="logoClicked" class="block cursor-pointer shrink-0" role="button" tabindex=0 > 
                    <img v-if="darkMode" @click="displayMenu = false" class="h-12" src="/images/logotight.png" alt="logo">
                    <img v-else @click="displayMenu = false" class="h-12" src="/images/logotight_dark.png" alt="logo">
                    <p class="tracking-widest text-center uppercase text-dark dark:text-light">Labs</p>
                </h1>
                <div class="flex flex-row gap-x-4">
                    <button @click="toggleDarkMode" class="relative flex flex-row items-center justify-center px-1 group w-fit" title="Dark mode toggle">
                        <transition
                            enter-active-class="transition duration-500 ease-in-out delay-500"
                            enter-from-class="transform rotate-90 -translate-x-full opacity-0"
                            enter-to-class="opacity-100"
                            leave-active-class="transition ease-in-out duration-500 translate-x-[200%] rotate-90"
                            leave-from-class="translate-x-full opacity-100"
                            leave-to-class="opacity-0">
                                <svg v-show="!darkMode" id="sun" class="w-6 h-6 stroke-textDark dark:stroke-textLight group-hover:stroke-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                        </transition>
                        <transition
                            enter-active-class="transition duration-500 ease-in-out delay-500"
                            enter-from-class="transform rotate-90 -translate-x-full opacity-0"
                            enter-to-class="transform opacity-100"
                            leave-active-class="transition duration-500 ease-in-out rotate-90 translate-x-full"
                            leave-from-class="transform translate-x-0 opacity-100"
                            leave-to-class="transform opacity-0">
                                <svg v-show="darkMode" id="moon" class="w-6 h-6 stroke-textDark dark:stroke-textLight group-hover:stroke-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                        </transition>                        
                    </button>
                    <button @click="displayMenu = !displayMenu" role="menubutton" id="Menu" :title="displayMenu ? 'Close menu' : 'Open menu'" class="z-50 transition duration-300 ease-in-out group" :class="displayMenu ? 'translate-y-1' : ''">
                        <span class="block w-8 h-1 bg-darkMenu group-hover:bg-primary dark:bg-lightMenu rounded-lg mb-1.5 transition-all duration-300 ease-in-out" :class="displayMenu ? '-rotate-45 translate-y-1' : ''" ></span>
                        <span class="block w-8 h-1 bg-darkMenu group-hover:bg-primary dark:bg-lightMenu rounded-lg mb-1.5 transition-all duration-300 ease-in-out" :class="displayMenu ? 'rotate-45 -translate-y-1.5' : ''" ></span>
                        <span class="block w-8 h-1 transition-all duration-300 ease-in-out rounded-lg bg-darkMenu group-hover:bg-primary dark:bg-lightMenu" :class="displayMenu ? 'w-0' : ''" />
                    </button>
                </div>
            </nav>
        </header>
        <MobileMenu :modelValue="displayMenu" />

        <main class="relative w-full">
            <div class="container min-h-screen px-4 py-16 mx-auto">
                <slot />
            </div>
        </main>
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
		toggleDarkMode() {			
			this.darkMode = !this.darkMode
            if (this.darkMode) {
			    localStorage.setItem("darkMode", "true")
            } else {
                localStorage.setItem("darkMode", "false")
            }
		},

		isOnPage (url) {
			let ver = 0
			let urlMod = url.split("/").filter(l => l)[ver]
			let currentUrl = window.location.pathname.split("/").filter(t => t)[ver]
			return urlMod === currentUrl
		},

		logoClicked() {
			let ver = 0
			let urlMod = ''.split("/").filter(l => l)[ver]
			let currentUrl = window.location.pathname.split("/").filter(t => t)[ver]
			if (urlMod === currentUrl) {
				window.scrollTo({ top: 0, behavior: 'smooth' });
			} else {
				this.$inertia.visit('/')
			}
		}
	},

	mounted() {
		// this.darkMode = (localStorage.getItem("darkMode") === 'true')
        console.log(this.darkMode)
	}
}
</script>

<style>



</style>