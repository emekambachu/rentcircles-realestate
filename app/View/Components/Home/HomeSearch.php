<?php

namespace App\View\Components\Home;

use App\Http\Controllers\BaseController;
use App\Models\Properties\PropertyType;
use App\Models\State;
use App\Services\BaseService;
use Illuminate\View\Component;

class HomeSearch extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['states'] = BaseService::propertyStates();
        $data['property_types'] = PropertyType::orderBy('name')->get();

        return view('home.components.home-search', $data);
    }
}
