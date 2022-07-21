<div>
    <div class="ltn__slide-item-inner text-center" style="margin-top: -120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="slide-item-car-dealer-form">
                        <div class="ltn__car-dealer-form-tab">

                            <div class="ltn__tab-menu  text-uppercase text-center">
                                <div class="nav">
                                    <a class="show active" data-bs-toggle="tab" href="#ltn__form_tab_1_1"><i class="fas fa-home"></i>Rent</a>
                                    <a data-bs-toggle="tab" href="#ltn__form_tab_1_2" class=""><i class="fas fa-home"></i>Short Let</a>
                                </div>
                            </div>

                            <div class="tab-content pb-10 mt-20">
                                <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                    <div class="car-dealer-form-inner">

                                        <form method="get" action="{{ route('properties.search') }}"
                                              class="ltn__car-dealer-form-box row">
                                            @csrf
                                            <input type="hidden" name="service" value="rent">
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                                <input type="text" placeholder="Search term or location"
                                                       class="nice-select" name="term">
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6">
                                                <select name="property_type_id">
                                                    <option selected value="">Property Type</option>
                                                    @foreach($property_types as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6">
                                                <select class="nice-select" name="state_id">
                                                    <option selected value="">State</option>
                                                    @foreach($states as $state)
                                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="bedrooms">
                                                    <option selected value="">Number of bedrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="bathrooms">
                                                    <option selected value="">Number of bathrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="living_rooms">
                                                    <option selected value="">Number of living rooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-6 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="max_cost">
                                                    <option selected value="">Cost (Max)</option>
                                                    <option value="200000">₦200,000</option>
                                                    <option value="500000">₦500,000</option>
                                                    <option value="700000">₦700,000</option>
                                                    <option value="1000000">₦1000,000</option>
                                                    <option value="2000000">₦2000,000</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-6 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="min_cost">
                                                    <option selected value="">Cost (Min)</option>
                                                    <option value="200000">₦200,000</option>
                                                    <option value="500000">₦500,000</option>
                                                    <option value="700000">₦700,000</option>
                                                    <option value="1000000">₦1000,000</option>
                                                    <option value="2000000">₦2000,000</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-12 d-flex justify-content-center">
                                                <i title="More filter" id="search-more-angle"
                                                   class="fa fa-angle-down fa-2x text-left search-more-angle"
                                                   style="margin-right: 20px;"></i>

                                                <div class="btn-wrapper mt-0">
                                                    <button type="submit"
                                                            class="btn theme-btn-1 text-uppercase">Search</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ltn__form_tab_1_2">
                                    <div class="car-dealer-form-inner">

                                        <form method="get" action="{{ route('properties.search') }}"
                                              class="ltn__car-dealer-form-box row">
                                            @csrf
                                            <input type="hidden" name="service" value="shortlet">
                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6">
                                                <input type="text" placeholder="Search term or location"
                                                       class="nice-select" name="term">
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6">
                                                <select name="property_type_id">
                                                    <option selected value="">Property Type</option>
                                                    @foreach($property_types as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6">
                                                <select class="nice-select" name="state_id">
                                                    <option selected value="">State</option>
                                                    @foreach($states as $state)
                                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="bedrooms">
                                                    <option selected value="">Number of bedrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="bathrooms">
                                                    <option selected value="">Number of bathrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-4 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="living_rooms">
                                                    <option selected value="">Number of living rooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-6 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="max_cost">
                                                    <option selected value="">Cost (Max)</option>
                                                    <option value="200000">₦200,000</option>
                                                    <option value="500000">₦500,000</option>
                                                    <option value="700000">₦700,000</option>
                                                    <option value="1000000">₦1000,000</option>
                                                    <option value="2000000">₦2000,000</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item col-lg-6 col-md-6 search-more-input" style="display: none;">
                                                <select class="nice-select" name="min_cost">
                                                    <option selected value="">Cost (Min)</option>
                                                    <option value="200000">₦200,000</option>
                                                    <option value="500000">₦500,000</option>
                                                    <option value="700000">₦700,000</option>
                                                    <option value="1000000">₦1000,000</option>
                                                    <option value="2000000">₦2000,000</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item ltn__custom-icon col-12 d-flex justify-content-center">
                                                <i title="More filter"
                                                   class="fa fa-angle-down fa-2x text-left search-more-angle"
                                                   style="margin-right: 20px;"></i>

                                                <div class="btn-wrapper mt-0">
                                                    <button type="submit"
                                                            class="btn theme-btn-1 text-uppercase">Search</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
