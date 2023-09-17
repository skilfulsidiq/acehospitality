<div>
    <livewire:frontend.components.hotel-detail.hero-section />
    <livewire:frontend.components.frontend-availability-form />
    <div class="activate-scrol-fix" style="height: 30px">

    </div>


    {{-- <div class="sticky-top p-5 mt-5">
        <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    </div> --}}
        <div class="sticky-top2 hotel-info-tab  navtab-style1 mb-4 mb-lg-5 mt50">
            <nav>
                <div class="nav justify-content-center" nav-tabs mb20" id="nav-tab2" role="tablist">
                    <button class="nav-link active fw600" id="nav-item1-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1"
                        aria-selected="true">Introduction</button>
                    <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab" data-bs-target="#nav-item2"
                        type="button" role="tab" aria-controls="nav-item2" aria-selected="false">Rooms</button>
                    <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3"
                        type="button" role="tab" aria-controls="nav-item3" aria-selected="false">Contact</button>
                </div>
            </nav>
            <div class="tab-content " id="nav-tabContent">
                <div class="tab-pane fade show active fz15" id="nav-item1" role="tabpanel"
                    aria-labelledby="nav-item1-tab">
                       <livewire:frontend.components.hotel-detail.about-section />

                </div>
                <div class="tab-pane fade fz15" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">
                     <livewire:frontend.components.feature-properties />
                     <livewire:frontend.components.feature-properties style="margin-top:-5rem"/>
                     <livewire:frontend.components.feature-properties/>
                </div>
                <div class="tab-pane fade fz15" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">Pharetra
                    nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa.
                    Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim
                    elementum.</div>
            </div>
        </div>
    {{-- </div> --}}

</div>
