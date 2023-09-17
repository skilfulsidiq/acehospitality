<div>
    <livewire:frontend.components.image-breadcrumb />
    <livewire:frontend.components.frontend-availability-form />

    {{-- <input type="text" id="my-input-id" class="form-control"> --}}
     

    <section class="pt0 pb90 bgc-f7">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-lg-7">
                    <div class="row align-items-center mb20">
                        <div class="col-sm-6">
                            <div class="text-center text-sm-start">
                                <p class="pagination_page_count mb-0">Showing 1–10 of 13 results</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div
                                class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                                <div class="pcs_dropdown pr10"><span>Sort by</span>
                                    <div class="dropdown bootstrap-select show-tick"><select
                                            class="selectpicker show-tick">
                                            <option>Newest</option>
                                            <option>Best Seller</option>
                                            <option>Best Match</option>
                                            <option>Price Low</option>
                                            <option>Price High</option>
                                        </select><button type="button" tabindex="-1"
                                            class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown"
                                            role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox"
                                            aria-expanded="false" title="Newest">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">Newest</div>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="dropdown-menu ">
                                            <div class="inner show" role="listbox" id="bs-select-3" tabindex="-1">
                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="pl15 pr15 bdrl1 bdrr1 d-none d-md-block" href="#">Grid</a>
                                <a class="pl15 d-none d-md-block" href="#">List</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt15">
                        <div class="col-lg-12">
                            <livewire:frontend.components.property-cards.list-card image="images/listings/list-2.jpg"
                                title="Classic Room" location="Im" />
                        </div>
                        <div class="col-lg-12">
                            <livewire:frontend.components.property-cards.list-card image="images/listings/list-3.jpg"
                                title="Deluxe Room" location="Im" />
                        </div>

                        <div class="col-lg-12">
                            <livewire:frontend.components.property-cards.list-card image="images/listings/list-4.jpg"
                                title="Partial View Room" location="Im" />
                        </div>
                        <div class="col-lg-12">
                            <livewire:frontend.components.property-cards.list-card image="images/listings/list-5.jpg"
                                title="Classic Partial View Room" location="Im" />
                        </div>
                        <div class="col-lg-12">
                            <livewire:frontend.components.property-cards.list-card image="images/listings/list-4.jpg"
                                title="Luxury location="Im" />
                        </div>


                    </div>
                    <div class="row">
                        <div class="mbp_pagination text-center">
                            <ul class="page_navigation">
                                <li class="page-item">
                                    <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">20</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                                </li>
                            </ul>
                            <p class="mt10 pagination_page_count text-center">1 – 20 of 300+ property available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="list-sidebar-style1">
                        <div class="widget-wrapper">
                            <h6 class="list-title">Find your home</h6>
                            <div class="search_area">
                                <input type="text" class="form-control" placeholder="What are you looking for?">
                                <label><span class="flaticon-search"></span></label>
                            </div>
                        </div>

                        <div class="reset-area d-flex align-items-center justify-content-between">
                            <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset
                                    all filters</u></a>
                            <a class="reset-button" href="#"><span class="flaticon-favourite"></span><u>Save
                                    Search</u></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
