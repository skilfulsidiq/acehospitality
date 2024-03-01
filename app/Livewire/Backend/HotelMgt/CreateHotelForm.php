<?php

namespace App\Http\Livewire\Features\HotelMgt;

use App\Models\Hotel;
use App\Services\Hotel\HotelService;
use Livewire\Component;

use LivewireUI\Modal\ModalComponent;

class CreateHotelForm extends ModalComponent
{
    public $form =
        [
            'hotel_name' => '',
            'hotel_address' => '',
            'hotel_email' => '',
            'hotel_phone'=>'',
            'slug'=>''
        ];

    public $edit = false;
    public $hotelService;
    public $slug;
    public function mount($slug = null)
    {

        // $this->hotelService = appService(HotelService::class);

        if ($slug) {
            $this->edit = true;
            $this->slug = $slug;
            $this->getHotelDetails();
        }
    }
    public function getHotelDetails(){
        $hotel =
        appService(HotelService::class)->find($this->slug);
        $this->prefil($hotel['data']);

    }
    public function prefil($item){
        $this->form['hotel_name'] = $item->hotel_name;
        $this->form['hotel_address'] = $item->hotel_address;
        $this->form['hotel_email'] = $item->hotel_email;
        $this->form['hotel_phone'] = $item->hotel_phone;
        $this->form['slug'] = $item->id;
    }
    public function render()
    {
        return view('livewire.features.hotel-mgt.create-hotel-form');
    }

    public function create(){
        $this->validate([
            'form.hotel_name'=>'required',
            'form.hotel_address'=>'required',
            'form.hotel_email'=> 'required|email'
        ]);


        $feedback = appService(HotelService::class)->addNewHotel($this->form);
        if($feedback['status']){
            $this->dispatchBrowserEvent('close-modal');
            return redirect(request()->header('Referer'));
        }

    }
}
