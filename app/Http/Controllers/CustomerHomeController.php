<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;
use App\Models\ServiceRequest;
use App\Models\Customer;
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
    $data['myrequests']=ServiceRequest::All();

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


    return view('customerhome.myprofil',$data);
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
    $data['idservice']=$id;
    $data['name']=$name;
    $data['services']=ServiceOfBenefitCategory::select('*')->where('id','=',$id)->first();



        return view('customerhome.requestform',$data);
    }


}
