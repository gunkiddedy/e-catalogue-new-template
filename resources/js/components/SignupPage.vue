<template>
<div>
    <div class="flex">
        <div class="image-login bg-green-500 w-3/5 h-screen">
            <img src="/img/sign-up-img.png" alt="" class="w-full h-full">
        </div>

        <!-- FORM SIGNUP 1-->
        <div class="login-form bg-gray-300 w-2/5 h-screen px-24 py-6" v-if="form_signup1">

            <div class="w-full bg-gray-300 h-full ">

                <div class="flex items-center justify-end">
                    <a href="/">
                        <button class="bg-white relative w-8 h-8 rounded-full p-1 text-gray-800 focus:outline-none">
                            <svg class=" w-4 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </a>
                </div>

                <div class="mt-2 w-1/2 flex flex-wrap">
                    <span class="text-blue-600 font-bold leading-tight">
                        Welcome!
                        <span class="text-blue-400 font-semibold leading-tight">
                            Please fill the form below!
                        </span>
                    </span>
                </div>

                <div class="border-t border-gray-400 w-full my-6"></div>

                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="Nama PT" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>
                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="NIB" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>
                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="Phone Number" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>

                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="Email (example@gmail.com)" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                    <svg class="w-4 absolute right-0 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                </div>

                <div class="mb-8 flex items-center relative">
                    <input type="password" placeholder="Password" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                    <svg class="w-4 absolute right-0 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                <!--<div class="stay flex items-center justify-between mb-8">
                    <div class="flex items-center">
                        <input type="checkbox" name="" id="" class="border border-gray-600 mr-2">
                        <span class="text-sm text-gray-600 font-semibold">Stay signed in</span>
                    </div>
                    <div>
                        <span class="text-blue-700 font-bold">Forgot Password?</span>
                    </div>
                </div>-->

                <div>
                    <button @click="nextPage" class="px-6 py-2 w-full rounded-lg bg-orange-custom text-white font-semibold leading-tight" type="button">
                        Next
                    </button>
                </div>

                <div class="border-t border-gray-400 w-full my-5"></div>

                <div class="flex">
                    <div class="mr-6"><span class="text-gray-500 font-semibold">Already have an account?</span></div>
                    <div>
                        <a href="/login">
                            <span class="text-blue-600 font-bold">Sign in</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- FORM SIGNUP 2-->
        <div class="login-form bg-gray-300 w-2/5 h-screen px-24 py-6 transition duration-150 ease-in-out" v-if="form_signup2">

            <div class="w-full bg-gray-300 h-full ">

                <div class="flex items-center justify-end">
                    <a href="/">
                        <button class="bg-white relative w-8 h-8 rounded-full p-1 text-gray-800 focus:outline-none">
                            <svg class=" w-4 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </a>
                </div>

                <div class="mt-2 w-3/4 flex flex-wrap">
                    <span class="text-blue-600 font-bold leading-tight">
                        Almost Done!
                        <span class="text-blue-400 font-semibold leading-tight">
                            Please continue filling the form!
                        </span>
                    </span>
                </div>

                <div class="border-t border-gray-400 w-full my-6"></div>

                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="Address" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>
                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="Provinsi" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>
                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="Kabupaten/Kota" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>
                <div class="mb-3 flex items-center relative">
                    <input type="text" placeholder="Zip Code" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>

                <div class="mb-3 flex items-center relative">
                    <textarea name="" id="" rows="2" placeholder="Additional info" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full"></textarea>
                </div>

                <div>
                    <button @click="nextPage" class="px-6 py-2 w-full rounded-lg bg-orange-custom text-white font-semibold leading-tight" type="button">
                        Sign Up
                    </button>
                </div>

                <div class="border-t border-gray-400 w-full my-5"></div>

                <div class="flex">
                    <div class="mr-6"><span class="text-gray-500 font-semibold">Already have an account?</span></div>
                    <div>
                        <a href="/login">
                            <span class="text-blue-600 font-bold">Sign in</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {
    data() {
        return {
            form_signup1: true,
            form_signup2: false
        }
    },

    methods: {
        nextPage: function () {
            this.form_signup1 = false;
            this.form_signup2 = true;
        }
    }
}
</script>
