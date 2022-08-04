<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
class ProductController extends Controller
{
    //
    public function  index() {
        $data = [];
//        $data['brands'] = Brand::active()->select('name')->get();
//         return $brands = Brand::active()->select('id')->get()->makeHidden(['translations'])[0]->name;
        $data['brands'] = Brand::active()->get();
        $data['categories'] = Category::active()->get();
//        return $data['categories'];

        return view('dashboard.products.general.general',compact('data'));


//        foreach($brands as $key=>$brand) {
//            if(preg_match('/[A-Z]/',$brand->name)) {
//                echo '(' . ($key+1) . ') '. 'Yes It Contains' . '<br>';
//            } else {
//                echo '(' . ($key+1) . ') '. 'No It Doesnt Contain' . '<br>';
//            }
//


//            echo '(' . ($key+1) . ') '. ($brand->name) . '<br>';
        }
//        $data['categories'] = Category::active()->select('id')->get();
//        return $data;

}
