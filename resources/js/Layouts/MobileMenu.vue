<template>
    <transition
        enter-active-class="duration-300 ease-in-out"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="duration-300 ease-in-out"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0">
        <div v-if="modelValue" @click="$emit('update:modelValue')" class="fixed inset-0 z-30 hidden w-full h-screen bg-black opacity-25 sm:block">            
        </div>
    </transition>
    <transition
        enter-active-class="transition duration-500 ease-in-out"
        enter-from-class="-translate-x-full opacity-100"
        enter-to-class="opacity-100"
        leave-active-class="transition duration-500 ease-in-out -translate-x-full "
        leave-from-class="opacity-100"
        leave-to-class="opacity-100">
        <div v-if="modelValue" class="fixed z-30 w-full h-screen shadow-xl sm:w-1/2 bg-lightMenu dark:bg-darkMenu">
            <div class="flex flex-col items-center w-full h-full mt-48 gap-y-2 sm:gap-y-0 sm:mt-0 sm:justify-center sm:items-end">
                <MenuLink :sectionTitle="'Notes'"
                    :sectionHref="'/notes'"
                    :subsections="[
                        {id: 0, title: 'Design Sites', href: '/design-sites'},
                        {id: 1, title: 'Design Patterns', href: '/design-patterns'}, 
                        {id: 2, title: 'Simple Accessibility', href: '/accessibility'},
                    ]" 
                />
                <MenuLink :sectionTitle="'Pages'"
                    :sectionHref="'/pages'"
                    :subsections="[
                        {id: 0, title: 'All Pages', href: '/design-sites'},
                    ]" 
                />
                <MenuLink :sectionTitle="'Simple Elements'"
                    :sectionHref="'/elements/simple'"
                    :subsections="[
                        {id: 0, title: 'Menu Icons', href: '/menu-icons'},
                        {id: 1, title: 'Navbar Links', href: '/navbar-links'}, 
                        {id: 2, title: 'Buttons', href: '/buttons'},
                    ]" 
                />
                <MenuLink :sectionTitle="'Complex Elements'"
                    :sectionHref="'/elements/complex'"
                    :subsections="[
                        {id: 0, title: 'Dialog Boxes', href: '/dialogs'},
                        {id: 1, title: 'Snackbars', href: '/snackbars'}, 
                        {id: 2, title: 'Select Menus', href: '/selects'},
                    ]" 
                />
                <MenuLink :sectionTitle="'Compound Elements'"
                    :sectionHref="'/elements/complex'"
                    :subsections="[
                        {id: 0, title: 'Slider', href: '/slider'},
                        {id: 1, title: 'Gallery', href: '/gallery'}, 
                        {id: 2, title: 'Date Picker', href: '/date-picker'},
                    ]" 
                />

            </div>

        </div>
    </transition>
    
</template>

<script>
import MenuLink from '@/Components/Build/NavbarLink.vue'

export default {
    components: {
        MenuLink,
    },
    
    props: {
        modelValue: Boolean,
    },

    data () {
        return {
            hoveredOver: 0,
        }
    },
    
    emits: ['update:modelValue']

}
</script>

<style>

</style>