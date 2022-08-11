<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class SettingsController extends Controller
{
    //Return Shipping Methods to Shipping View
    public function shippingMethods($type)
    {
        if (in_array($type, ['free', 'local', 'outer'])) {
            $shippingMethod = Settings::where('key',$type.'_shipping_label')->first();
            return view('dashboard.settings.shipping.shipping' , compact('shippingMethod'));
        } else {
            return redirect() ->back()->with(['error' => 'No Shipping Method Match Selection']);
        }
    }

    //Edit Shipping Methods Into Database
    public function editShippingMethod(ShippingRequest $request,$shippingMethodID) {
        try {
            $shippingMethod = Settings::find($shippingMethodID);
            $shippingMethod->update(['plain_value' => $request->cost]);
            $shippingMethod->value = $request->key;
            $shippingMethod->save();
            return redirect()->back()->with(['success' => __('admin/index.Updated Successfully Into Database')]);
        } catch(Exception $exception) {
            return __('admin/index.Something Went Wrong While Updating Into Database Please Try Again');
        }
    }
}
