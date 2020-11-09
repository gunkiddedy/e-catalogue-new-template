<template>
<div>
    <!-- loader spin-->
    <div v-if="loading" class="z-30 flex justify-around relative opacity-25 bg-black inset-0">
        <svg class="animate-spin absolute w-12 h-12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.315px" height="122.88px" viewBox="0 0 122.315 122.88" enable-background="new 0 0 122.315 122.88" xml:space="preserve">
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M94.754,14.534c8.844,0,16.014,7.17,16.014,16.012 c0,8.844-7.17,16.015-16.014,16.015c-8.843,0-16.013-7.17-16.013-16.015C78.741,21.704,85.911,14.534,94.754,14.534L94.754,14.534z M109.265,52.121c-7.205,0-13.049,5.844-13.049,13.048c0,7.207,5.844,13.049,13.049,13.051c7.207,0,13.051-5.844,13.051-13.051 C122.315,57.965,116.472,52.121,109.265,52.121L109.265,52.121z M94.135,89.903c-5.032,0-9.114,4.082-9.114,9.113 c0,5.032,4.082,9.114,9.114,9.114c5.031,0,9.113-4.082,9.113-9.114C103.248,93.985,99.166,89.903,94.135,89.903L94.135,89.903z M59.275,104.65c-5.032,0-9.114,4.081-9.114,9.113c0,5.034,4.082,9.116,9.114,9.116s9.113-4.082,9.113-9.116 C68.389,108.731,64.308,104.65,59.275,104.65L59.275,104.65z M23.652,90.86c-4.717,0-8.54,3.823-8.54,8.54 c0,4.715,3.823,8.54,8.54,8.54c4.714,0,8.538-3.825,8.538-8.54C32.19,94.684,28.366,90.86,23.652,90.86L23.652,90.86z M9.096,54.872C4.072,54.872,0,58.944,0,63.968c0,5.021,4.072,9.093,9.096,9.093c5.021,0,9.093-4.072,9.093-9.093 C18.189,58.944,14.116,54.872,9.096,54.872L9.096,54.872z M23.652,17.026c-6.354,0-11.508,5.155-11.508,11.509 s5.154,11.506,11.508,11.506s11.506-5.152,11.506-11.506S30.006,17.026,23.652,17.026L23.652,17.026z M59.341,0 c-7.651,0-13.858,6.205-13.858,13.855c0,7.651,6.207,13.856,13.858,13.856s13.856-6.205,13.856-13.856 C73.197,6.205,66.992,0,59.341,0L59.341,0z" />
            </g>
        </svg>
    </div>

    <!-- Breadcrumbs-->
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

    </div>

    <!-- MAIN CONTENT-->
    <transition name="fade">
        <div class="flex px-4 py-4 mt-4" v-if="!loading">

            <!-- PRODUCT DETAIL-->
            <div class="w-full mr-6 flex">

                <!-- LEFT SIDE-->
                <div class="product-image w-full mr-6">

                    <!-- IMG ZOOM-->
                    <div class="img-zoom bg-white bg-cover rounded shadow px-4 py-4 h-106">
                        <img :src="'/storage/'+images[indexImage].image_path" :alt="images[indexImage].name" class="rounded object-cover w-full h-full">
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
                            <div class="shadow rounded-lg bg-white w-20 h-auto px-2 py-2 mr-2" v-for="(image, index) in images" :key="image.id">
                                <img @click="switchImage(index)" :src="'/storage/'+image.image_path" :alt="image.name" class="rounded object-cover w-full h-16 cursor-pointer">
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

                        <div class="flex items-center justify-start">
                            <span class="text-blue-400 mr-2 cursor-pointer" @click="modalEdit()">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                            </span>
                            <span class="text-orange-400 cursor-pointer" @click="deleteProduct()">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </div>

                    </div>

                    <div class="border-t border-gray-300 my-4"></div>

                    <div class="flex flex-col text-sm text-gray-600 leading-tight">
                        <span class="mb-2">No. SNI: {{product.nomor_sni}}</span>
                        <span class="mb-2">No. Sertifikat TKDN: {{product.nomor_sertifikat_tkdn}}</span>
                        <span class="mb-2">No. Laporan: {{product.nomor_laporan_tkdn}}</span>
                    </div>

                    <div class="flex items-center justify-between text-sm text-gray-600 leading-tight">
                        <div class="w-2/6">Nilai TKDN: </div>
                        <div class="w-full bg-white h-2 rounded-full mr-2 relative">
                            <div class="absolute bg-green-500 h-2 rounded-full" :style="'width:'+product.nilai_tkdn+'%'"></div>
                        </div>
                        <div class="text-green-500 font-bold">{{product.nilai_tkdn}}</div>
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
                            <span class="text-gray-600 mr-2 text-sm">HS Code:</span>
                            <span class="text-gray-700">{{product.hs_code}}</span>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT SIDEBAR-->
            <div class="bg-white h-full w-64 rounded-lg shadow">

                <div class="flex justify-center items-center flex-col my-6">
                    <div class="bg-blue-500 rounded-full w-20 h-20"></div>

                    <div class="flex justify-center items-center flex-col leading-tight">
                        <div class="px-4 py-4 text-center">
                            <span class="font-bold text-sm text-gray-700">{{company.name}}</span>
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
                        <button class="bg-red-500 relative w-12 h-12 rounded-full p-1 border-4 border-white text-white" @click="modalEdit()">
                            <svg class="w-6 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-start mb-2">
                    <h3 class="text-lg leading-tight font-semibold text-gray-400">
                        Add New Product <span class="ml-4 text-sm font-sf-pro" :class="{'text-green-400': status, 'text-red-400': !status }">{{ status_msg }}</span>
                    </h3>
                </div>

                <!--body-->
                <!--<div v-if="status_msg" :class="{'text-green-400': status, 'text-red-400': !status }">
                                    <span>{{ status_msg }}</span>
                                </div>-->

                <form>
                    <div class="grid grid-cols-2 gap-4 h-full">
                        <!-- LEFT SIDE-->
                        <div class="left w-full h-full py-2">
                            <div class="product-name mb-3">
                                <input id="name" v-model="name" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Product Name">
                            </div>
                            <div class="grid grid-rows-2">
                                <div class="flex mb-3 items-center justify-between">
                                    <div class="w-1/12">
                                        <!--<input true-value="1" false-value="0" type="checkbox" name="sni" id="sni" v-model="sni" class="rounded-lg">-->
                                        <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input name="sni" id="sni" v-model="sni" type="checkbox" true-value="1" false-value="0" class="opacity-0 absolute">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <label @click="toggleInputSNI" for="sni" class="text-gray-500 font-semibold w-1/6 mr-4">
                                        SNI
                                    </label>
                                    <div class="w-full">
                                        <input :disabled="disabled_input_SNI" name="nomor_sni" id="nomor_sni" v-model="nomor_sni" @keyup="checkSNI(nomor_sni)" type="text" placeholder="SNI Number" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" :class="{'text-green-400': isSuccess_nomor_sni, 'text-red-400': isError_nomor_sni}">

                                    </div>
                                </div>
                                <div class="flex mb-3 items-center justify-between">
                                    <div class="w-1/12">
                                        <!--<input type="checkbox" true-value="1" false-value="0" name="tkdn" id="tkdn" v-model="tkdn" class="rounded-lg">-->
                                        <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input name="tkdn" id="tkdn" v-model="tkdn" type="checkbox" true-value="1" false-value="0" class="opacity-0 absolute">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <label @click="toggleInputTKDN" for="tkdn" class="text-gray-500 font-semibold w-1/6 mr-4">
                                        TKDN
                                    </label>
                                    <div class="w-full">
                                        <input :disabled="disabled_input_TKDN" name="nilai_tkdn" id="nilai_tkdn" v-model="nilai_tkdn" @keyup="checkNilaiTKDN(nilai_tkdn)" type="text" placeholder="Nilai TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-2/4" :class="{'text-green-400': isSuccess_nilai_tkdn, 'text-red-400': isError_nilai_tkdn}">

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
                                        <input v-model="nomor_sertifikat_tkdn" @keyup="checkSertiTKDN(nomor_sertifikat_tkdn)" name="nomor_sertifikat_tkdn" id="nomor_sertifikat_tkdn" type="text" placeholder="Nomor Sertifikat TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" :class="{'text-green-400': isSuccess_sertifikat_tkdn, 'text-red-400': isError_sertifikat_tkdn}">

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
                                        <input name="nomor_laporan_tkdn" v-model="nomor_laporan_tkdn" @keyup="checkLapTKDN(nomor_laporan_tkdn)" id="nomor_laporan_tkdn" type="text" placeholder="Nomor Laporan" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" :class="{'text-green-400': isSuccess_laporan_tkdn, 'text-red-400': isError_laporan_tkdn}">

                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-rows-1">
                                <div class="flex mb-3 items-center justify-between">
                                    <div class="text-gray-500 w-26-persen font-semibold mr-4">
                                        HS Code
                                    </div>
                                    <div class="w-full">
                                        <input name="hs_code" id="hs_code" v-model="hs_code" @keypress="checkHsCode(hs_code)" :class="{'text-green-400': isSuccess_hscode, 'text-red-400': isError_hscode}" type="text" placeholder="ex. 0987789009876" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- RIGHT SIDE-->
                        <div class="right w-full h-full py-2">

                            <div class="grid grid-rows-2">
                                <div class="product-name mb-3">
                                    <div class="inline-block relative w-full">
                                        <select name="category_id" id="category_id" v-model="select_category" @change="loadSubCategory" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-3 pr-8 rounded-lg text-gray-500 leading-tight focus:outline-none">
                                            <option class="text-gray-700" value="" selected="selected">
                                                -Select Category-
                                            </option>
                                            <option class="text-gray-700" v-for="(cat, i) in categories" :value="cat.id" :key="i">
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
                                        <select name="subcategory_id" id="subcategory_id" v-model="select_subcategory" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-3 pr-8 rounded-lg text-gray-500 leading-tight focus:outline-none">
                                            <option class="text-gray-700" value="" selected="selected">
                                                -Select Sub Category-
                                            </option>
                                            <option class="text-gray-700" v-for="(subc, i) in subcategories" :key="i" :value="subc.id">
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
                                <textarea name="description" id="description" v-model="description" placeholder="Tulis deskripsi produk" class="h-30 rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full"></textarea>
                            </div>

                            <div class="flex mb-3 items-center justify-between">
                                <!--<span class="font-semibold mr-4">Rp</span>-->
                                <div class="w-full">
                                    <input type="text" name="price" id="price" v-model="price" placeholder="Masukkan harga" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                </div>
                            </div>

                            <div class="mb-1">
                                <span class="text-gray-500 text-sm font-semibold">
                                    *Upload max 5 photos</span>
                            </div>

                            <div class="button-plus-upload flex px-4 justify-between items-center mb-3">
                                <div class>
                                    <el-upload action="#" list-type="picture-card" :on-preview="handlePreview" :on-change="updateImageList" :limit="5" :on-exceed="handleExceed" :on-remove="handleRemove" :auto-upload="false">
                                        <i class="el-icon-plus" />
                                    </el-upload>
                                    <el-dialog :visible.sync="dialogVisible" v-if="!status">
                                        <img width="100%" :src="dialogImageUrl" alt>
                                    </el-dialog>
                                </div>
                            </div>

                            <div class="flex items-center justify-end">
                                <button :class="{'disabled': isCreatingPost}" class="flex items-center text-white border border-blue-500 bg-blue-500 hover:text-gray-100 font-bold text-sm px-6 py-1 rounded focus:outline-none" type="button" @click="createPost">
                                    <svg v-if="isCreatingPost" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    {{ isCreatingPost ? "Submitting..." : "Submit Product" }}
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
</div>
</template>

<script>
export default {
    data() {
        return {
            showModal: false,
            loading: true,
            openTab: 1,
            product: {},
            images: [],
            category: {},
            subcategory: {},
            company: {},

            indexImage: 0,
        }
    },

    created() {
        this.loadProductDetail();
        // this.getProductIdFromUrl();
    },

    methods: {

        modalEdit: function () {
            this.showModal = !this.showModal;
        },

        switchImage: function (param) {
            this.indexImage = param;
        },

        getProductIdFromUrl: function () {
            let currentUrl = window.location.pathname;
            let arr = new Array();
            arr = currentUrl.split("/");
            let id = arr[2];
            return id;
            // console.log(arr);
        },

        loadProductDetail: function () {
            let product_id = this.getProductIdFromUrl();
            let url = '/api/product-detail/' + product_id;
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
        },

        toggleTabs: function (tabNumber) {
            this.openTab = tabNumber;
        }
    }
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
