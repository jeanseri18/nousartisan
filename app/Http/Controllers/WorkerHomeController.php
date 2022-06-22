<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;
use App\Models\ServiceRequest;
use App\Models\Customer;
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
    $data['categories']=BenefitCategory::All();

    $data['services']=ServiceOfBenefitCategory::All();
    return view('workershome.index',$data);
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
