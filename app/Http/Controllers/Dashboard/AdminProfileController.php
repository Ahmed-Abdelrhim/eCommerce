<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Hash;
use DB;
use PHPUnit\Exception;

class AdminProfileController extends Controller
{
    //Admin Profile View Function
    public function adminProfile()
    {
        $admin = auth()->guard('admin')->user();
        return view('dashboard.profile.profile', compact('admin'));
    }

    //Updating Admin Profile Professionally
    public function updateAdminProfile(AdminProfileRequest $request)
    {
        //write your functionality here
        $admin = Admin::find(auth()->guard('admin')->user()->id);
        if (Hash::check($request->currentPassword, $admin->password)) {
            if (!$request->has('photo')) {
                $image_name = $admin->photo;
            } else {
                $image_name = $this->storeImage('admins', $request->photo);
            }
            $admin->photo = $image_name;
            if ($request->newPassword != null && $request->confirmNewPassword != null) {
                if ($request->newPassword === $request->confirmNewPassword) {
                    if (!is_numeric($request->newPassword) || !is_numeric($request->confirmNewPassword)) {
                            $admin->update([
                                'name' => $request->name,
                                'email' => $request->email,
                                'password' => bcrypt($request->confirmNewPassword),
                            ]);
                        return redirect()->back()->with(['success' => 'Data Updated Successfully']);
                    } else {
                        return 'New Password Cant Be Only Numbers';
                    }
                } else {
                    return 'New Password Doesnt Match Confirm New Password';
                }
            } else {
                $admin->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
                return redirect()->back()->with(['success' => 'Data Updated Successfully']);
            }

        } else {
            return redirect()->back()->with(['error' => 'Current Password Is Wrong!']);
        }
    }

    //Store Image To Database And Moves It TO Images/Offers File
    public function storeImage($folder, $photo)
    {
        $extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $extension;
        $path = 'assets/images/' . $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
}


//$request->mereg([takes an array removes the old value and insert a new one])

/*
 * //            $request->merge(['currentPassword' => bcrypt($request->currentPassword)]);
//            if ($request->newPassword != '' && $request->confirmNewPassword != '') {
//                if ($request->newPassword === $request->confirmNewPassword) {
//                    if ($request->photo != '') {
//                        $photo_name = $this->storeImage($request->photo, 'assets/Images/admins');
//                        $admin->update([
//                            'photo' => $photo_name,
//                            'name' => $request->name,
//                            'email' => $request->email,
//                            'password' => bcrypt($request->confirmNewPassword),
//                        ]); // updating with updating photo
//                    } else {
//                        $admin->update([
//                            'name' => $request->name,
//                            'email' => $request->email,
//                            'password' => bcrypt($request->confirmNewPassword),
//                        ]);
//                    } // updating without photo
//                    return redirect()->back()->with(['success' => 'Inserted Successfully Into Database']);
//                } else {
//                    return redirect()->back()->with(['notMatch' => 'New Password and Confirm New Password Should Be The Identical']);
//                }
//            } else {
//                if ($request->photo != '') {
//                    $photo_name = $this->storeImage($request->photo, 'assets/Images/admins');
//                    $admin->update([
//                        'photo' => $photo_name,
//                        'name' => $request->name,
//                        'email' => $request->email,
//                    ]); // updating with photo
//                } else {
//                    $admin->update([
//                        'name' => $request->name,
//                        'email' => $request->email,
//                    ]);
//                } // updating without photo
//                // Inserted Successfully
//                return redirect()->back()->with(['success' => 'Inserted Successfully Into Database finally']);
//            }
 */


/*
 * //            if(trim(strlen($request->newPassword)) >= 8 ||  trim(strlen($request->confirmNewPassword)) >= 8) {
//                if(trim(!is_numeric($request->newPassword)) && trim(!is_numeric($request->confirmNewPassword))) {
//                    if($request->newPassword === $request->confirmNewPassword) {
//                        $admin->update($request->only('name','email'));
//                        $admin->password = bcrypt($request->confirmNewPassword);
//                        return redirect() ->back()->with(['success' => 'Updated Successfully ']);
//                        //return  'Password Updated Successfully ';
//
//                    } else {
//                        return'New Password Doesnt Match Confirm New Password';
//                    }
//                } else {
//                    return  'New Password Cant Be Only Numbers ';
//                }
//            } else {
//                return 'New Password Cant Be Less Than 8 Chars';
//            }
 * */
