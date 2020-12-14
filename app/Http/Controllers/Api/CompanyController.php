<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function companyDetail(Request $request, $id)
    {        
        $user = User::find($id);
        $provinsi = User::find($id)->provinsi;
        $kabupaten = User::find($id)->kabupaten;
        $kecamatan = User::find($id)->kecamatan;
        $products = Product::where([['user_id', '=', $id],
                    ['name', 'like', '%'.$request->keywords.'%']])
                    ->orderBy('id', 'desc')
                    ->paginate(5);
        return response()->json([
            'user' => $user,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'products' => $products,
        ]);
    }

    public function updateCompanyProfile(Request $request, $user_id)
    {        
        $user = User::find($user_id);
        $user->name = $request->get('name');
        $user->nib = $request->get('nib');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->provinsi_id = $request->get('provinsi_id');
        $user->kabupaten_id = $request->get('kabupaten_id');
        $user->zipcode = $request->get('zipcode');
        $user->additional_info = $request->get('additional_info');
        $user->save();
        
        return response()->json('profile successfuly updated');
    }

}
