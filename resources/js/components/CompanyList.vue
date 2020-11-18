<template>
<div>
    <div class="px-16 bg-gray-100">
        <header-component></header-component>
        <div class="flex px-4 py-4 mt-4">
            <transition name="fade">
                <div class="bg-white h-full w-64 rounded-lg mr-6 shadow px-1 py-1">

                    <div class="grid grid-cols-1 my-2 px-1">

                        <div class="text-gray-500 flex items-center justify-between">
                            <router-link to="/company-list" class="w-full">
                                <button type="button" class="w-full flex items-center leading-tight text-sm py-4 px-4 hover:bg-blue-500 hover:text-gray-300 rounded-lg text-gray-300">
                                    <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <span class="font-semibold">Company List</span>
                                </button>
                            </router-link>
                        </div>
                        <div class="text-gray-500 flex items-center justify-between">
                            <router-link to="/product-list" class="w-full">
                                <button type="button" class="w-full flex items-center leading-tight text-sm py-4 px-4 hover:bg-blue-500 hover:text-gray-300 rounded-lg">
                                    <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path>
                                        <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                                    </svg>
                                    <span class="font-semibold">Product List</span>
                                </button>
                            </router-link>
                        </div>
                        <div class="text-gray-500 flex items-center justify-between">
                            <router-link to="/user-blacklist" class="w-full">
                                <button type="button" class="w-full flex items-center leading-tight text-sm py-4 px-4 hover:bg-blue-500 hover:text-gray-300 rounded-lg">
                                    <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-semibold">Blacklisted User</span>
                                </button>
                            </router-link>
                        </div>

                    </div>

                </div>
            </transition>

            <transition name="fade">
                <div class="w-full">

                    <!-- search company-->
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

                        <!-- company list with their products-->
                        <div class="bg-white rounded-lg px-8 py-4 shadow my-4" v-for="(company, index) in companies" :key="index">

                            <div class="flex items-center justify-between">
                                <!-- BLUE CIRCLE-->
                                <div class="flex items-center justify-between">

                                    <!--<div class="bg-blue-500 rounded-full w-16 h-16 mr-6"></div>-->
                                    <img src="/img/avatar2.png" alt="avatar" class="shadow hover:opacity-75 object-cover rounded-full w-16 h-16 mx-auto mr-4">

                                    <!-- COMPANY NAME-->
                                    <div class="grid grid-rows-3">
                                        <div>
                                            <p class="uppercase font-semibold text-sm text-gray-500">
                                                {{ company.name }}
                                            </p>
                                        </div>
                                        <div>
                                            <span class="text-sm text-blue-500 font-semibold">
                                                {{ company.email }}
                                            </span>
                                        </div>
                                        <div>
                                            <span v-if="company.address !== null">{{company.address}}</span>
                                            <span class="text-sm text-gray-500" v-else>Bekasi, Jawa Barat, Indonesia</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- IMAGE PRODUCT-->
                            <div>
                                <div class="border-t border-gray-300 w-full mt-6"></div>
                                <div class="grid grid-cols-6 gap-4 mt-6 px-1">
                                    <div class="flex flex-col" v-for="(product, i) in company.products" :key="i">
                                        <router-link :to="{ name: 'product-detail', params: {id: product.id } }">
                                            <div class="bg-gray-100 rounded-lg w-32 h-32 shadow mb-2 px-2 py-2">
                                                <img :src="'/storage/'+product.image_path" :alt="product.name" class="rounded object-cover w-full h-full cursor-pointer hover:opacity-75">
                                            </div>
                                        </router-link>
                                        <span class="text-gray-500 leading-tight font-semibold text-xs tracking-normal">
                                            {{ product.name }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </transition>
        </div>
    </div>
    <footer-component></footer-component>
</div>
</template>

<script>
export default {
    data() {
        return {
            companies: [],
            isActive: false,
        }
    },

    created() {
        this.loadMembers();
    },

    methods: {
        loadMembers() {
            axios.get('/sanctum/csrf-cookie')
                .then((response) => {
                    axios.get('/api/company-list')
                        .then((response) => {
                            this.companies = response.data;
                            // console.log(response.data);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                }).catch(error => {
                    console.log(error);
                })
        },

    },
}
</script>

<style scoped>
.router-link-active,
.router-link-exact-active {
   background-color: #4299e1;
   color: #e2e8f0;
   cursor: pointer;
   border-radius: 0.5rem;
 }

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
