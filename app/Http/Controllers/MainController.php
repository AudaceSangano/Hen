<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
use App\Models\Product;

class MainController extends Controller
{
    public function getProvince()
    {
        $data = Province::all();
        return response()->json($data);
    }
    public function getDistrict($province_id)
    {
        $data = District::where('province_id', $province_id)->get();
        return response()->json($data);
    }

    function getSector($district_id)
    {
        $data = Sector::where("district_id",$district_id)->get();
        return response()->json($data);
    }

    public function dashboard()
    {
        return view('layout.dashboard');
    }

    public function registerProduct(Request $req)
    {
        $credentials = $req->validate([
            'product_name' => ['required'],
            'product_type' => ['required'], 
            'product_telephone' => ['required'],
            'product_email' => ['required'],
            'product_quantity' => ['required'],
            'price_per_unit' => ['required'],
        ]);

        Product::create([
            'name' => $req->product_name,
            'telephone' => $req->product_telephone,
            'quantity'=>$req->product_quantity,
            'price'=>$req->price_per_unit,
            'category_id' =>$req->product_type,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('farmer.product.list');
    }

    public function farmerProductList()
    {
        $data = Product::where('user_id',Auth::id())
                ->join('categories','categories.category_id','products.category_id')->get();
        return view("layout.listFarmerProduct",compact('data'));
    }

    public function deleteProduct($id)
    {
        DB::table('products')
        ->where('product_id',$id)
        ->delete();
        return back();
    }

    public function updateProduct($id)
    {
        $data = DB::table('products')
        ->join('categories','categories.category_id','products.category_id')
        ->where('product_id',$id)
        ->first();
        return view('layout.viewSinglePlot',compact('data'));
    }

    public function updatePlotOp(Request $req)
    {
        $credentials = $req->validate([
            'id' => ['required'],
            'product_type' => ['required'],
            'product_telephone' => ['required'],
            'product_email' => ['required'],
            'product_quantity' => ['required'],
            'price_per_unit' => ['required'],
        ]);

        DB::table('products')
        ->where('product_id',$req->input('id'))
        ->update([
            'name' => $req->product_name,
            'telephone' => $req->product_telephone,
            'quantity'=>$req->product_quantity,
            'price'=>$req->price_per_unit,
            'category_id' =>$req->product_type,
        ]);
        return back();
    }

    public function profile()
    {
        $data = User::where('user_id', Auth::id())->first();
        return view("layout.account",compact('data'));
    }

    public function profileOp(Request $req)
    {
        $credentials = $req->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'telephone' => ['required','max:13'],
        ]);

        DB::table('users')
        ->where('user_id',Auth::id())
        ->update([
            'name' => $req->name,
            'email' => $req->email,
            'telephone'=>$req->telephone,
        ]);
        return back();
    }

    public function farmerList()
    {
        $farmers = DB::table('users')
                    ->join('sectors','sectors.sector_id','=','users.sector_id')
                    ->join('districts','districts.district_id','=','sectors.district_id')
                    ->join('provinces','provinces.id','=','districts.province_id')
                    ->select('users.*', 'sectors.*', 'districts.*', 'provinces.name as province_name')
                    ->where('role_id', 2)
                    ->get();
        return view('layout.farmerList', compact('farmers'));
    }

    public function customerList()
    {
        $customers = DB::table('users')
                    ->join('sectors','sectors.sector_id','=','users.sector_id')
                    ->join('districts','districts.district_id','=','sectors.district_id')
                    ->join('provinces','provinces.id','=','districts.province_id')
                    ->select('users.*', 'sectors.*', 'districts.*', 'provinces.name as province_name')
                    ->where('role_id', 3)
                    ->get();
        return view('layout.customerList', compact('customers'));
    }

    public function productList()
    {
        $products = DB::table('products')
                    ->join('users','users.user_id','=','products.user_id')
                    ->join('categories','categories.category_id','=','products.category_id')
                    ->join('sectors','sectors.sector_id','=','users.sector_id')
                    ->join('districts','districts.district_id','=','sectors.district_id')
                    ->select('products.*','users.name as user_name','users.email','users.telephone', 'sectors.*', 'districts.*','categories.*')
                    ->get();
        return view('layout.productList', compact('products'));
    }

    public function productListByCategory($category)
    {
        $products = DB::table('products')
                    ->join('users','users.user_id','=','products.user_id')
                    ->join('categories','categories.category_id','=','products.category_id')
                    ->join('sectors','sectors.sector_id','=','users.sector_id')
                    ->join('districts','districts.district_id','=','sectors.district_id')
                    ->select('products.*','users.name as user_name','users.email','users.telephone', 'sectors.*', 'districts.*','categories.*')
                    ->where('categories.cat_name', $category)
                    ->get();
        return view('layout.productList', compact('products'));
    }
}
