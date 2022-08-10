<template>
    <div class="relative group rounded bg-4x animate-gradient transition-[display] duration-500" :style="`${bg}`" :class="classes">
        <div class="flex flex-row items-center justify-center rounded-sm h-full">
            <div class="group z-1 text-center">
                <p class="font-bold text-slate-700 text-xl">
                    {{ title }}
                </p>
                <p class="font-light text-gray-500 text-sm invisible group-hover:visible transition duration-1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quae!
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        bg: {
            type: String,
            required: true,
        },

        grid: {
            type: String,
            required: true
        },
        // rows: {
        //     type: Number,
        //     required: true,
        // },

        // cols: {
        //     type: Number,
        //     required: true,
        // },

        title: {
            type: String,
            default: 'Example',
        },

        view: {
            type: Boolean
        }
    },

    computed: {
        classes() {
            return !this.view ? 
            ''
            : `${this.grid} p-4`
        }
    },

    mounted() {

    }

}
</script>

<style>
</style>