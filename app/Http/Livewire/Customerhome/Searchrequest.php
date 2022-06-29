<?php

namespace App\Http\Livewire\Customerhome;

use Livewire\Component;
use App\Models\BenefitCategory;
use App\Models\ServiceOfBenefitCategory;

class Searchrequest extends Component
{
    public $search;
    protected $queryString = ['search'];


    public function render()
    {

     
        return view('livewire.customerhome.searchrequest',
        [

            'services' => ServiceOfBenefitCategory::where('service_of_benefit_categories.name', 'like', '%'.$this->search.'%')
            ->get(),
            'categories'=>BenefitCategory::All(),


        ]);
    }
}
