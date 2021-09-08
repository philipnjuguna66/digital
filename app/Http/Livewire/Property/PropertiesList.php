<?php

namespace App\Http\Livewire\Property;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Property\Entities\Property;

class PropertiesList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.property.properties-list')->with([
            'properties' => Property::query()
                ->inRandomOrder()
                ->with('photos')
                ->paginate(10)
        ]);
    }
}
