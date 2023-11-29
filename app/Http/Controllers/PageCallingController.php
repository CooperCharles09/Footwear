<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Regestration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCallingController extends Controller
{
    //Main Pages calling functions

    public function LogInPage()
    { 
        return view('LogIn');
    }
    public function HomePage()
    {
        return view('welcome');
    }
    public function AboutPage()
    {
        return view('About');
    }
    public function ShopPage()
    {
        return view('Shop');
    }
    public function ContactPage()
    {
        return view('Contact');
    }
    public function RegestrationPage()
    {
        $Country['AllCountry'] = Country::all();
        return view('Regestration', $Country);
    }
    public function ProfilePage()
    {
        $id = session()->get('LogInId');
        $data['Pdata'] = Regestration::find($id);
        //  $data['Pdata']=DB::table('regestrations')->where('id','=',$id)->get()->first();
        return view('Profile', $data);
    }
    public function CartPage()
    {
        return view('Cart');
    }

    public function UpdatePage(Request $Request, $id)
    {
        $data['Edit'] = Regestration::find($id);
        $Country['AllCountry'] = Country::all();
        return view('Update', $Country, $data);
    }
}
