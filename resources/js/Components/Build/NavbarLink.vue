<template>
    <div class="relative py-2" @mouseleave="titleHovered = false">
		<h2 @mouseenter="titleHovered = true" class="px-24 text-3xl font-semibold text-dark dark:text-light hover:text-primary dark:hover:text-primary">
			{{ sectionTitle }}
		</h2>
		<div class="absolute top-0 right-0 flex items-center w-24 h-full overflow-hidden translate-x-1/2" aria-hidden="true">
			<transition
				enter-active-class="transition duration-500 ease-in-out delay-100"
				enter-from-class="-translate-x-full opacity-0"
				enter-to-class="opacity-100"
				leave-active-class="transition duration-500 ease-in-out -translate-x-full"
				leave-from-class="opacity-100"
				leave-to-class="opacity-0">
				<span v-show="titleHovered" class="self-center block w-24 h-1 my-auto bg-dark dark:bg-light"></span>
			</transition>
		</div>
		<transition
			enter-active-class="transition duration-300 ease-in-out delay-200"
			enter-from-class="opacity-0"
			enter-to-class="opacity-100"
			leave-active-class="transition duration-300 ease-in-out delay-200"
			leave-from-class="opacity-100"
			leave-to-class="opacity-0">
				<ul v-show="titleHovered" class="absolute top-0 right-0 translate-x-full gap-y-2">
					<li class="px-24" v-for="sub in subsections" :key="sub.id">
						<h3 class="text-xl font-medium text-dark dark:text-light hover:text-primary dark:hover:text-primary whitespace-nowrap">
							{{ sub.title }}
						</h3>
					</li>
				</ul>		
		</transition>
	</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
	components: {
		Link,
	},

	data() {
		return {
			titleHovered: false,
		}
	},

	props: {
		sectionTitle: String,
		sectionHref: String,
		subsections: Array,
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