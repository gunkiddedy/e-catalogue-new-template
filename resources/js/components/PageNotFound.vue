<template>
<div>
    <transition name="fade">
        <div class="bg-gray-100 mx-auto">
            <div class="flex flex-col items-center justify-center h-screen">
                <span class="text-gray-400">
                    <svg class="w-20 animate-bounce" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                    </svg>
                </span>
                <span class="text-4xl text-gray-500 leading-tight">Page not found</span>
                <router-link to="/" class="text-blue-400 hover:text-blue-500 text-xl leading-tight font-semibold">Back to home</router-link>
            </div>
        </div>
    </transition>
</div>
</template>

<script>
export default {

}
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity .5s;
}

/* .fade-leave-active below version 2.1.8 */
.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
