<template>
    <header class="flex flex-row pt-16 text-sm font-medium text-gray-500 sm:hidden">
        <div @click="changeTopic(1)"
            
            :class="tabClass"
        >
            <!-- <p class="bg-clip-text bg-gradient-to-r from-primary to-transparent"> -->
                Announcements
            <!-- </p> -->
        </div>
        <div @click="changeTopic(2)" 
            :class="tabClassAll"
        >
            <!-- <p class="bg-clip-text bg-gradient-to-r from-primary to-transparent"> -->
                All Posts
            <!-- </p> -->
        </div>
        <div @click="changeTopic(3)" 
            :class="tabClassWatch"
        >
            <!-- <p class="bg-clip-text bg-gradient-to-r from-primary to-transparent"> -->
                Watching
            <!-- </p> -->
        </div>
    </header>
</template>

<script>
export default {
    data() {
        return {
            topic: 1,
        }
    },

    methods: {
        changeTopic(selected) {
            this.topic = selected
        },
    },

    computed: {
        tabClass() {
            if (this.topic === 1) {
                return "px-4 py-2 mt-2 rounded-t font-regular text-white bg-primary text-center transition-all duration-300 ease-in-out"
            } else {
                return "px-2 py-2 mt-3 float-right rounded-t font-regular hover:bg-ditaSecondaryHover font-regular cursor-pointer truncate overflow-hidden whitespace-nowrap w-16 transition-all duration-300 ease-in-out"

            }
        },
        tabClassAll() {
            if (this.topic === 2) {
                return "px-4 py-2 mt-2 rounded-t font-regular text-white bg-primary text-center transition-all duration-300 ease-in-out"
            } else {
                return "px-2 py-2 mt-3 float-right rounded-t font-regular hover:bg-ditaSecondaryHover font-regular cursor-pointer truncate overflow-hidden whitespace-nowrap w-16 transition-all duration-300 ease-in-out"
            }

        },
        tabClassWatch() {
            if (this.topic === 3) {
                return "px-4 py-2 mt-2 rounded-t font-regular text-white bg-primary text-center transition-all duration-300 ease-in-out"
            } else {
                return "px-2 py-2 mt-3 float-right rounded-t font-regular hover:bg-ditaSecondaryHover font-regular cursor-pointer truncate overflow-hidden whitespace-nowrap w-16 transition-all duration-300 ease-in-out"

            }

        }

    },

}
</script>

<style>

</style>