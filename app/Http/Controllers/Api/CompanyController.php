<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function companyDetail($id)
    {        
        $user = User::find($id);
        $provinsi = User::find($id)->provinsi;
        $kabupaten = User::find($id)->kabupaten;
        $kecamatan = User::find($id)->kecamatan;
        $products = User::find($id)->products;

        return response()->json([
            'user' => $user,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'products' => $products,
        ]);
    }
}
