<?php

namespace App\View\Components;

use Closure;
use Carbon\Carbon;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DateCountdown extends Component
{
    /**
     * Create a new component instance.
     */
    public $date;
    public $text;
    
    public function __construct($date)
    {
        $this->date=Carbon::parse($date);
    }
    public function formattedDiff(){
        $diff = now()->diffInDays($this->date,false);
        if($diff > 0)
        {
            $this->text = "Starts in {$diff} days at" . $this->date->format('g:i A');
        }
        else if($diff == 0){
            $this->text = "Start today at". $this->date->format('g:i A');
        }
        else{
            $this->text = "Started ". abs($diff) . "days ago at" . $this->date->format('g:i A');;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.date-countdown');
    }
}
