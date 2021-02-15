<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
class Navbar extends Component
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $data['category'] = Category::select('id' , 'name')->get();
        return view('components.navbar')->with($data);
    }
}
