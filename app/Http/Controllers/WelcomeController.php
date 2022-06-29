<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title']='Acceuil';
        $search=$request->get('search');
        $data['categories']=BenefitCategory::where('benefit_categories.name', 'like', '%'.$search.'%')->get();
        $data['servicerequests']=ServiceRequest::limit(5)->get();


        return view('welcome.index',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $data['title']='Liste des services disponibles';
        $data['categories']=BenefitCategory::all();

        return view('welcome.categories',$data);
    }

     /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function services($id)
    {
        $data['title']='Liste des services disponibles';
        $data['services']=ServiceOfBenefitCategory::where('benefit_category_id','=',$id)
        ->get();

        return view('welcome.services',$data);
    }

     /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @param  String  $name
     * @return \Illuminate\Http\Response
     */
    public function formrequest($id ,$name)
    {
        $data['title']='Formulaire de demande';
        $data['idservice']=$id;
        $data['name']=$name;

        return view('welcome.formrequest',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerpro()
    {
        $data['title']='Formulaire d enregistrement d un prestataire ';
        return view('welcome.registerpro',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $data['title']='Inscription ';

        return view('welcome.register',$data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $data['title']='Connexion ';

        return view('welcome.login',$data);
    }





}
