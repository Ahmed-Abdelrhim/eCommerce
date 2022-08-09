<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\PrdouctGeneralRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    //
    public function index()
    {

    }

    //return general product form function
    public function create() {
        $data = [];
//        $data['brands'] = Brand::active()->select('name')->get();
//         return $brands = Brand::active()->select('id')->get()->makeHidden(['translations'])[0]->name;
        $data['brands'] = Brand::active()->get();
        $data['categories'] = Category::active()->get();
//        return $data['categories'];

        return view('dashboard.products.general.general', compact('data'));


//        foreach($brands as $key=>$brand) {
//            if(preg_match('/[A-Z]/',$brand->name)) {
//                echo '(' . ($key+1) . ') '. 'Yes It Contains' . '<br>';
//            } else {
//                echo '(' . ($key+1) . ') '. 'No It Doesnt Contain' . '<br>';
//            }
//


//            echo '(' . ($key+1) . ') '. ($brand->name) . '<br>';
    }


    //return product price view
//    public function productPrice() {
//        return view('dashboard.products.general.price');
//    }

    //store product general data in database
    public function store(PrdouctGeneralRequest $request) {
        if(!$request->has('status')) {
            $request->request->add(['status' => 0]);
        }
        $fields = [$request->slug,$request->name,$request->description];

//       if($this->validateRequestString($fields)) {
           return $request ;
//       }
//       else {
//           return 'Enter Only String In Slug , Name , Description Fields ';
//       }
    }

    //check if the request of slug , name , description are strings or not
    public function validateRequestString(array $data) {
        $fields = [];
        foreach ($data as $item) {
            if(trim(!is_numeric($item))) {
                array_push($fields , 'true');
            } else {
                array_push($fields , 'false');
            }
        }
        if(!in_array('false',$fields)) {
            return true;
        } else {
            return false;
        }
    }

}
