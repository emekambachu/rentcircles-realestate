<template>

    <div class="dash-breadcrumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-breadcrumb-content">
                        <div class="dash-breadcrumb-left">
                            <div class="breadcrumb-menu text-right sm-left">
                                <ul>
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                    <li>Add Listing</li>
                                </ul>
                            </div>
                        </div>
                        <a class="btn v3" href="add-listing.html"><i class="ion-plus-round"></i>Add Listing </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-ios-location"></i> Location/Contacts :</h5>
                        </div>
                        <div class="db-add-listing">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select City</label>
                                        <div class="nice-select filter-input" tabindex="0"><span class="current">Select City</span>
                                            <ul class="list">
                                                <li class="option selected focus">New York</li>
                                                <li class="option">Chicago</li>
                                                <li class="option">Las Vegas</li>
                                                <li class="option">Los Angeles</li>
                                                <li class="option">Austin</li>
                                                <li class="option">Downturn</li>
                                                <li class="option">DownturnSan Diago</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control filter-input" placeholder="ex. 250, Fifth Avenue...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control filter-input" placeholder="ex. New York">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control filter-input" placeholder="ex. 5858">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Longitude (Drag marker on the map)</label>
                                        <input type="text" class="form-control filter-input" placeholder="Map Longitude">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Latitude (Drag marker on the map) </label>
                                        <input type="text" class="form-control filter-input" placeholder="Map Latitude">
                                    </div>
                                </div>
                                <div class="col-md-12 no-padding">
                                    <div id="map"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mar-top-15">
                                        <label>Website </label>
                                        <input type="text" class="form-control filter-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mar-top-15">
                                        <label>Phone </label>
                                        <input type="text" class="form-control filter-input">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-ios-location"></i> Rooms/Pricing :</h5>
                        </div>
                        <div class="db-add-listing">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Room Title</label>
                                        <input type="text" class="form-control filter-input" placeholder="Standard family Room">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Capacity</label>
                                        <input type="text" class="form-control filter-input" placeholder="2 persons">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control filter-input" placeholder="$180">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Room Details</label>
                                        <input type="text" class="form-control filter-input" placeholder="Total for 1 room, 2 nights">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form class="photo-upload">
                                            <div class="form-group">
                                                <div class="add-listing__input-file-box">
                                                    <input class="add-listing__input-file" type="file" name="file" id="file">
                                                    <div class="add-listing__input-file-wrap">
                                                        <i class="ion-ios-cloud-upload"></i>
                                                        <p>Click here to upload your images</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn v8 mar-top-15">Add Images</a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Features</label>
                                        <div class="filter-checkbox">
                                            <input id="check-m" type="checkbox" name="check">
                                            <label for="check-m">Tv inside</label>
                                            <input id="check-n" type="checkbox" name="check">
                                            <label for="check-n">Air Conditioned</label>
                                            <input id="check-o" type="checkbox" name="check">
                                            <label for="check-o">Free Wi Fi</label>
                                            <input id="check-p" type="checkbox" name="check">
                                            <label for="check-p">Breakfast</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Title</label>
                                            <input type="text" class="form-control filter-input" placeholder="Title">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Number</label>
                                            <input type="text" class="form-control filter-input" placeholder="Number">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Icon</label>
                                            <input type="text" class="form-control filter-input" placeholder="Icon">
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" class="btn v8 mar-top-20">Add Facts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-clock"></i> Opening/Business Hours :</h5>
                        </div>
                        <div class="db-add-listing">
                            <div class="row mar-bot-30">
                                <div class="col-md-2">
                                    <label class="fix_spacing">Monday</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mar-bot-30">
                                <div class="col-md-2">
                                    <label class="fix_spacing">Tuesday</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="row mar-bot-30">
                                <div class="col-md-2">
                                    <label class="fix_spacing">Wednesday</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="row mar-bot-30">
                                <div class="col-md-2">
                                    <label class="fix_spacing">Thursday</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="row mar-bot-30">
                                <div class="col-md-2">
                                    <label class="fix_spacing">Friday</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="row mar-bot-30">
                                <div class="col-md-2">
                                    <label class="fix_spacing">Saturday</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="row mar-bot-30">
                                <div class="col-md-2">
                                    <label class="fix_spacing">Sunday</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="nice-select filter-input" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><i class="ion-clock"></i> Event Date :</h4>
                                </div>
                            </div>
                            <div class="row mar-bot-30">
                                <div class="col-sm-4 col-12">
                                    <div id="datepicker-from" class="input-group date" data-date-format="dd-mm-yyyy">
                                        <input class="form-control" type="text" placeholder="Select date">
                                        <span class="input-group-addon"><i class="icofont-ui-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="nice-select filter-input mt-0" tabindex="0"><span class="current">Opening Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="nice-select filter-input mt-0" tabindex="0"><span class="current">Closing Time</span>
                                        <ul class="list">
                                            <li class="option selected focus">7.00 am</li>
                                            <li class="option">8.00 am</li>
                                            <li class="option">9.00 am</li>
                                            <li class="option">10.00 am</li>
                                            <li class="option">11.00 am</li>
                                            <li class="option">12.00 am</li>
                                            <li class="option">1.00 pm</li>
                                            <li class="option">2.00 pm</li>
                                            <li class="option">3.00 pm</li>
                                            <li class="option">4.00 pm</li>
                                            <li class="option">5.00 pm</li>
                                            <li class="option">6.00 pm</li>
                                            <li class="option">7.00 pm</li>
                                            <li class="option">8.00 pm</li>
                                            <li class="option">9.00 pm</li>
                                            <li class="option">10.00 pm</li>
                                            <li class="option">11.00 pm</li>
                                            <li class="option">12.00 pm</li>
                                            <li class="option">00.00 am</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "RealtorAddProperties"
    }
</script>

<style scoped>

</style>
