<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\PrdouctGeneralRequest;
use App\Http\Requests\ProductImagesRequest;
use App\Models\Images;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    //Viewing Products Table
    public function index()
    {
        $products = Product::paginate(PAGINATION_COUNT);
        return view('dashboard.products.general.index' , compact('products'));
    }

    //return general product form function
    public function create() {
        $data = [];
//        $data['brands'] = Brand::active()->select('name')->get();
//         return $brands = Brand::active()->select('id')->get()->makeHidden(['translations'])[0]->name;
        $data['brands'] = Brand::active()->get();
        $data['categories'] = Category::active()->get();
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
        if(!$request->has('is_active')) {
            $request->request->add(['is_active' => 0]);
        } else {
            $request->request->add(['is_active' => 1]);
        }
        $fields = [$request->slug,$request->name,$request->description];

       if($this->validateRequestString($fields)) {
          Product::create($request->except(['_token','id','categories']));
          return success('Product Inserted Successfully');
       } else {
           return 'Enter Only String In Slug , Name , Description Fields ';
       }
    }

    //View Full Product Page
    public function viewFullProduct($product_id) {
        $product = Product::find($product_id);
        return view('dashboard.products.general.fullProduct')->with('product' , $product);
    }

    //View Images viewImageForm
    public function viewImageForm($product_id) {
        return view('dashboard.products.images.create')->with('id',$product_id);
    }

    //save images from dropzone
    public function dropzoneImages(Request $request) {
         $image = $request->file('dzfile');
         $image_name = time() . '.' . $image->extension();
        return response()->json([
            'name' => $image_name,
        ]);
    }

    //save images to db
    public function saveImagesToDatabase(ProductImagesRequest $request,$product_id) {
        try {
            $product = Product::findOrFail($product_id);
            if(!$product) {
                return errors('Invalid ID');
            } else {
                //Update Product Images
//                Images::
            }

        } catch (\Exception $exception) {
            return redirect()->route('products');
        }
    }

    //update product
    public function updateProduct() {
    }

    //delete product
    public function deleteProduct() {
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


    public function encode() {
        $arr = ['1' => 'Ahmed' , '2' => 'Esraa' , '3'=> 'Abdelrhim', '4'=> 'Gamal'];
        if(is_array($arr)){
//            $json =  json_encode($arr);
            $json = response()->json($arr);
            return json_decode($json);
        }
    }

}
//#0d1117
