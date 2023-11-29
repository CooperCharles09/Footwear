<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Regestration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;

class RegDatabaseOperationController extends Controller
{
    public function ContactDataSave(Request $request)
    {
        $request->validate(
            [
                'ConFirstName' => 'required|string',
                'ConLastName' => 'required|string',
                'ConEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i',
                'ConSubject' => 'required'
            ]
        );
        $Contact = new Contact();
        $Contact->Firstname = $request->ConFirstName;
        $Contact->LastName = $request->ConLastName;
        $Contact->Email = $request->ConEmail;
        $Contact->Subject = $request->ConSubject;
        $Contact->Message = $request->ConMessage;
        $Contact->save();

        return redirect('Home');
    }

    public function RegDataSave(Request $Request)
    {
        $Request->validate(
            [
                'RegCountry' => 'required',
                'RegName' => 'required|string',
                'RegPhone' => 'required|min:10|max:10',
                'RegEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:regestrations,Email',
                // 'RegPassword' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,20}$/',
                'RegPassword' => 'required|min:6|max:15',
                'RegGender' => 'required',
                'RegDOB' => 'required',
                'RegAddress' => 'required',
                'RegState' => 'required|string',
                'RegPincode' => 'required|min:6|max:6'
            ]
        );

        $DataSave = new Regestration();
        $DataSave->Country = $Request->RegCountry;
        $DataSave->Name = $Request->RegName;
        $DataSave->Phone = $Request->RegPhone;
        $DataSave->Email = $Request->RegEmail;
        $DataSave->Password = Hash::make($Request->RegPassword);
        $DataSave->Gender = $Request->RegGender;
        $DataSave->DOB = $Request->RegDOB;
        $DataSave->Address = $Request->RegAddress;
        $DataSave->State = $Request->RegState;
        $DataSave->Pincode = $Request->RegPincode;
        $DataSave->save();

        // Session created 
        $LogInData =  DB::table('regestrations')->where('Email', '=', $Request->RegEmail)->get()->first();
        $Request->session()->put('LogInId', $LogInData->id);

        return redirect('Home');
    }

    public function LogInProcess(Request $Req)
    {
        $Req->validate(
            [

                'LogEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i',
                'LogPassword' => 'required|min:6|max:15'
            ]
        );

        $LogInData =  DB::table('regestrations')->where('Email', '=', $Req->LogEmail)->get()->first();
        if ($LogInData) {
            if (hash::check($Req->LogPassword, $LogInData->Password)) {
                $Req->session()->put('LogInId', $LogInData->id);
                return redirect(route('Home'));
            } else {
                return back()->with('PassFail', 'Pasword is not matched...!');
            }
        } else {
            return back()->with('EmailFail', 'Email Id is not matched...!');
        }
    }

    public function LogOutProcess()
    {
        if (session()->has('LogInId')) {
            session()->pull('LogInId');
            return redirect('/');
        } else {
            return " You Have To Log in first";
        }
    }

    public function UpdateDataSave(Request $Req, $id)
    {
        $Req->validate(
            [
                'UpCountry' => 'required',
                'UpName' => 'required|string',
                'UpPhone' => 'required|min:10|max:10',
                'UpGender' => 'required',
                'UpDOB' => 'required',
                'UpAddress' => 'required',
                'UpState' => 'required|string',
                'UpPincode' => 'required|min:6|max:6'
            ]
        );

        $data = Regestration::find($id);
        $data->Country = $Req->UpCountry;
        $data->Name = $Req->UpName;
        $data->Phone = $Req->UpPhone;
        $data->Gender = $Req->UpGender;
        $data->DOB = $Req->UpDOB;
        $data->Address = $Req->UpAddress;
        $data->State = $Req->UpState;
        $data->Pincode = $Req->UpPincode;
        $data->save();
        return redirect('Profile');
    }

    public function DeleteAccount($id)
    {
        $data = Regestration::find($id);
        session()->pull('LogInId');
        $data->delete();
        return redirect('/')->with('DeleteData', 'Account Deleted Successfully...!');
    }
}
