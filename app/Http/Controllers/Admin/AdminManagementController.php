<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;

class AdminManagementController extends Controller
{
    public function index()
    {
        $admins = Admin::where('id', '!=', Auth::guard('admin')->id())->get();
        return view('admin.admin_management.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admin_management.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:admins',
            'password' => 'required|min:4',
            'admin_type' => 'required',
            'status' => 'required',
        ];

        $custom_messages = [
            'name.required' => trans('translate.Name is required'),
            'email.required' => trans('translate.Email is required'),
            'email.unique' => trans('translate.Email already exist'),
            'password.required' => trans('translate.Password is required'),
            'admin_type.required' => trans('translate.Admin Type is required'),
            'status.required' => trans('translate.Status is required'),
        ];

        $this->validate($request, $rules, $custom_messages);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->admin_type = $request->admin_type;
        $admin->status = $request->status;
        $admin->save();

        $notify_message = trans('translate.Created Successfully');
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        return redirect()->route('admin.admin-list.index')->with($notify_message);
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.admin_management.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:admins,email,'.$id,
            'admin_type' => 'required',
            'status' => 'required',
        ];

        if($request->password){
            $rules['password'] = 'min:4';
        }

        $custom_messages = [
            'name.required' => trans('translate.Name is required'),
            'email.required' => trans('translate.Email is required'),
            'email.unique' => trans('translate.Email already exist'),
            'admin_type.required' => trans('translate.Admin Type is required'),
            'status.required' => trans('translate.Status is required'),
        ];

        $this->validate($request, $rules, $custom_messages);

        $admin->name = $request->name;
        $admin->email = $request->email;
        if($request->password){
            $admin->password = Hash::make($request->password);
        }
        $admin->admin_type = $request->admin_type;
        $admin->status = $request->status;
        $admin->save();

        $notify_message = trans('translate.Updated Successfully');
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        return redirect()->route('admin.admin-list.index')->with($notify_message);
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        $notify_message = trans('translate.Deleted Successfully');
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        return redirect()->route('admin.admin-list.index')->with($notify_message);
    }
}
