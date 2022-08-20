<template>
    <div class="relative py-2" @mouseleave="titleHovered = false">
		<Link :href="sectionHref">
			<h2 @click="titleHovered = !titleHovered" @mouseenter="titleHovered = true" class="text-3xl font-semibold text-center text-right sm:px-24 text-dark dark:text-light hover:text-primary dark:hover:text-primary">
				{{ sectionTitle }}
			</h2>
		</Link>

		<div class="items-center hidden w-24 h-full overflow-hidden translate-x-1/2 sm:top-0 sm:right-0 sm:flex sm:absolute" aria-hidden="true">
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
		<div class="overflow-hidden">
			<transition
				enter-active-class="transition duration-500 ease-in-out sm:duration-300 sm:delay-200"
				enter-from-class="-translate-y-full opacity-0 sm:translate-y-0"
				enter-to-class="opacity-100"
				leave-active-class="transition duration-500 ease-in-out -translate-y-full sm:duration-300 sm:delay-200 sm:translate-y-0"
				leave-from-class="opacity-100"
				leave-to-class="opacity-0">
				<ul v-show="titleHovered" class="block list-disc sm:list-none sm:top-0 sm:right-0 sm:translate-x-full sm:absolute gap-y-2">
					<li class="py-2 sm:py-0 sm:px-24" v-for="sub in subsections" :key="sub.id">
						<Link :href="sub.href" class="text-xl font-medium text-center sm:text-left text-dark dark:text-light hover:text-primary dark:hover:text-primary whitespace-nowrap">
							{{ sub.title }}
						</Link>
					</li>
				</ul>		
			</transition>
		</div>
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