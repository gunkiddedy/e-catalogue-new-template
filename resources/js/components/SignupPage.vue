<template>
<div>
    <div class="flex" v-if="!loading">
        <transition name="fade">
            <div class="image-login w-3/5 h-screen hidden lg:block">
                <img src="/img/sign-up-img.png" alt="" class="w-full h-full">
            </div>
        </transition>

        <!-- FORM SIGNUP 1-->
        <div class="login-form bg-gray-300 lg:w-2/5 md:w-full sm:w-full xs:w-full h-screen xl:px-24 lg:px-12 md:px-6 xs:px-3 sm:px-3 py-6 md:w-full" v-if="form_signup1">

            <div class="w-full bg-gray-300 h-full ">

                <div class="flex items-center justify-end">
                    <router-link to="/">
                        <button class="bg-white relative w-8 h-8 hover:shadow-outline rounded-full p-1 text-gray-800 focus:outline-none">
                            <svg class=" w-4 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </router-link>
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
                    <input v-model="form.name" type="text" placeholder="Nama PT" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>
                <div class="mb-3 flex items-center relative">
                    <input v-model="form.nib" type="text" placeholder="NIB" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>
                <div class="mb-3 flex items-center relative">
                    <input v-model="form.phone" type="text" placeholder="Phone Number" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>

                <div class="mb-3 flex items-center relative">
                    <input v-model="form.email" type="email" placeholder="Email (example@gmail.com)" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                    <svg class="w-4 absolute right-0 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                </div>

                <div class="mb-8 flex items-center relative">
                    <input v-model="form.password" type="password" placeholder="Password" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                    <svg class="w-4 absolute right-0 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                <div>
                    <button @click="nextPage" class="px-6 py-2 w-full hover:bg-orange-400 rounded-lg bg-orange-custom text-white font-semibold leading-tight" type="button" v-if="isFullFill_1">
                        Next
                    </button>
                </div>

                <div class="border-t border-gray-400 w-full my-5"></div>

                <div class="flex">
                    <div class="mr-6"><span class="text-gray-500 font-semibold">Already have an account?</span></div>
                    <div>
                        <router-link to="/login">
                            <span class="text-blue-600 font-bold hover:text-blue-400">Sign in</span>
                        </router-link>
                    </div>
                </div>

            </div>
        </div>

        <span hidden>{{ checkFullFillForm_1 }}</span>
        <span hidden>{{ checkFullFillForm_2 }}</span>

        <!-- FORM SIGNUP 2-->
        <div class="login-form bg-gray-300 lg:w-2/5 md:w-full sm:w-full xs:w-full h-screen xl:px-24 lg:px-12 md:px-6 xs:px-3 sm:px-3 py-6 md:w-full transition duration-150 ease-in-out" v-if="form_signup2">

            <div class="w-full bg-gray-300 h-full ">

                <div class="flex items-center justify-end">
                    <router-link to="/">
                        <button class="bg-white relative w-8 h-8 hover:shadow-outline rounded-full p-1 text-gray-800 focus:outline-none">
                            <svg class=" w-4 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </router-link>
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

                 <div v-if="errors.message" class="flex items-center relative">
                    <span class="text-red-400 font-semibold text-sm mb-2">{{ errors.message }}</span>
                </div>

                <div class="mb-3 flex items-center relative">
                    <input v-model="form.address" type="text" placeholder="Address" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>

                <div class="mb-3 flex items-center relative">
                    <!--<input type="text" placeholder="Provinsi" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">-->
                    <select
                      v-model="form.provinsi_id"
                      @change="getKabupatens"
                      class="block appearance-none w-full border border-gray-300 px-4 py-3 rounded-lg text-gray-500 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    >
                      <option class="text-gray-700" :value="selectedValue">
                        -Select Provinsi-
                      </option>
                      <option
                        class="text-gray-700"
                        v-for="(prop, i) in provinsis"
                        :value="prop.id"
                        :key="i"
                      >
                        {{ prop.name }}
                      </option>
                    </select>
                </div>
                <div class="mb-3 flex items-center relative">
                    <!--<input type="text" placeholder="Kabupaten/Kota" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">-->
                    <select
                      v-model="form.kabupaten_id"
                      class="block appearance-none w-full border border-gray-300 px-4 py-3 rounded-lg text-gray-500 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    >
                      <option class="text-gray-700" :value="selectedValue">
                        -Select Kabupaten-
                      </option>
                      <option
                        class="text-gray-700"
                        v-for="(kab, i) in kabupatens"
                        :value="kab.id"
                        :key="i"
                      >
                        {{ kab.name }}
                      </option>
                    </select>
                </div>

                <div class="mb-3 flex items-center relative">
                    <input v-model="form.zipcode" type="text" placeholder="Zip Code" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                </div>

                <div class="mb-3 flex items-center relative">
                    <textarea v-model="form.additional_info" rows="2" placeholder="Additional info" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full"></textarea>
                </div>

                <div class="relative">
                    <button @click="registerUser" type="button" class="px-6 py-2 w-full rounded-lg hover:bg-orange-400 bg-orange-custom text-white font-semibold leading-tight" v-if="isFullFill_2">
                        <svg v-if="isRegistering" class="absolute animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        {{ isRegistering ? "Processing..." : "Sign Up" }}
                    </button>
                </div>

                <div class="border-t border-gray-400 w-full my-5"></div>

                <div class="flex">
                    <div class="mr-6"><span class="text-gray-500 font-semibold">Already have an account?</span></div>
                    <div>
                        <router-link to="/login">
                            <span class="text-blue-600 font-bold hover:text-blue-400">Sign in</span>
                        </router-link>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- loader spin-->
    <div v-if="loading" class="mx-auto flex h-screen">
        <div class="flex justify-center items-center w-full">
            <svg class="w-12" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                <circle cx="15" cy="15" r="15">
                    <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" />
                    <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" />
                </circle>
                <circle cx="60" cy="15" r="9" fill-opacity="0.3">
                    <animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite" />
                    <animate attributeName="fill-opacity" from="0.5" to="0.5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite" />
                </circle>
                <circle cx="105" cy="15" r="15">
                    <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" />
                    <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" />
                </circle>
            </svg>
        </div>
    </div>

</div>
</template>

<script>
export default {
    data() {
        return {
            form_signup1: true,
            form_signup2: false,

            form: {
                name: '',
                nib: '',
                phone: '',
                email: '',
                password: '',
                // password_confirmation: '',
                address: '',
                provinsi_id: '',
                kabupaten_id: '',
                zipcode: '',
                additional_info: ''
            },
            
            errors: [],
            loading: true,
            isRegistering: false,

            provinsis: [],
            kabupatens: [],
            // select_provinsi: '',
            // select_kabupaten: '',
            selectedValue: [],

            isFullFill_1: false,
            isFullFill_2: false,
        }
    },

    computed: {
        checkFullFillForm_1: {
            get: function(){
                if(this.form.name !== '' && this.form.nib !== '' && this.form.phone !== '' && this.form.phone.length >= 10 && this.form.email !== '' && this.form.password !== '' && this.form.password.length >= 6){
                    this.isFullFill_1 = true;
                }else{
                    this.isFullFill_1 = false;
                }
            }
        },
        checkFullFillForm_2: {
            get: function(){
                if(this.form.address !== '' && this.form.provinsi_id !== '' && this.form.kabupaten_id !== '' && this.form.zipcode !== '' && this.form.zipcode.length >= 3 && this.form.additional_info !== ''){
                    this.isFullFill_2 = true;
                }else{
                    this.isFullFill_2 = false;
                }
            }
        }
    },

    created() {
        this.getProvinsis();
    },

    mounted() {
        setTimeout(() => {
            this.loading = false;
        }, 700)
    },

    methods: {
        nextPage: function () {
            this.form_signup1 = false;
            this.form_signup2 = true;
        },
        registerUser() {
            this.isRegistering = true;
            axios.post('/api/register', this.form)
            .then(response => {
                this.isRegistering = false;
                this.$router.push('/login');
                console.log(response.data);
            }).catch((error) => {
                this.errors = error.response.data.errors;
            })
        },
        getProvinsis() {
            axios.get("/api/get-provinsis")
            .then((response) => {
                this.provinsis = response.data;
                this.selectedValue = [];
            })
            .catch((error) => {
                console.log(error);
            });
        },
        getKabupatens() {
            axios.get("/api/get-kabupatens-by-provinsi-id", {
                params: {
                    provinsi_id: this.form.provinsi_id,
                },
            }).then((response) => {
                this.kabupatens = response.data;
            }).catch((error) => {
                console.log(error);
            });
        },
    }
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
