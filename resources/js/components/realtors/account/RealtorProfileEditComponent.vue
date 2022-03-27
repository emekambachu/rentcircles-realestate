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
                                    <li class="active"><a href="#">Dashboard</a></li>
                                    <li>Edit Profile</li>
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
                            <h5><i class="ion-person"></i> Profile Details :</h5>
                        </div>
                        <div class="db-add-listing">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <!-- Avatar -->
                                    <div class="edit-profile-photo">
                                        <img src="/images/clients/reviewer-1.png" alt="">
                                        <div class="change-photo-btn">
                                            <div class="contact-form__upload-btn xs-left">
                                                <input class="contact-form__input-file" type="file" name="photo-upload" id="photo-upload">
                                                <span>
                                                            <i class="icofont-upload-alt"></i>
                                                            Upload Photos
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control filter-input" placeholder="Steve">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control filter-input" placeholder="Austin">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control filter-input" placeholder="864 W. Walnut Ave. Avon, IN 46123 St James Pl, Brooklyn">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email id</label>
                                                <input type="text" class="form-control filter-input" placeholder="steve@mail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control filter-input" placeholder="+880 252 333">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <a href="#" class="btn v5">Save Changes</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-person"></i>Change Password :</h5>
                        </div>
                        <div class="db-add-listing">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" class="form-control filter-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control filter-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Confirm new Password</label>
                                        <input type="password" class="form-control filter-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="btn v5">Change Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="icofont-ui-social-link"></i>Social Networks</h5>
                        </div>
                        <div class="db-add-listing">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Facebook url</label>
                                        <input type="password" class="form-control filter-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Twitter url</label>
                                        <input type="password" class="form-control filter-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Instagram url</label>
                                        <input type="password" class="form-control filter-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="btn v5">Save Chages</a>
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
        name: "RealtorProfileEditComponent"
    }
</script>

<style scoped>

</style>
