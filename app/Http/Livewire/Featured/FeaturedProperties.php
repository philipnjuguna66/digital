<?php

namespace App\Http\Livewire\Featured;

use Livewire\Component;
use Modules\Property\Entities\Property;

class FeaturedProperties extends Component
{

    public function render()
    {
        $properties = Property::query()
            ->inRandomOrder()
            ->with('photos')
            ->take('4')
            ->cursor();

        return view('livewire.featured.featured-properties')
            ->with([
                'properties' => $properties
            ]);
    }
}
