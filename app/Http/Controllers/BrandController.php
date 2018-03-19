<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function getBrands()
    {
        return view('brands.brands');
    }

    public function downloadBrands()
    {
        $brands = $this->BrandInformation();
        return response()->json($brands);
    }

    public function createBrand(Request $request)
    {
        if ($request->ajax()) {
            return response(Brand::create($request->all()));
        }
    }
    public function showBrandInformation()
    {
        $brands = $this->BrandInformation();
        return view('brands.brandInfo', compact('brands'));

    }

    public function BrandInformation()
    {
        return Brand::all();
    }
    public function editBrand(Request $request)
    {
        if ($request->ajax()) {
            return response(Brand::find($request->id));
        }
    }
    //=============================================
    public function updateBrand(Request $request)
    {
        if ($request->ajax()) {
            return response(Brand::updateOrCreate(['id' => $request->id], $request->all()));
        }
    }
    public function deleteBrand(Request $request)
    {
        if ($request->ajax()) {
            Brand::destroy($request->id);
        }
    }
}
