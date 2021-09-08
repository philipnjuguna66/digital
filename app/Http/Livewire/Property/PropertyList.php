<?php

namespace App\Http\Livewire\Property;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Property\Entities\Property;

class PropertyList extends Component
{
    use WithPagination;

    public $search = "";

    protected $queryString = [
        'search'
    ];


    public function render()
    {
        $properties = Property::query()
            ->when(! is_null($this->search) && ! empty($this->search), function ($query){
                $query->where('title','like','%'. $this->search. '%')
                    ->orWhere('content','like','%'. $this->search. '%')
                    ->orWhere('location','like','%'. $this->search. '%');
            })
            ->with('photos')
            ->paginate(10);
        return view('livewire.property.property-list')->with([
            'properties' => $properties
        ]);
    }
}
