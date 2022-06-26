<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;
use App\Models\ServiceRequest;
use App\Models\Customer;
use App\Models\User;
use App\Models\Payment;
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
    $data['myrequests']=ServiceRequest::where('service_requests.user_id',Auth::id())
    ->where('service_requests.status_id','0')
    ->join('service_of_benefit_categories','service_requests.service_of_benefit_category_id','=','service_of_benefit_categories.id')
    ->get(['service_requests.*','service_of_benefit_categories.name']);
    return view('customerhome.myrequests',$data);
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myrequestwait()
    {
    $data['title']='Mes demandes';
    $data['myrequests']=ServiceRequest::where('service_requests.user_id',Auth::id())
    ->where('service_requests.status_id','1')
    ->join('workers','service_requests.worker_id','=','workers.id')
    ->get(['service_requests.*','workers.name','workers.image']);


    return view('customerhome.myrequestwait',$data);
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myrequestok()
    {
    $data['title']='Mes demandes';
    $data['myrequests']=ServiceRequest::where('user_id',Auth::id())
    ->where('service_requests.status_id','2')
    ->join('service_of_benefit_categories','service_requests.service_of_benefit_category_id','=','service_of_benefit_categories.id')
   ->get(['service_requests.*','service_of_benefit_categories.name']);
//
    return view('customerhome.myrequestok',$data);
    }

        /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @param  int  $statut
     * @param  int  $worker
     * @param  int  $price
     * @return \Illuminate\Http\Response
     */
    public function myrequestsupdate($id,$worker,$statut,$price)
    {
        $myrequest=ServiceRequest::where('id',$id)->first();
        $myrequest->status_id=$statut;
        $myrequest->worker_id=$worker;
        $myrequest->price_after_nego=$price;
        $myrequest->save();
        session()->flash('messageprofil', 'Vos information ont été modifié avec  succes.');


        return back();
    }

        /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @param  int  $statut
     * @param  int  $price
     * @param  int  $worker
     * @return \Illuminate\Http\Response
     */
    public function myrequestwaitupdate($id,$worker,$statut,$price)
    {
        $data['title']='Mes demandes';
        $data['myrequests']=ServiceRequest::where('user_id',Auth::id())  ->join('service_of_benefit_categories','service_requests.service_of_benefit_category_id','=','service_of_benefit_categories.id')
        ->where('service_requests.status_id','1')
        ->get(['service_requests.*','service_of_benefit_categories.name']);
        
        $myrequest=ServiceRequest::where('id',$id)->first();
        $myrequest->status_id=$statut;
        $myrequest->save();
        $payment=new Payment;
        $payment->worker_id=$worker;
        $payment->user_id=Auth::id();
        $payment->amount=$price;
        $payment->request_id=$id;
        $payment->status_worker=0;
        $payment->save();
        session()->flash('messageprofil', 'Vos information ont été modifié avec  succes.');



        return view('customerhome.myrequestwait',$data);
    }

       /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @param  String  $statut
     * @return \Illuminate\Http\Response
     */
    public function myrequestsdelete($id,$statut)
    {
        $myrequest=ServiceRequest::where('id',$id)->first();
        $myrequest->status_id=$statut;
        $myrequest->save();
        session()->flash('messageprofil', 'Vos information ont été modifié avec  succes.');
    //     $data['title']='Mes demandes';
    //     $data['myrequests']=ServiceRequest::where('user_id',Auth::id())  ->join('service_of_benefit_categories','service_requests.service_of_benefit_category_id','=','service_of_benefit_categories.id')
    //    ->get(['service_requests.*','service_of_benefit_categories.name']);
        return back();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function requestupdate(Request $request,$id)
    {
        $data['title']='Modification de la request';
        $data['myrequests']=ServiceRequest::where('user_id',Auth::id())->where('service_requests.id',$id)->join('service_of_benefit_categories','service_requests.service_of_benefit_category_id','=','service_of_benefit_categories.id')
       ->first(['service_requests.*','service_of_benefit_categories.name','service_of_benefit_categories.image']);
    //    dd($data['myrequests']);

    // session()->flash('messageprofil', 'Vos information ont été modifié avec  succes.');
    return view('customerhome.update-form',$data);
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
    $data['title']='Mes paiments';

    $data['mypayments']=Payment::where('payment.user_id',Auth::id())
    ->join('service_requests','payment.request_id','=','service_requests.id')
    ->join('workers','workers.id','=','service_requests.worker_id')
    ->get(['payment.*','service_requests.titre','workers.name']);
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
