<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Models\Role;
// use App\Models\User;


class CustomersController extends Controller
{

    public function login(Request $request)
    {   
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }

        $arr = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => '1',
        ];

        if (Auth::attempt($arr)) {
            return redirect('/users')->with('success', 'Đăng nhập thành công.');
        } else {
            Session::flash('error', 'Email hoặc mật khẩu không đúng!');
            return redirect('/customers');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/customers');
    }

    public function customer_index() {
        return view('customers.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index() {
        return view('admin.index');
    }


    public function customer_login()
    {
        // $users = User::all();
        return view('customers.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function create()
    // {
    //     $role = Role::all();
    //     return view('customers.create', [
    //         'role' => $role,
    //     ]);
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(Request $request)
    // {    
    //     $messages = [
    //         'required' => 'Trường :attribute bắt buộc nhập.',
    //         'email'    => 'Trường :attribute phải có định dạng email'
    //     ];
    //     $validator = Validator::make($request->all(), [
    //             'email'    => 'required|email',
    //             'password' => 'required|numeric|min:6|confirmed',  
    //         ], $messages);

    //     $validated = $request->validated();

    //     if ($validator->fails()) {
    //         return redirect('/')
    //                 ->withErrors($validator)
    //                 ->withInput();
    //     } else {
    //       // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
    //       $user = User::create([
    //         'fullname' => $request->input('fullname'),
    //         'username' => $request->input('username'),
    //         'password' => Hash::make($request->input('password')),
    //         'introduce' => $request->input('introduce'),
    //         // 'company' => $request->input('company'),
    //         // 'position' => $request->input('position'),
    //         // 'website' => $request->input('website'),
    //         // 'yahoo' => $request->input('yahoo'),
    //         // 'skype' => $request->input('skype'),
    //         'type' => $request->input('agent'),
    //         'type_real_estate' => $request->input('loaibds'),
    //         'phone1' => $request->input('phone1'),
    //         'phone2' => $request->input('phone2'),
    //         'email' => $request->input('email'),
    //         'address' => $request->input('address'),
    //     ]);
    //     //save to Database
    //     $user->save();
    //     // return redirect('/');
    //     // return back()->with('success','Tao thanh cong');   
    //       return redirect('/')
    //           ->with('message', 'Đăng ký thành công.');
    //     }       
    // }

    public function store(Request $request)
    {     
        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.',
            'email'    => 'Trường :attribute phải có định dạng email'
        ];
        $validator = Validator::make($request->all(), [
                'email'    => 'required|email|confirmed',
                'password' => 'required|min:6|confirmed',  
            ], $messages);
        if ($validator->fails()) {
            return redirect('customers_register')
                    ->withErrors($validator)
                    ->withInput();
        } else {       
        $user = Customer::create([
            'full_name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'gender' => $request->input('gender'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            // 'role_id' => $request->input('role_id'),
            // 'image_path' => $generatedImageName
        ]);
    //     //save to Database
        $user->save();
        return redirect('customers')->with('message', 'Đăng ký thành công.');
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //like "show details"
    {
        //dd('This is show, id = '.$id);
        $user = Customer::find($id);
        //$category = $user->category();
        $role = Role::find($user->role_id);
        //dd($category);Role
        $user->role = $role;
        //dd($user);
        return view('users.show')->with('User', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Customer::findOrFail($id);
        return view('admin.users.edit', compact('user'));  // -> resources/views/users/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request ,$id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'fullname'=>'required',
            'address'=>'required',
            'role_id'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
        ]); 
        // $users = Customer::find($id);
        $users = Customer::findOrFail($id);
        // Getting values from the blade template form  
        $users->id =  $request->get('id');
        $users->full_name =  $request->get('fullname');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->gender = $request->get('gender');
        $users->phone = $request->get('phone');
        $users->address = $request->get('address');
        $users->role_id = $request->get('role_id');
        $users->save();
 
        return redirect('/users')->with('success', 'User updated.'); // -> resources/views/admin/users/index.blade.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Customer::find($id);
        $user->delete();
        return redirect('/users');
    }

}
