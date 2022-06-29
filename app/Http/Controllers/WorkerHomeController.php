<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;
use App\Models\ServiceRequest;
use App\Models\Customer;
use App\Models\User;
use App\Models\Payment;
use App\Models\ServiceProposal;
// use Illuminate\Pagination\Paginator;
use App\Providers\Paginator;
use Auth;
class WorkerHomeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['title']='Service';
      $data['categories']=BenefitCategory::all();

      $data['services']=ServiceOfBenefitCategory::all();
      return view('workershome.index',$data);
    }

       /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @param  String  $name
     * @return \Illuminate\Http\Response
     */
    public function listoffer($id ,$name)
    {

    $data['title']='Mes offres';
    $data['offers']=ServiceRequest::where('service_requests.status_id','0')
    ->where('service_of_benefit_category_id',$id)
    ->join('users','users.id','=','service_requests.user_id')
    ->join('customers','customers.id','=','customers.user_id')
    ->orderBy('service_requests.created_at', 'desc')
    ->paginate(12);
    // ->get(['service_requests.*','customers.name','customers.file_url']);
    return view('workershome.list-offer',$data);
    }

   /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @param  String  $name
     * @return \Illuminate\Http\Response
     */
    public function detailoffer($id ,$name)
    {
    $data['title']='Mes offres';
    $data['id']=$id;
    return view('workershome.detail-offer',$data);
    }













     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myoffer()
    {
    $data['title']='Mes offres';
    return view('workershome.myoffer',$data);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myofferwait()
    {
    $data['title']='Mes offres en cour';


    return view('workershome.myoffer-wait',$data);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myofferok()
    {
    $data['title']='Mes offres finalisé';


    return view('workershome.myoffer-ok',$data);
    }


       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myprofil()
    {
    $data['title']='Mon compte';


    return view('workershome.profile',$data);
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function abonnement()
    {
    $data['title']='Mon abonnement';


    return view('workershome.abonnement',$data);
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
    $data['title']='Mes paiements';


    return view('workershome.payment',$data);
    }




}
