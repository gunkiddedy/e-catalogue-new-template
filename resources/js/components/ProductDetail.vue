<template>
<div>
    <div class="px-16 bg-gray-100">
        <header-component></header-component>

        <!-- loader spin-->
        <div v-if="loading" class="z-30 flex justify-around relative opacity-25 bg-black inset-0">
            <svg class="w-12 h-12 mt-4 absolute" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
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

        <!-- Breadcrumbs-->
        <transition name="fade">
            <div class="flex px-4 mt-4 items-center justify-start text-blue-400 text-xs font-bold">
                <div>Semua Kategori</div>
                <div class="flex items-center">
                    <span class="text-gray-500">
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    {{ category.name }}
                </div>
                <div class="flex items-center" v-if="subcategory.name !== null">
                    <span class="text-gray-500">
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    {{ subcategory.name }}
                </div>
                <!-- STATUS MESSAGE-->
                <span 
                    class="ml-4 font-sf-pro" 
                    :class="{'text-green-400': status, 'text-red-400': !status }">
                    {{ status_msg }}
                </span>
            </div>
        </transition>

        <!-- MAIN CONTENT-->
        <transition name="fade">
            <div class="flex px-4 py-4 mt-4" v-if="!loading">

                <!-- PRODUCT DETAIL-->
                <div class="w-full mr-6 flex">

                    <!-- LEFT SIDE-->
                    <div class="product-image w-full mr-6">

                        <!-- IMG ZOOM-->
                        <div class="img-zoom bg-white bg-cover rounded shadow px-4 py-4 h-106">
                            <img :src="'/storage/'+images[indexImage].image_path" alt="img-zoom" class="rounded object-cover w-full h-full hover:opacity-75">
                        </div>

                        <!--<span>{{indexImage}}</span>-->

                        <!-- THUMBNAIL-->
                        <div class="thumbnail flex items-center justify-between mt-4">
                            <div>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>

                            <div class="flex justify-start items-center">
                                <div class="shadow rounded-lg bg-white w-20 h-auto px-1 py-1 mr-2" v-for="(image, i) in images" :key="i.id">
                                    <img @mouseover="switchImage(i)" :src="'/storage/'+image.image_path" alt="img-thumb" class="rounded object-cover w-full h-16 cursor-pointer hover:opacity-75">
                                </div>
                            </div>

                            <div>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT SIDE-->
                    <div class="desc-product w-full bg-gray-100 font-semibold">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center justify-start">
                                <p class="text-lg leading-tight mr-2">{{product.name}}</p>
                                <div class="rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                            </div>

                            <!-- icon edit delete-->
                            <div class="flex items-center justify-start" v-if="isloggedIn === 'true' && user_id == product.user_id">
                                <span class="text-blue-400 mr-2 cursor-pointer px-1 py-1 rounded-full hover:bg-gray-200" @click="modalEdit(product.id)">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                    </svg>
                                </span>
                                <span class="text-orange-400 cursor-pointer px-1 py-1 rounded-full hover:bg-gray-200" @click="deleteProduct()">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>

                        </div>

                        <div class="border-t border-gray-300 my-4"></div>

                        <div class="flex flex-col text-sm leading-tight w-7/12">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-500">No. SNI:</span>
                                <span class="text-gray-600">{{product.nomor_sni}}</span>
                            </div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-500">No. Sertifikat TKDN: </span>
                                <span class="text-gray-600">{{product.nomor_sertifikat_tkdn}}</span>
                            </div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-500">No. Laporan: </span>
                                <span class="text-gray-600">{{product.nomor_laporan_tkdn}}</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-sm text-gray-500 leading-tight">
                            <div class="w-2/6">Nilai TKDN: </div>
                            <div class="w-full bg-white h-2 rounded-full mr-2 relative">
                                <div class="absolute bg-green-500 h-2 rounded-full" :style="'width:'+product.nilai_tkdn+'%'"></div>
                            </div>
                            <div class="text-green-500 font-bold" v-if="product.nilai_tkdn !== null">
                                {{product.nilai_tkdn}}
                            </div>
                            <div class="text-green-500 font-bold" v-else>
                                0
                            </div>
                        </div>

                        <div class="border-t border-gray-300 my-4"></div>

                        <div class="flex items-center justify-start">
                            <span class="text-sm text-gray-600 mr-2">Harga:</span>
                            <span class="font-bold text-lg text-red-600 mr-2">Rp.{{product.price}}</span>
                            <span>/pc</span>
                        </div>

                        <div>
                            <span class="text-xs text-gray-500">For custom order please contact the company</span>
                        </div>

                        <div class="w-full mt-40">
                            <div class="border-t border-gray-300 my-3"></div>
                            <div class="flex items-center">
                                <span class="text-gray-500 mr-2 text-sm">HS Code:</span>
                                <span class="text-gray-600">{{product.hs_code}}</span>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- RIGHT SIDEBAR-->
                <div class="bg-white h-full w-64 rounded-lg shadow">

                    <div class="flex justify-center items-center flex-col my-6">
                        <!--<div class="bg-blue-500 rounded-full w-20 h-20"></div>-->
                        <img src="/img/avatar2.png" alt="avatar" class="shadow hover:opacity-75 object-cover rounded-full w-20 h-20 mx-auto">

                        <div class="flex justify-center items-center flex-col leading-tight">
                            <div class="px-4 py-4 text-center">
                                <span class="font-bold text-sm text-gray-700 cursor-pointer hover:text-blue-400">
                                    <router-link :to="{ name: 'company-page', params: {id: company.id } }">
                                        {{company.name}}
                                    </router-link>
                                </span>
                            </div>
                            <div class="flex justify-between items-center bg-blue-500 rounded-full px-4 py-1 my-4 leading-tight text-gray-300 text-xs">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>
                                    Trusted Suplier
                                </span>
                            </div>
                        </div>

                        <div class="border-b border-gray-400 w-full my-4"></div>

                        <div class="flex flex-col leading-tight text-gray-600">
                            <div class="font-bold text-xs">
                                <div class="px-4 py-1 flex justify-between items-center">
                                    <div v-if="company.address !== null">{{company.address}}</div>
                                    <div v-else>Jl. Rasamala Raya Blok L10 No 14 Perumahan Telaga Pesona Telaga Murni - Cikarang Barat</div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-400 w-full my-4"></div>

                        <div class="flex flex-col leading-tight text-gray-600">
                            <div class="text-xs">
                                <div class="px-4 py-1 flex justify-between items-center">
                                    <div class="mr-2 font-bold">Login Terakhir</div>
                                    <div>11/08/2020</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </transition>

        <!-- MODAL FORM-->
        <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-40 outline-none focus:outline-none justify-center items-center flex">
            <div class="relative max-w-4xl w-9/12">
                <!--content-->
                <div class="bg-white border-0 rounded-lg shadow-lg relative px-6 py-4">
                    <!--header-->
                    <div class="flex justify-end absolute right-0 top-0 -mt-5 -mr-5">
                        <!-- CLOSE BUTTON CIRCLE-->
                        <div class="flex items-center justify-center">
                            <button class="bg-red-500 relative w-12 h-12 rounded-full p-1 border-4 border-white text-white" @click="modalEdit(product.id)">
                                <svg class="w-6 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-start mb-2">
                        <h3 class="text-lg leading-tight font-semibold text-gray-400">
                            Edit Product
                        </h3>
                    </div>

                    <!--body-->
                    <form>
                        <div class="grid grid-cols-2 gap-4 h-full">
                            <!-- LEFT SIDE-->
                            <div class="left w-full h-full py-2">
                                <div class="product-name mb-3">
                                    <input v-model="productForm.name" id="name" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Product Name">
                                </div>
                                <div class="grid grid-rows-2">
                                    <div class="flex mb-3 items-center justify-between">
                                        <div class="w-1/12">
                                            <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                                <input id="sni" v-model="productForm.sni" type="checkbox" true-value="1" false-value="0" class="opacity-0 absolute">
                                                <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <label @click="toggleInputSNI" for="sni" class="text-gray-500 font-semibold w-1/6 mr-4">
                                            SNI
                                        </label>
                                        <div class="w-full">
                                            <input :disabled="disabled_input_SNI" id="nomor_sni" v-model="productForm.nomor_sni" @keyup="checkSNI(productForm.nomor_sni)" type="text" placeholder="SNI Number" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" :class="{'text-green-400': isSuccess_nomor_sni, 'text-red-400': isError_nomor_sni}">

                                        </div>
                                    </div>
                                    <div class="flex mb-3 items-center justify-between">
                                        <div class="w-1/12">
                                            <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                                <input id="tkdn" v-model="productForm.tkdn" type="checkbox" true-value="1" false-value="0" class="opacity-0 absolute">
                                                <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <label @click="toggleInputTKDN" for="tkdn" class="text-gray-500 font-semibold w-1/6 mr-4">
                                            TKDN
                                        </label>
                                        <div class="w-full">
                                            <input :disabled="disabled_input_TKDN" id="nilai_tkdn" v-model="productForm.nilai_tkdn" @keyup="checkNilaiTKDN(productForm.nilai_tkdn)" type="text" placeholder="Nilai TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-2/4" :class="{'text-green-400': isSuccess_nilai_tkdn, 'text-red-400': isError_nilai_tkdn}">

                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-rows-2">
                                    <div class="flex mb-3 items-center justify-between">
                                        <div class="w-1/12">
                                            &nbsp;
                                        </div>
                                        <div class="font-semibold text-lg w-1/6 mr-4">
                                            &nbsp;
                                        </div>
                                        <div class="w-full">
                                            <input v-model="productForm.nomor_sertifikat_tkdn" @keyup="checkSertiTKDN(productForm.nomor_sertifikat_tkdn)" id="nomor_sertifikat_tkdn" type="text" placeholder="Nomor Sertifikat TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" :class="{'text-green-400': isSuccess_sertifikat_tkdn, 'text-red-400': isError_sertifikat_tkdn}">

                                        </div>
                                    </div>
                                    <div class="flex mb-3 items-center justify-between">
                                        <div class="w-1/12">
                                            &nbsp;
                                        </div>
                                        <div class="font-semibold text-lg w-1/6 mr-4">
                                            &nbsp;
                                        </div>
                                        <div class="w-full">
                                            <input v-model="productForm.nomor_laporan_tkdn" @keyup="checkLapTKDN(productForm.nomor_laporan_tkdn)" id="nomor_laporan_tkdn" type="text" placeholder="Nomor Laporan" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" :class="{'text-green-400': isSuccess_laporan_tkdn, 'text-red-400': isError_laporan_tkdn}">

                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-rows-1">
                                    <div class="flex mb-3 items-center justify-between">
                                        <div class="text-gray-500 w-26-persen font-semibold mr-4">
                                            HS Code
                                        </div>
                                        <div class="w-full">
                                            <input id="hs_code" v-model="productForm.hs_code" @keypress="checkHsCode(productForm.hs_code)" :class="{'text-green-400': isSuccess_hscode, 'text-red-400': isError_hscode}" type="text" placeholder="ex. 0987789009876" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-start items-center">
                                    <div class="shadow rounded-lg bg-white w-20 h-auto px-1 py-1 mr-2" v-for="(image, i) in images" :key="i.id">
                                        <img @mouseover="switchImage(i)" :src="'/storage/'+image.image_path" alt="img-thumb" class="rounded object-cover w-full h-16 cursor-pointer hover:opacity-75">
                                    </div>
                                </div>

                            </div>
                            <!-- RIGHT SIDE-->
                            <div class="right w-full h-full py-2">

                                <div class="grid grid-rows-2">
                                    <div class="product-name mb-3">
                                        <div class="inline-block relative w-full">
                                            <select id="category_id" v-model="productForm.category_id" @change="getSubCategoryByCategoryId" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-3 pr-8 rounded-lg text-gray-500 leading-tight focus:outline-none">
                                                <option class="text-gray-700">
                                                    -Select Category-
                                                </option>
                                                <option class="text-gray-700" v-for="(cat, i) in categories" :value="cat.id" :key="i" :selected="productForm.category_id == cat.id">
                                                    {{cat.name}}
                                                </option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-name mb-3">
                                        <div class="inline-block relative w-full">
                                            <select id="subcategory_id" v-model="productForm.subcategory_id" @change="getSubCategory" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-3 pr-8 rounded-lg text-gray-500 leading-tight focus:outline-none">
                                                <option class="text-gray-700">
                                                    -Select Sub Category-
                                                </option>
                                                <option class="text-gray-700" v-for="(subc, i) in subcategories" :key="i" :value="subc.id" :selected="productForm.subcategory_id == subc.id">
                                                    {{subc.name}}
                                                </option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description mb-3">
                                    <textarea id="description" v-model="productForm.description" placeholder="Tulis deskripsi produk" class="h-30 rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full"></textarea>
                                </div>

                                <div class="flex mb-3 items-center justify-between">
                                    <!--<span class="font-semibold mr-4">Rp</span>-->
                                    <div class="w-full">
                                        <input type="text" id="price" v-model="productForm.price" placeholder="Masukkan harga" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                    </div>
                                </div>

                                <div class="mb-1">
                                    <span class="text-gray-500 text-sm font-semibold">
                                        *Upload max 5 photos</span>
                                </div>

                                <!-- ======================UPLOAD IMAGE HERE=============================-->
                                <div class="button-plus-upload flex px-4 justify-between items-center mb-3">
                                    <div class>
                                        <el-upload action="#" list-type="picture-card" :on-preview="handlePreview" :on-change="updateImageList" :limit="5" :on-exceed="handleExceed" :on-remove="handleRemove" :auto-upload="false">
                                            <i class="el-icon-plus" />
                                        </el-upload>

                                        <!--<span class="shadow ml-2 mr-2" v-for="(image, i) in images" :key="i.id">
                                            <img :src="'/storage/'+image.image_path" alt="img-thumb" class="rounded object-cover w-full h-16 cursor-pointer hover:opacity-75">
                                        </span>-->

                                        <!-- (this mean modal preview)-->
                                        <el-dialog :visible.sync="dialogVisible" v-for="(image, i) in images" :key="i.id">
                                            <img :src="dialogImageUrl" alt="" width="100%">
                                        </el-dialog>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <button :class="{'disabled': isUpdatingProduct}" class="flex items-center text-white border border-blue-500 bg-blue-500 hover:text-gray-100 font-bold text-sm px-6 py-1 rounded focus:outline-none" type="button" @click="updateProduct(product.id)">
                                        <svg v-if="isUpdatingProduct" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        {{ isUpdatingProduct ? "Updating..." : "Update Product" }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- DIV AFTER MODAL SHOW UP -->
        <div v-if="showModal" class="opacity-25 fixed inset-0 z-30 bg-black"></div>

        <!-- TAB DESC -->
        <transition name="fade">
            <div class="w-full mt-12">

                <div class="flex justify-between items-center border-b leading-loose">

                    <!-- NAV TAB -->
                    <div>
                        <ul class="flex border-b border-gray-300 font-bold">
                            <li class="-mb-px mx-8 cursor-pointer">
                                <span class="inline-block py-2 px-4 text-blue-500 font-semibold  hover:text-blue-800" @click="toggleTabs(1)" v-bind:class="{'text-blue-600': openTab !== 1, 'border-b-2 border-blue-500': openTab === 1}">
                                    Deskripsi
                                </span>
                            </li>
                            <li class="mr-1 cursor-pointer">
                                <span class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" @click="toggleTabs(2)" v-bind:class="{'text-blue-600': openTab !== 2, 'border-b-2 border-blue-500': openTab === 2}">
                                    Tentang Perusahaan
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- END NAV TAB -->

                </div>

                <!-- Deskripsi Produk -->
                <div class="mt-8" v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
                    <div class="flex-1 text-gray-700">
                        <div class="h-full px-6 py-6 relative leading-tight ">
                            <p class="normal-case mb-2 font-semibold leading-tight text-lg">
                                Deskripsi Produk</p>
                            <p class="text-gray-600 leading-tight mb-8" v-if="product.description !== null">
                                {{ product.description }}
                            </p>
                            <p class="text-gray-600 leading-tight mb-8" v-else>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fuga repellendus repudiandae voluptas hic ut officia molestias repellat architecto nulla!
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tentang Perusahaan CARD -->
                <div class="mt-8" v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}">
                    <div class="flex-1 text-gray-700">
                        <div class="h-full px-6 py-6 relative leading-tight ">
                            <p class="normal-case mb-2 font-semibold leading-tight text-lg">
                                Tentang Perusahaan</p>
                            <p class="text-gray-600 leading-tight mb-8" v-if="company.additional_info !== null">
                                {{ company.additional_info }}
                            </p>
                            <p class="text-gray-600 leading-tight mb-8" v-else>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur explicabo eos accusamus dicta unde? Officiis voluptas sit a repellat facere?
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </transition>
    </div>
    <footer-component></footer-component>
</div>
</template>

<script>
import _ from 'lodash';

export default {
    props: ['id'],
    data() {
        return {
            showModal: false,
            loading: true,
            openTab: 1,

            disabled_input_SNI: true,
            disabled_input_TKDN: true,

            // message_sni: '',
            // message_nilai_tkdn: '',
            // message_nomor_sertifikat_tkdn: '',
            // message_nomor_laporan_tkdn: '',

            isSuccess_nomor_sni: false,
            isError_nomor_sni: true,
            isSuccess_nilai_tkdn: false,
            isError_nilai_tkdn: true,
            isSuccess_sertifikat_tkdn: false,
            isError_sertifikat_tkdn: true,
            isSuccess_laporan_tkdn: false,
            isError_laporan_tkdn: true,
            isSuccess_hscode: false,
            isError_hscode: true,

            product: {},
            images: [],
            category: {},
            subcategory: {},
            company: {},

            indexImage: 0,

            categories: [],
            subcategories: [],

            productForm: {
                name: '',
                description: '',
                sni: 0,
                nomor_sni: '',
                tkdn: 0,
                nilai_tkdn: '',
                nomor_sertifikat_tkdn: '',
                nomor_laporan_tkdn: '',
                hs_code: '',
                category_id: '',
                subcategory_id: '',
                price: '',
            },
            imageList: [],

            isUpdatingProduct: false,
            dialogImageUrl: '',
            dialogVisible: false,
            status_msg: '',
            status: '',

            isloggedIn: 'false',
            user_id: '',
        }
    },

    created() {
        this.loadProductDetail();
        this.loadCategory();
        this.getSubCategory();
    },

    mounted() {
        this.isloggedIn = localStorage.getItem('isloggedIn');
        this.user_id = localStorage.getItem('user_id');
    },

    methods: {

        updateImageList(file) {
            this.imageList.push(file.raw);
            console.log(this.imageList);
        },

        handleRemove(file) {
            this.imageList.splice(file, 1);
            console.log(this.imageList);
        },

        handlePreview(file) {
            this.dialogImageUrl = file.url
            this.dialogVisible = true
        },

        handleExceed(files, imageList) {
            this.$message.warning(`The limit is 5, you have selected ${files.length} files`);
        },

        validateForm() {
            // if (this.imageList.length < 0) {
            //     this.status = false
            //     this.showNotification('Image Product cannot be empty')
            //     return false
            // }
            if (!this.productForm.name) {
                this.status = false
                this.showNotification('name cannot be empty')
                return false
            }
            if (!this.productForm.description) {
                this.status = false
                this.showNotification('description cannot be empty')
                return false
            }
            if (!this.productForm.nomor_sertifikat_tkdn) {
                this.status = false
                this.showNotification('nomor sertifikat tkdn cannot be empty')
                return false
            }
            if (!this.productForm.nomor_laporan_tkdn) {
                this.status = false
                this.showNotification('nomor laporan tkdn cannot be empty')
                return false
            }
            if (!this.productForm.hs_code) {
                this.status = false
                this.showNotification('hs code cannot be empty')
                return false
            }
            return true
        },
        showNotification(message) {
            this.status_msg = message
            setTimeout(() => {
                this.status_msg = ''
            }, 5000)
        },

        updateProduct(product_id) {
            if(!this.validateForm())
                return false
            this.isUpdatingProduct = true;
            axios.get('/sanctum/csrf-cookie')
            .then((response) => {
                axios.post('/api/update-product/'+product_id, this.productForm)
                .then((res) => {
                    this.productForm.name = '';
                    this.productForm.description = '';
                    this.productForm.sni = '';
                    this.productForm.nomor_sni = '';
                    this.productForm.tkdn = '';
                    this.productForm.nilai_tkdn = '';
                    this.productForm.nomor_sertifikat_tkdn = '';
                    this.productForm.nomor_laporan_tkdn = '';
                    this.productForm.hs_code = '';
                    this.productForm.price = '';
                    this.productForm.category_id = '';
                    this.productForm.subcategory_id = '';
                    this.isUpdatingProduct = false;
                    this.showModal = false;

                    this.status = true;
                    this.showNotification('Product Successfully Updated');
                    this.imageList = [];
                }).catch((error) => {
                    console.log(error);
                });
            })
            .catch(error => {
                console.log(error);
            })
        },

        loadProductDetail() {
            let product_id = this.id;
            let url = '/api/product-detail/' + product_id;
            axios.get('/sanctum/csrf-cookie')
            .then(res => {
                axios.get(url)
                .then((response) => {
                    this.loading = false;
                    this.product = response.data.product;
                    this.images = response.data.images;
                    this.category = response.data.category;
                    this.subcategory = response.data.subcategory;
                    this.company = response.data.company;
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
            })
            .catch(err => {
                console.log(err);
            });
        },

        modalEdit(product_id) {
            let url = '/api/product-detail/' + product_id;
            axios.get(url)
            .then((response) => {
                this.productForm.name = response.data.product.name;
                this.productForm.description = response.data.product.description;
                this.productForm.sni = response.data.product.sni;
                this.productForm.nomor_sni = response.data.product.nomor_sni;
                this.productForm.tkdn = response.data.product.tkdn;
                this.productForm.nilai_tkdn = response.data.product.nilai_tkdn;
                this.productForm.nomor_sertifikat_tkdn = response.data.product.nomor_sertifikat_tkdn;
                this.productForm.nomor_laporan_tkdn = response.data.product.nomor_laporan_tkdn;
                this.productForm.hs_code = response.data.product.hs_code;
                this.productForm.price = response.data.product.price;
                this.productForm.category_id = response.data.category.id;
                this.productForm.subcategory_id = response.data.subcategory.id;

                console.log(this.productForm.select_subcategory + '---' +this.productForm.select_subcategory);

                this.images.forEach(file => {
                    this.imageList.push('/storage/' + file.image_path);
                });

                if (response.data.product.sni === 1)
                    this.disabled_input_SNI = false;
                else
                    this.disabled_input_SNI = true;

                if (response.data.product.tkdn === 1)
                    this.disabled_input_TKDN = false;
                else
                    this.disabled_input_TKDN = true;

                console.log(response.data);
                console.log(this.imageList);
            })
            .catch(function (error) {
                console.log(error);
            });
            this.showModal = !this.showModal;
            this.imageList = [];
        },

        switchImage(param) {
            setTimeout(() => {
                this.indexImage = param;
            }, 100);
        },

        toggleTabs(tabNumber) {
            this.openTab = tabNumber;
        },

        loadCategory() {
            axios.get('/api/getcategories')
                .then((response) => {
                    this.categories = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        getSubCategoryByCategoryId() {
            axios.get('/api/get-subcategories-by-category-id', {
                    params: {
                        category_id: this.productForm.category_id
                    }
                })
                .then((response) => {
                    this.subcategories = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        getSubCategory() {
            axios.get('/api/get-subcategories')
                .then((response) => {
                    this.subcategories = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        checkHsCode: _.debounce(function () {
            let regex = /^\d+$/;

            let value = regex.test(this.productForm.hs_code);
            if (value == false) {
                this.productForm.hs_code = null;
                this.isError_hscode = true;
                this.isSuccess_hscode = false;
            } else {
                this.isSuccess_hscode = true;
                this.isError_hscode = false;
            }
            return
        }, 1000),

        checkNilaiTKDN: _.debounce(function () {
            let regex = /\d{2}(\.\d{2})?$/;
            let value = regex.test(this.productForm.nilai_tkdn);

            if (value == false) {
                this.productForm.nilai_tkdn = null;
                this.isError_nilai_tkdn = true;
                this.isSuccess_nilai_tkdn = false;
            } else {
                this.isSuccess_nilai_tkdn = true;
                this.isError_nilai_tkdn = false;
            }
            return
        }, 2000),

        checkSertiTKDN: _.debounce(function (check_value) {
            let searchRegExp = /[^\w\.\/\:\,\-]+/;
            let valid = check_value.replace(searchRegExp, '');
            this.productForm.nomor_sertifikat_tkdn = valid;

            if (!valid) {
                this.productForm.nomor_sertifikat_tkdn = null;
                this.isError_sertifikat_tkdn = true;
                this.isSuccess_sertifikat_tkdn = false;
            } else {
                this.isSuccess_sertifikat_tkdn = true;
                this.isError_sertifikat_tkdn = false;
            }
            return
        }, 2000),

        checkLapTKDN: _.debounce(function (check_value) {

            let searchRegExp = /[^\w\.\/\:\,\-]+/;
            let valid = check_value.replace(searchRegExp, '');
            this.productForm.nomor_laporan_tkdn = valid;

            if (!valid) {
                this.productForm.nomor_laporan_tkdn = null;
                this.isError_laporan_tkdn = true;
                this.isSuccess_laporan_tkdn = false;
            } else {
                this.isSuccess_laporan_tkdn = true;
                this.isError_laporan_tkdn = false;
            }
            return
        }, 2000),

        checkSNI: _.debounce(function (check_value) {
            let searchRegExp = /[^\w\.\/\:\,\-]+/;
            let valid = check_value.replace(searchRegExp, '');
            this.productForm.nomor_sni = valid;

            if (!valid) {
                this.productForm.nomor_sni = null;
                this.isError_nomor_sni = true;
                this.isSuccess_nomor_sni = false;
            } else {
                this.isSuccess_nomor_sni = true;
                this.isError_nomor_sni = false;
            }
            return
        }, 2000),

        toggleInputSNI(sni) {
            this.disabled_input_SNI = !this.disabled_input_SNI;
            if (this.disabled_input_SNI === true)
                this.productForm.nomor_sni = '';
        },
        toggleInputTKDN(param) {
            this.disabled_input_TKDN = !this.disabled_input_TKDN;
            if (this.disabled_input_TKDN === true)
                this.productForm.nilai_tkdn = '';
        }
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

input:checked+svg {
    display: block;
}

.el-upload--picture-card {
    background-color: #fbfdff;
    border: 1px dashed #c0ccda;
    border-radius: 6px;
    box-sizing: border-box;
    width: 4rem;
    height: 4rem;
    line-height: 74px;
    vertical-align: top;
}

.el-upload-list--picture-card .el-upload-list__item {
    overflow: hidden;
    background-color: #fff;
    border: 1px solid #c0ccda;
    border-radius: 6px;
    box-sizing: border-box;
    width: 4rem;
    height: 4rem;
    margin: 0 8px 8px 0;
    display: inline-block;
}
</style>
