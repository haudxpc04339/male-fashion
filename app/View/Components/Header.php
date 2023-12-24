<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use App\Models\Cart;
use DB;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $userId = Auth::id();

        $total = Cart::where('user_id', Auth::id())->select(DB::raw('SUM(price * qty) as total'))->first();

        $count = Cart::where('user_id',$userId)->count();
        
        return view('components.header', compact('count', 'total'));
    }

}
