<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::all();
        return view('brand.index', ['brands' => $brand]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $name = $request->input('name');
        $des = $request->input('description');
        $logo = $request->file('logo')->getClientOriginalName();
        $request->file('logo')->storeAs('public/image/', $logo);
        $data = [
            'name' => $name,
            'logo' => $logo,
            'description' => $des
        ];
        Brand::create($data);
        return redirect()->route('brand.index')->with('success', 'Brand has create been successful');

    }

    /**
     * Display the specified resource.
     */
    public function show(StoreBrandRequest $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $name = $request->input('name');
        $description = $request->input('description');

        if ($request->file('logo') !== null) {
            $logo = $request->file('logo')->getClientOriginalName(); //lay ten file
            $request->file('logo')->storeAs('public/images', $logo); //luu file vao duong dan public/images voi ten $logo

            $brand->fill([
                'name' => $name,
                'description' => $description,
                'logo' => $logo,
            ])->save();
        } else {
            $brand->fill([
                'name' => $name,
                'description' => $description,

            ])->save();
        }
        return redirect()->route('brand.index')
            ->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand -> delete();
        return redirect()->route('brand.index')->with('success');

    }
}