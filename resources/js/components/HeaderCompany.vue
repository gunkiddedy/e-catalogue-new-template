<template>
<div>
    <header>
        <div class="px-4 py-4 flex justify-between items-center">

            <router-link to="/">
                <span class="normal-case font-omnia text-gray-600 text-2xl lg:text-2xl tracking-wide font-semibold">
                    Katalogi
                </span>
            </router-link>

            <div class="w-full mx-16 relative">
                <form action="" method="GET">
                    <button type="submit" class="absolute right-0 mt-2 mr-2 text-gray-500">
                        <svg class="w-5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <input class="shadow appearance-none rounded-lg w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-inner" id="search" type="search" placeholder="Search products">
                </form>
            </div>

            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3 " viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <!-- dropdown profile -->
            <div class="relative" v-if="isloggedIn === 'true'">
                <div class="w-full flex justify-between items-center">
                    <!--<div class="border-l h-8 border-gray-600 mr-4"></div>-->
                    <img src="/img/avatar2.png" alt="avatar" class="shadow hover:opacity-75 object-cover rounded-full w-8 h-8 mx-auto mr-2">
                    <div @click="toggleDropdownUser" class="leading-tight text-sm font-semibold text-gray-600 cursor-pointer">
                        PT.MAJU JAYA PRIMA...
                    </div>
                </div>
                <div v-if="showUserDropdown" class="shadow user-drop bg-white absolute py-2 px-4 rounded-lg right-0 w-48 flex flex-col">
                    <span class="text-gray-700 font-semibold text-sm cursor-pointer" @click="logoutUser">
                        Logout</span>
                    <span class="text-gray-700 font-semibold text-sm cursor-pointer">
                        Profile</span>
                </div>
            </div>

            <!-- login register button-->
            <div v-else class="w-64 flex justify-between items-center">
                <router-link to="/login">
                    <button class="bg-orange-custom px-4 py-2 rounded-lg w-48 hover:bg-orange-400" type="button">
                        <span class="leading-tight text-white font-semibold">Login / Register</span>
                    </button>
                </router-link>
            </div>
        </div>
    </header>
    <div class="-ml-16 -mr-16 border-t border-gray-300"></div>
</div>
</template>

<script>
export default {
    data() {
        return {
            isloggedIn: 'false',
            showUserDropdown: false,
        }
    },

    mounted() {
        this.isloggedIn = localStorage.getItem('isloggedIn');
    },

    methods: {
        toggleDropdownUser() {
            this.showUserDropdown = !this.showUserDropdown;
        },

        logoutUser() {
            axios.get('/sanctum/csrf-cookie')
                .then(response => {
                    axios.post('/api/logout')
                        .then(res => {
                            this.$router.push({
                                name: "login"
                            });
                            localStorage.setItem('isloggedIn', 'false');
                            this.isloggedIn = 'false';
                            console.log(res);
                        }).catch(err => {
                            console.log(err);
                        });
                }).catch(error => {
                    console.log(error);
                });
        }
    },

}
</script>
