<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;
use App\Models\ServiceRequest;
use App\Models\Customer;
use App\Models\User;
use Auth;
class CustomerHomeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $data['title']='Service';
    $data['categories']=BenefitCategory::All();

    $data['services']=ServiceOfBenefitCategory::All();
    return view('customerhome.index',$data);
    }






     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myrequest()
    {
    $data['title']='Mes demandes';
    $data['myrequests']=ServiceRequest::where('user_id',Auth::id())  ->join('service_of_benefit_categories','service_requests.service_of_benefit_category_id','=','service_of_benefit_categories.id')
   ->get(['service_requests.*','service_of_benefit_categories.name']);
//



    return view('customerhome.myresquests',$data);
    }





       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myprofil()
    {
    $data['title']='Mon compte';
    $data['user']= User::find(Auth::id());


    return view('customerhome.myprofil',$data);
    }





        /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profilupdate(Request $request,$id)
    {

    $user= User::find($id);
    $name=  $request->get('name');
    $tel=   $request->get('tel');
    $email= $request->get('email');
    $adress= $request->get('adress');

    $user->name=$name;
    $user->phone=$tel;
    $user->email=$email ;
    $user->address_facturation=$adress;

    $user->save();
    session()->flash('messageprofil', 'Vos information ont été modifié avec  succes.');
    return back();
    }





      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
    $data['title']='Mes paiments';


    return view('customerhome.payment',$data);
    }






 /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @param  String  $name
     * @return \Illuminate\Http\Response
     */
    public function customerrequestform($id ,$name)
    {
    $data['title']='Formulaire de demande';
    $data['idService']=$id;
    $data['name']=$name;
    $data['services']=ServiceOfBenefitCategory::select('*')->where('id','=',$id)->first();



        return view('customerhome.requestform',$data);
    }


}
