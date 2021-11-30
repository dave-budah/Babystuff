<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlide($slide_id)
    {
        $slider = HomeSlider::find($slide_id);
        if($slider->image)
        {
            unlink('assets/images/slides'.'/'.$slider->image);
        }
        if($slider->images)
        {
            $images = explode(',',$slider->images);
            foreach ($images as $image)
            {
                unlink('assets/images/slides'.'/'.$image);
            }
        }
        $slider->delete();
        session()->flash('message', 'Slider has been deleted successfully.');
    }
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component', ['sliders'=>$sliders])->layout('layouts.base');
    }
}
