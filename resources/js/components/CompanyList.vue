<template>
<div>
    <div class="flex px-4 py-4 mt-4">
        <transition name="fade">
            <div class="bg-white h-full w-64 rounded-lg mr-6 shadow px-1 py-1">

                <div class="grid grid-cols-1 my-2 px-1">

                    <div class="text-gray-500 flex items-center justify-between">
                        <button type="button" class="w-full flex items-center leading-tight text-sm py-4 px-4 hover:bg-blue-500 hover:text-gray-300 rounded-lg">
                            <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd">
                                </path>
                            </svg>
                            <span class="font-semibold">Company List</span>
                        </button>
                    </div>
                    <div class="text-gray-500 flex items-center justify-between">
                        <button type="button" class="w-full flex items-center leading-tight text-sm py-4 px-4 hover:bg-blue-500 hover:text-gray-300 rounded-lg">
                            <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path>
                                <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                            </svg>
                            <span class="font-semibold">Product List</span>
                        </button>
                    </div>
                    <div class="text-gray-500 flex items-center justify-between">
                        <button type="button" class="w-full flex items-center leading-tight text-sm py-4 px-4 hover:bg-blue-500 hover:text-gray-300 rounded-lg">
                            <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-semibold">Blacklisted User</span>
                        </button>
                    </div>

                </div>

            </div>
        </transition>

        <transition name="fade">
            <div class="w-full">

                <div class="relative">
                    <form action="" method="GET">
                        <button type="submit" class="absolute right-0 mt-2 mr-2 text-gray-500">
                            <svg class="w-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <input class="shadow appearance-none rounded-full w-full py-1 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-inner" id="search" type="search" placeholder="Search company">
                    </form>
                </div>

                <div class="mt-10 mb-12 w-full h-full">

                    <div class="bg-white rounded-lg px-8 py-4 shadow my-4">

                        <div class="flex items-center justify-between">
                            <!-- BLUE CIRCLE-->
                            <div class="flex items-center justify-between">

                                <div class="bg-blue-500 rounded-full w-16 h-16 mr-6"></div>

                                <!-- COMPANY NAME-->
                                <div class="grid grid-rows-3">
                                    <div>
                                        <p class="uppercase font-semibold text-sm text-gray-500">
                                            PT.MAJU JAYA PRIMA PERKASA ABADI
                                        </p>
                                    </div>
                                    <div>
                                        <span class="text-sm text-blue-500 font-semibold">majujaya@prima.com</span>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">Bekasi, Jawa Barat, Indonesia</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 BUTTONS-->
                            <div class="flex items-center justify-between">
                                <div class="mr-4">
                                    <button @click="onClickShowMore()" type="button" class="focus:outline-none flex items-center justify-between rounded-lg border border-gray-500 px-4 py-1">
                                        <span class="text-gray-500 text-sm font-semibold">
                                            {{ show_more_text }}
                                        </span>
                                    </button>
                                </div>
                                <div class="mr-4">
                                    <button type="button" class="focus:outline-none flex items-center justify-between rounded-lg border border-red-500 px-4 py-1 text-red-500">
                                        <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-red-500 text-sm font-semibold">Remove</span>
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="focus:outline-none flex items-center justify-between bg-blue-600 rounded-lg border border-blue-600 px-4 py-1 text-gray-100">
                                        <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-100 text-sm font-semibold">Approve</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGE PRODUCT-->
                        <div class="border-t border-gray-300 w-full mt-6" v-if="showProductCompany"></div>
                        <div class="grid grid-cols-6 gap-4 mt-6 px-1" v-if="showProductCompany">
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg px-8 py-4 shadow my-4">

                        <div class="flex items-center justify-between">
                            <!-- BLUE CIRCLE-->
                            <div class="flex items-center justify-between">

                                <div class="bg-blue-500 rounded-full w-16 h-16 mr-6"></div>

                                <!-- COMPANY NAME-->
                                <div class="grid grid-rows-3">
                                    <div>
                                        <p class="uppercase font-semibold text-sm text-gray-500">
                                            PT.MAJU JAYA PRIMA PERKASA ABADI
                                        </p>
                                    </div>
                                    <div>
                                        <span class="text-sm text-blue-500 font-semibold">majujaya@prima.com</span>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">Bekasi, Jawa Barat, Indonesia</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 BUTTONS-->
                            <div class="flex items-center justify-between">
                                <div class="mr-4">
                                    <button @click="onClickShowMore2()" type="button" class="focus:outline-none flex items-center justify-between rounded-lg border border-gray-500 px-4 py-1">
                                        <span class="text-gray-500 text-sm font-semibold">
                                            Show More
                                        </span>
                                    </button>
                                </div>
                                <div class="mr-4">
                                    <button type="button" class="focus:outline-none flex items-center justify-between rounded-lg border border-red-500 px-4 py-1 text-red-500">
                                        <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-red-500 text-sm font-semibold">Remove</span>
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="focus:outline-none flex items-center justify-between bg-blue-600 rounded-lg border border-blue-600 px-4 py-1 text-gray-100">
                                        <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-100 text-sm font-semibold">Approve</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGE PRODUCT-->
                        <div class="grid grid-cols-6 gap-4 mt-6" v-if="showProductCompany2">
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg px-8 py-4 shadow my-4">

                        <div class="flex items-center justify-between">
                            <!-- BLUE CIRCLE-->
                            <div class="flex items-center justify-between">

                                <div class="bg-blue-500 rounded-full w-16 h-16 mr-6"></div>

                                <!-- COMPANY NAME-->
                                <div class="grid grid-rows-3">
                                    <div>
                                        <p class="uppercase font-semibold text-sm text-gray-500">
                                            PT.MAJU JAYA PRIMA PERKASA ABADI
                                        </p>
                                    </div>
                                    <div>
                                        <span class="text-sm text-blue-500 font-semibold">majujaya@prima.com</span>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">Bekasi, Jawa Barat, Indonesia</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 BUTTONS-->
                            <div class="flex items-center justify-between">
                                <div class="mr-4">
                                    <button @click="onClickShowMore3()" type="button" class="focus:outline-none flex items-center justify-between rounded-lg border border-gray-500 px-4 py-1">
                                        <span class="text-gray-500 text-sm font-semibold">
                                            Show More
                                        </span>
                                    </button>
                                </div>
                                <div class="mr-4">
                                    <button type="button" class="focus:outline-none flex items-center justify-between rounded-lg border border-red-500 px-4 py-1 text-red-500">
                                        <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-red-500 text-sm font-semibold">Remove</span>
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="focus:outline-none flex items-center justify-between bg-blue-600 rounded-lg border border-blue-600 px-4 py-1 text-gray-100">
                                        <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-100 text-sm font-semibold">Approve</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGE PRODUCT-->
                        <div class="grid grid-cols-6 gap-4 mt-6" v-if="showProductCompany3">
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="bg-gray-400 rounded-lg w-32 h-32 shadow mb-2"></div>
                                <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                    CUSTOMIZED PRE FILTER, FILTER UNTUK BLOWER
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </transition>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            show_more_text: 'Show More',
            showProductCompany: false
        }
    },
    methods: {
        onClickShowMore: function () {
            this.showProductCompany = !this.showProductCompany;
            if (this.showProductCompany === true) {
                this.show_more_text = 'Show Less';
            } else {
                this.show_more_text = 'Show More';
            }
        }
    },
}
</script>

<style>
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
