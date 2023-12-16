<?php

namespace App\Livewire\Frontend\Components\DatePicker;

use App\Repositories\GeneralRepository;
use App\Services\Booking\AvailabilityService;
use Livewire\Attributes\Computed;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Url;

class Dark extends Component
{
    public $class;

    #[Rule('required',message:'Select location')]
    #[Url]
    public $location_id='';
    #[Rule('required', message: 'Select hotel')]
    #[Url]
    public $hotel_id;

    #[Rule('required',)]
    #[Url]
    public $date='';

    public $hotels;

    public function mount(){
        $this->hotels = collect();
        // $value = session('booking-form');
        $value = $this->getQueryString();
        if(isset($value)){
            // dd($value);
            $this->location_id = $value['location_id'];
            $this->hotel_id = $value['hotel_id'];
            $this->date = $value['date'];
            $this->getHotels($this->location_id);
            // $this->js("document.querySelector('#hotel-picker').value==");
        }
    }
    public function getQueryString()
    {
        return [
            'location_id'=>$this->location_id,
            'hotel_id' => $this->hotel_id,
            'date'=>$this->date
        ];

    }
    public function render()
    {
        return view('livewire.frontend.components.date-picker.dark');
    }

    #[Computed]
    public function locations(){
        return  appService(GeneralRepository::class)->getAllLocationNameAndId();
    }
    public function getHotels($location_id){
        $t = appService(GeneralRepository::class)->getHotelByLocationId($this->location_id);

        $this->hotels = $t;
    }
    public function updated($property){

        if($property=='location_id') {
        $this->getHotels($this->location_id);
        }
        if($property=='date'){

        }
    }

    public function checkAvailability(){

        $validated =   $this->validate();



        $this->dispatch('available-room-list',$validated);
        // session(['booking-form' => $validate]);

        return redirect()->route('reservation-page',['location_id'=>$this->location_id,'hotel_id'=>$this->hotel_id,'date'=>$this->date]);




    }
    // public function checkAvailability()
    // {
    //     $this->hasChecked = true;
    //     $this->checkingLoading = true;

    //     $feedback = appService(AvailabilityService::class)->checkForRoomAvailability($this->date);
    //     $data = $feedback['data'];
    //     //    dd($data);
    //     //    $this->allRoomGroup = $data['availables'];
    //     $this->start_date = $data['start'];
    //     $this->end_date = $data['end'];
    //     //    dd("am check");
    //     $this->checkingLoading = false;
    //     return
    //         $data['availables'];
    // }
}
