<div>
    <div class="card shadow-sm">
                            <div class="card-body">
                                <form class="needs-validation h-100" method="post"  novalidate="">
                                    <!-- Heading -->
                                    <h2 class="h4 mb-0 text-uppercase ff-sub ls-1">2. Your information</h2>
                                    <hr>
                                    <!-- /Heading -->
                                    <!-- Information -->
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourFullname">Full Name<span class="text-danger">*</span></label>
                                                <input type="text" wire:model="name" class="form-control shadow-sm" id="txtYourFullname" placeholder="" required="">
                                                 @error('fullname')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror

                                            </div>
                                        </div>
                                         <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourPhone">Phone<span class="text-danger">*</span></label>
                                                <input type="text" wire:model="phone" class="form-control shadow-sm" id="txtYourPhone" placeholder="" required="">
                                                 @error('phone')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourEmail">Email<span class="text-danger">*</span></label>
                                                <input type="email" wire:model="email" class="form-control shadow-sm" id="txtYourEmail" placeholder="" required="">
                                                 @error('email')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourEmail">Confirm Email<span class="text-danger">*</span></label>
                                                <input type="email" wire:model="confirm-email" class="form-control shadow-sm" id="txtYourEmail" placeholder="" required="">
                                                 @error('confirm-email')
                                            <span class="error-booking-form">{{ $message }}</span>
                                        @enderror
                                    
                                            </div>
                                        </div>






                                    </div>
                                    <!-- Information -->
                                </form>
                            </div>
                        </div>
</div>
