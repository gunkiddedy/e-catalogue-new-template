@extends('layouts.app')

@section('content')

    {{-- CONTAINER --}}
    <div class="px-16 bg-gray-100">

        <header>
            <div class="px-4 py-4 flex justify-between items-center">
    
                {{-- CCOMPANY NAME --}}
                <a class="font-bold text-gray-600 text-2xl lg:text-2xl" href="">
                    Katalogi
                </a>
    
                {{-- SEARCH PRODUCTS HEADER--}}
                <div class="w-full mx-20 relative">
                    <form action="" method="GET">
                        <button type="submit" class="absolute right-0 mt-2 mr-2 text-gray-500">
                            <svg class="w-5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                        <input class="shadow appearance-none rounded-lg w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-inner" id="search" type="search" placeholder="Search products">
                    </form>
                </div>
    
                {{-- HUMBERGER MENU --}}
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3 " viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                    </button>
                </div>
    
                {{-- BUTTON LOGIN REGISTER --}}
                <div class="">
                    <a href="/login">
                        <button class="bg-orange-custom px-4 py-2 rounded-lg w-48" type="button">
                            <span class="leading-tight text-white font-semibold">Login / Register</span>
                        </button>
                    </a>
                </div>
            </div>
        </header>

        {{-- BORDER BOTTOM HEADER --}}
        <div class="-ml-16 -mr-16 border-t border-gray-300"></div>
        
        {{-- CONTENT--}}
        <div class="flex px-4 py-4 mt-4">

            {{-- SIDEBAR --}}
            <div class="bg-white h-full w-64 rounded-lg mr-6 shadow">

                <div class="bg-blue-500 rounded-t-lg h-12">
                    <p class="px-8 py-3 text-gray-100 font-semibold">
                        Filter  
                    </p>
                </div>
                
                <div class="px-6 mb-3 mt-3">
                    <p class="py-2 text-gray-800 font-semibold leading-tight">Provinsi</p>
                    <button type="button" id="btn-prop" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                        <P class="text-sm text-gray-700">Show All</P>
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="px-6 mb-3 mt-3">
                    <p class="py-2 text-gray-800 font-semibold leading-tight">Kabupaten</p>
                    <button type="button" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                        <P class="text-sm text-gray-700">Show All</P>
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="px-6 mb-3 mt-3">
                    <p class="py-2 text-gray-800 font-semibold leading-tight">Category</p>
                    <button type="button" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                        <P class="text-sm text-gray-700">Show All</P>
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="px-6 mb-8 mt-3">
                    <p class="py-2 text-gray-800 font-semibold leading-tight">Sub Category</p>
                    <button type="button" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                        <P class="text-sm text-gray-700">Show All</P>
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
            {{-- END SIDEBAR --}}

            {{-- MAIN CONTENT --}}
            <div class="w-full">

                {{-- PRODUCT PAGE DESCRIPTIONS --}}
                <div class="flex justify-between items-center">
                    <p class="leading-tight text-sm">Menampilkan 12 produk dari +100 ribu produk yang ada di <span class="font-bold">Katalogi</span></p>
                    <div class="flex justify-between items-center">
                        <p class="mr-2 text-sm">Urutkan :</p>
                        <button type="button" class="bg-white w-48 flex justify-between leading-tight text-sm py-2 px-4 border rounded border-gray-400 text-left">
                            <p>Paling sesuai</p>
                            <svg class="w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        
                    </div>
                </div>

                {{-- PRODUCTS  --}}
                <div class="mt-8 grid grid-cols-5 gap-4">

                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <a href="/product-detail">
                                    <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                        <p>See Product</p>
                                    </button>
                                </a>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                    <p>See Product</p>
                                </button>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                    <p>See Product</p>
                                </button>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                    <p>See Product</p>
                                </button>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                    <p>See Product</p>
                                </button>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                    <p>See Product</p>
                                </button>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                    <p>See Product</p>
                                </button>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    {{-- PRODUCT CARD --}}
                    <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">

                        {{-- image --}}
                        <img src="/img/login-img.png" alt="" class="rounded-t-lg">

                        {{-- product description --}}
                        <div class="absolute px-2 py-4 bg-white rounded-lg leading-tight  hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">

                            {{-- show element --}}
                            <p class="normal-case mb-6 font-bold text-sm leading-tight">
                                Customized Pre-filter untuk Blower dan FFU
                            </p>
                            <p class="uppercase text-gray-600 leading-tight text-xs">
                                pt. maju jaya prima perkasa abadi
                            </p>

                            <div>
                                <p class="mt-2 mb-2 text-xs text-gray-500">
                                    Jakarta Barat
                                </p>
                                <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                    <p class="text-gray-300 text-xs">SNI</p>
                                </div>
                                <p class="font-bold mb-2">
                                    <span class="text-red-500 font-bold">Rp250.000</span> 
                                    <span class="text-sm">/ pc</span>
                                </p>
                                <p class="text-xs mb-4 text-gray-500">
                                    Visit in order to contact the seller
                                </p>
                                <button class="bg-blue-600 text-white px-4 py-2 w-full rounded-lg  font-bold leading-tight font-sm">
                                    <p>See Product</p>
                                </button>
                            </div>
                        </div>
                        {{-- end product description --}}
                    </div>
                    {{-- END PRODUCT CARD --}}
                    
                    
                </div>
                {{-- END PRODUCTS  --}}

                {{-- PAGINATION --}}
                <div class="flex justify-around items-center mt-16">
                    <ul class="flex justify-between items-center leading-tight font-bold text-gray-700">
                        <div class="rounded-full bg-gray-500 text-orange-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </div>
                        <li class="px-4 underline text-orange-400">1</li>
                        <li class="px-4">2</li>
                        <li class="px-4">3</li>
                        <li class="px-4">4</li>
                        <li class="px-4">5</li>
                        <li class="px-4">6</li>
                        <li class="px-4">7</li>
                        <li class="px-4">8</li>
                        <li class="px-4">9</li>
                        <div class="rounded-full bg-orange-500 text-orange-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </div>
                    </ul>
                </div>

            </div>
            {{-- END MAIN CONTENT --}}

        </div>
        {{-- END CONTENT --}}


    </div>
    {{-- END CONTAINER --}}

    {{-- FOOTER --}}
    <footer>
        <div class="bg-gray-900 w-full mt-16 text-gray-300 px-16 py-16 flex justify-around text-sm">
            <div class="h-full w-64 mr-6">
                <div class="w-48">
                    <p class="text-orange-400 font-bold mb-2">Kantor Pusat</p>
                    <p>Jl. Rasamala Raya Blok L10 No 14 Perumahan Telaga Pesona Telaga Murni - Cikarang Barat</p>
                </div>
                <div class="mt-8 w-48">
                    <p class="text-orange-400 font-bold mb-2">Kantor Cabang</p>
                    <p>Jl. Rasamala Raya Blok L10 No 14 Perumahan Telaga Pesona Telaga Murni - Cikarang Barat</p>
                </div>
            </div>
            <div class="">
                <p class="text-orange-400 font-bold mb-2">Informasi</p>
                <ul class="">
                    <li>Karir</li>
                    <li>Tentang Kami</li>
                    <li>Hubungi Kami</li>
                    <li>Telusuri Kategori</li>
                    <li>Kebijakan & Privasi</li>
                    <li>Syarat & Ketentuan</li>
                    <li>Bantuan</li>
                </ul>
            </div>
            <div class="">
                <p class="text-orange-400 font-bold mb-2">Penjual</p>
                <ul class="">
                    <li>Cara Jual</li>
                    <li>Cara Daftar Produk</li>
                    <li>Panduan Promosi</li>
                </ul>
            </div>
            <div class="">
                <p class="text-orange-400 font-bold mb-2">Pembeli</p>
                <ul class="">
                    <li>Cara Beli</li>
                    <li>Cara Membayar</li>
                    <li>Menghindari Penipuan</li>
                </ul>
            </div>
            <div class="">
                <p class="text-orange-400 font-bold mb-2">Layanan Kami</p>
                <ul class="">
                    <li>SEO</li>
                    <li>SEM</li>
                    <li>Advertisement</li>
                </ul>
            </div>
            <div class="">
                <p class="text-orange-400 font-bold mb-2">Ikuti Kami</p>
                <div class="flex">
                    <svg class="mr-4 text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>

                    <svg class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                </div>
            </div>
        </div>
    </footer>
    
@endsection