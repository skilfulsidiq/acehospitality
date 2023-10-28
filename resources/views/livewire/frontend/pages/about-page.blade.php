<div>
       <livewire:frontend.components.image-breadcrumb title="About"/>
         <livewire:frontend.components.home-about-section />
         {{-- <div >
             <h3 class="text-center"> Our Values</h3>

               <div class="row" data-reveal="">
                <div class="col-md-6">
                    <div class="ourvalue-span">We Respect People by putting everyone First.</div>
                </div>
                 <div class="col-md-6">

                  <div class="ourvalue-span">We Provide Best GUEST Service experience at all times.</div>
                 </div>
                 <div class="col-md-6">
                  <div class=" ourvalue-span">We invest in Training in pursuance of the Brand Service Excellence standards and
opportunity for associate’s Career growth.</div>
                 </div>
                 <div class="col-md-6">
                  <div class=" ourvalue-span">We believe in Profitable Standards by getting the “Basics” right all the time.</div>
                 </div>
                 <div class="col-md-6">
                  <div class=" ourvalue-span">We believe in Profitable Standards by getting the “Basics” right all the time.</div>
                 </div>
                 <div class="col-md-6">
                  <div class="ourvalue-span">We act with utmost integrity in our Business by keeping things documented so there are no misunderstandings.</div>
                 </div>
                 <div class="col-md-6">
                  <div class="ourvalue-span">We believe Good Financial Standards (accounting) sustains good business practices and partnerships.</div>
                 </div>
                 <div class="col-md-6">
                  <div class="ourvalue-span">We get involve in the communities we operate and truly become a part of it.</div>
                 </div>
                </div>
        </div> --}}


         <section class="glo-team-area pt-110 pb-70 bg-grey-4" id="team">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="intro-title-wrapper text-center mb-70" data-reveal="">
              <div class="intro-subtitle">
                <span>Our Team</span>
              </div>
              <div class="intro-title">
                <h2>Our Team Member</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            @forelse ($teams as $team )
                      <div class="col-lg-4 col-md-4 mb-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $team->id }}">
                    <div class="glo-team text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="glo-team-thumb p-relative">
                        <img src="{{ asset($team->image) }}" alt="Image not found">
                        <div class="glo-team-signature">
                        {{-- <img src="{{ asset('assets/img/team/idris.png') }}" alt="Image not found"> --}}
                        </div>
                    </div>
                    <div class="glo-team-content">
                        <h4 class="glo-team-title">{{ $team->fullname }} </h4>
                        <span>{{ $team->qualification }}</span>
                        {{-- <p> It uses a dictionary of over 200 Latin words, combined with a handful of model.</p> --}}
                    </div>
                    </div>
                    </a>
                </div>
                 <div class="modal fade" id="{{ $team->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      {{-- <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> --}}
      <div class="modal-body">
          <button type="button" class="btn-close modal-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="header">
            <h3> {{ $team->fullname }} </h3>
        </div>
            {!! $team->desc !!}

      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
            @empty

            @endforelse



        </div>
      </div>
    </section>

    <div class="modal fade" id="idris" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"">
    <div class="modal-content">
      {{-- <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> --}}
      <div class="modal-body">
        <div>
            <h3> Idris <span> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></span></h3>
        </div>


       <p>Chris had his first ten years’ experience at the 340 bedrooms Sheraton Lagos hotel and towers in Lagos Nigeria where he rose from a banquet waiter, Guest Service Agent, Night Manager to a position of first indigenous Rooms Revenue Manager in the late 1990s.
       </p>
       <p>With a full professional membership of the Institute of Hospitality Sutton Surrey -London, United Kingdom, an MBA in Entrepreneurship and building new business from the prestigious Oxford Brookes University Business School Oxford UK and a master’s degree in Tourism Management from the West London University (formerly Thames Valley University) London Ealing, UK. </p>

<p>He comes to the team with experience as a Global Marriott Hospitality group Associate in the United Kingdom and most recently as Deputy General Manager Protea Hospitality Group South Africa in Nigeria and Ghana. Chris is at his best with hospitality management especially in areas of Project design, Pre-opening standards and managing Operations.</p>

          <p>  Also, a graduate of the prestigious Protea Hotel Institute of Professional development (PHIPD) Johannesburg South Africa. He enjoys football, classical music, jazz, afro beat and his African - destination holidays. Chris who is fondly called ‘’Bature’ is a Christian Catholic, married with three lovely daughters and is a native of Agbor from Ika-North LGA of Delta State</p>

      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
</div>
