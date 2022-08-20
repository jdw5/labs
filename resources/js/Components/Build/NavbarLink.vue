<template>
    <Link class="relative flex flex-row items-center justify-center w-64 overflow-hidden group sm:w-96" :href="`/${href}`">
		<div class="absolute top-0 left-0 w-full transition duration-300 ease-in-out -translate-x-full rounded-t bg-lightHover dark:bg-darkHover h-2/3 group-hover:-translate-x-0" aria-hidden="true"/>
        <div class="absolute bottom-0 right-0 w-full transition duration-300 ease-in-out translate-x-full rounded-b bg-lightHover dark:bg-darkHover h-2/3 group-hover:translate-x-0" aria-hidden="true"/>
        <p class="relative py-2 text-3xl font-semibold transition duration-300 ease-in-out z-1 sm:py-4" :class="onPage ? 'text-primary' : 'text-textDark dark:text-textLight group-hover:text-textDarkHover dark:group-hover:text-textLightHover'">
            {{ title }}
        </p>
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
	components: {
		Link,
	},

	props: {
		title: String,
		href: String,
		scrolled: Number,
		position: Number,
        delay: String,
		onPage: Boolean,
	},

	methods: {
		scrollTo() {
			var element = document.getElementById(this.href)
			element.scrollIntoView({behavior: "smooth", block: "end"})
		},
	},
	

}
</script>

<style>

</style>