<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function getBrands()
    {
        return view('brands.brands');
    }
    public function createBrand(Request $request)
    {
        if($request->ajax())
        {
            return response(Brand::create($request->all()));
        }
    }
    public function showBrandInformation()
    {
        $brands = $this->BrandInformation();
        return view('brands.brandInfo',compact('brands'));

    }

    public function BrandInformation()
    {
        return Brand::all();
    }
    public function editBrand(Request $request)
    {
        if($request->ajax())
        {
            return response(Brand::find($request->brand_id));
        }
    }
    //=============================================
    public function updateBrand(Request $request)
    {
        if($request->ajax())
        {
            return response(Brand::updateOrCreate(['brand_id'=>$request->brand_id],$request->all()));
        }
    }
    public function deleteBrand(Request $request)
    {
        if($request->ajax())
        {
            Brand::destroy($request->brand_id);
        }
    }
}
