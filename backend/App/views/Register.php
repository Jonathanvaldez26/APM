<?php
echo $header;
?>
<body>
<main class="main-content main-content-bg mt-0">
    <section>
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container-fluid">
                <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
                    <img src="/assets/img/logos/apmn.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">
                    <img src="/assets/img/logos/waddn.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">
                    VI World Congress on Dual Disorders
                </a>

                <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                    </ul>
                    <ul class="navbar-nav d-lg-block d-none">
                        <li class="nav-item">
                            <a href="/Login/" class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')">SIGN IN</a>
                            <a href="https://registro.dualdisorderswaddmexico2022.com/Registro/" class="flag-cont" onclick="smoothToPricing('pricing-soft-ui')">
                                <img id="flag" src="/assets/img/spain.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-12 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-7">
                            <div class="container-fluid py-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="multisteps-form">
                                            <!--progress bar-->
                                            <div class="row" id="card_progress">
                                                <div class="col-12 col-lg-12 mx-auto my-4">
                                                    <div class="multisteps-form__progress">
                                                        <button class="multisteps-form__progress-btn js-active" title="User Info" disabled>
                                                            <span>User Info</span>
                                                        </button>
                                                        <button class="multisteps-form__progress-btn" title="Others" disabled>Others</button>
                                                        <button class="multisteps-form__progress-btn" title="Payment" disabled>Payment</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--form panels-->
                                            <div class="row">
                                                <div class="col-12 col-lg-12 m-auto">
                                                    <form class="multisteps-form__form" id="add" action="/Register/Success" method="POST">
                                                        <!--single form panel-->
                                                        <div id="card_one" class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="card_one"data-animation="FadeIn">
                                                            <h5 class="font-weight-bolder mb-0">PERSONAL INFORMATION</h5>
                                                            <p class="mb-0 text-sm">Please complete the form below to create your Congress account. The fields marked with
                                                                an * are compulsory.
                                                                Please write your name(s) and surname(s) exactly as you want them to appear on your
                                                                certificate.</p>
                                                            <div class="multisteps-form__content">
                                                                <br>
                                                                <p class="mb-0 text-sm">To create your Congress account, please provide a valid email address</p>

                                                                <div class="row mt-3">
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Email *</label>
                                                                        <input class="multisteps-form__input form-control all_input" type="email" id="email" name="email" placeholder="eg. user@domain.com" autocomplete="no">
                                                                        <span class="mb-0 text-sm" id="error" style="display:none;color:red;">Wrong email</span>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                                        <label>Confirm Email *</label>
                                                                        <input class="multisteps-form__input form-control all_input all_email" type="email" id="confirm_email" name="confirm_email" placeholder="eg. user@domain.com" disabled autocomplete="no">
                                                                        <span class="mb-0 text-sm" id="error_confirm" style="display:none;color:red;"><label style="color:red;"> Email does not match *</label></span>
                                                                    </div>
                                                                    <input type="hidden" id="email_validado" name="email_validado" >

                                                                    <p class="mb-0 text-sm">All information related to your registration, will be sent to this email
                                                                        address</p>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12 col-sm-2">
                                                                        <label>Title *</label>
                                                                        <select class="multisteps-form__select form-control all_input_select" name="title" id="title" required disabled>
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <option value="Dr.">DR.</option>
                                                                            <option value="Sr.">MR.</option>
                                                                            <option value="Sra.">MSS.</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <label>Name *</label>
                                                                        <input class="multisteps-form__input form-control all_input" type="text" id="name_user" name="name_user" maxlength="15" placeholder="eg. Christopher" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no" disabled >
                                                                    </div>
                                                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                                        <label>Middle Name</label>
                                                                        <input class="multisteps-form__input form-control" type="text" id="middle_name" name="middle_name" maxlength="15" placeholder="eg. Prior" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12 col-sm-5">
                                                                        <label>Surname *</label>
                                                                        <input class="multisteps-form__input form-control all_input" type="text" id="surname" name="surname" maxlength="15" placeholder="eg. Jones" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no" disabled>
                                                                    </div>
                                                                    <div class="col-12 col-sm-5">
                                                                        <label>Second surname</label>
                                                                        <input class="multisteps-form__input form-control" type="text" id="second_surname" name="second_surname" maxlength="15" placeholder="eg. Wilson" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no" disabled>
                                                                    </div>
                                                                    <div class="col-12 col-sm-2">
                                                                        <label>Modality *</label>
                                                                        <select class="multisteps-form__select form-control all_input_select" name="modality" id="modality" disabled>
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <option value="Virtual">Virtual</option>
                                                                            <option value="On Site">On Site</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12 col-sm-4">
                                                                        <label>Telephone</label>
                                                                        <input class="multisteps-form__input form-control" type="text" id="telephone" name="telephone" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="eg. (555) 555-1234" autocomplete="no" disabled>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <label>International dialling code</label>
                                                                        <input class="multisteps-form__input form-control" type="text" id="telephone_code" name="telephone_code" maxlength="3" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="eg. +1" autocomplete="no" disabled>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <label>Specialties *</label>
                                                                        <select class="multisteps-form__select form-control all_input_select" name="specialties" id="specialties" disabled>
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <option value="Psychiatrist">Psychiatrist</option>
                                                                            <option value="Child_Psychiatry">Child Psychiatry</option>
                                                                            <option value="Neurology">Neurology</option>
                                                                            <option value="Pediatric_Neurology">Pediatric Neurology</option>
                                                                            <option value="Paidapsychiatry">Paidapsychiatry</option>
                                                                            <option value="Pedagogy">Pedagogy</option>
                                                                            <option value="Psychogeriatrics">Psychogeriatrics</option>
                                                                            <option value="Psychology">Psychology</option>
                                                                            <option value="Clinical_psychology">Clinical Psychology</option>
                                                                            <option value="Residents">Residents</option>
                                                                            <option value="Students">Students</option>
                                                                            <option value="Others">Others</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12 col-sm-4">
                                                                        <label>Nationality *</label>
                                                                        <select class="multisteps-form__select form-control all_input_select" name="nationality" id="nationality" onchange="actualizaEdos();" disabled>
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <?php echo $idCountry; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                                                        <label>State *</label>
                                                                        <select class="multisteps-form__select form-control all_input_select" name="state" id="state" disabled>

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                                                        <label>Country of Residence *</label>
                                                                        <select class="multisteps-form__select form-control all_input_select" name="residence" id="residence" disabled>
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <?php echo $idCountry; ?>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="button-row d-flex mt-4">
                                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" id="next_one" type="button" title="Next" disabled>Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single form panel-->
                                                        <div id="card_two" class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                                            <h5 class="font-weight-bolder">ADDITIONAL INFORMATION</h5>
                                                            <div class="multisteps-form__content">
                                                                <div class="row mt-3">
                                                                    <div class="col">
                                                                        <label>Organization *</label>
                                                                        <input class="multisteps-form__input form-control all_input_second" type="text" maxlength="35" id="organization" name="organization" placeholder="eg. Associated APM" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label>Position *</label>
                                                                        <input class="multisteps-form__input form-control all_input_second" type="text" maxlength="25" id="position" name="position" placeholder="eg. Associated" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Address</label>
                                                                        <input class="multisteps-form__input form-control" type="text" id="address" maxlength="50" name="address" placeholder="eg. 1388 Sutter Street
                                                                                San Francisco 94109 California USA" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no">
                                                                    </div>
                                                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                                                        <label>Organization Country *</label>
                                                                        <select class="multisteps-form__select form-control all_input_second_select" id="organization_country" name="organization_country">
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <?php echo $idCountry; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                                                        <div class="col-12 col-sm-6">
                                                                            <label>Postal Code *</label>
                                                                            <input class="multisteps-form__input form-control" type="text" id="organization_postal_code" name="organization_postal_code" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="eg. 50398" autocomplete="no">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <h5 class="font-weight-bolder">ABOUT YOUR SUBSCRIPTIONS</h5>
                                                            <div class="multisteps-form__content">
                                                                <div class="row mt-3">
                                                                    <div class="col-4">
                                                                        <label>Are you a WADD member? *</label>
                                                                        <select class="multisteps-form__select form-control all_input_second_select" id="wadd_member" name="wadd_member">
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="2">No</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <label>Are you a APM member? *</label>
                                                                        <select class="multisteps-form__select form-control all_input_second_select" id="apm_member" name="apm_member">
                                                                            <option value="" disabled selected>Select Option</option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="2">No</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <label>Are you a member of any other association?</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="APM_REG" id="APAL" value="APAL" aria-label="APAL">
                                                                            <label class="form-check-label" for="APAL">APAL</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="APM_REG" id="AILANCYP" value="AILANCYP" aria-label="AILANCYP">
                                                                            <label class="form-check-label" for="APAL">AILANCYP</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="APM_REG" id="AMPI" value="AMPI" aria-label="AMPI">
                                                                            <label class="form-check-label" for="AMPI">AMPI</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="APM_REG" id="LC" value="LC" aria-label="LC">
                                                                            <label class="form-check-label" for="LC">Latin America and the Caribbean</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <h5 class="font-weight-bolder">DISCOUNT CODE</h5>
                                                            <h6>If you have a scholarship or speaker code, please enter it below</h6>
                                                            <div class="multisteps-form__content mt-3">
                                                                <div class="row mt-3">
                                                                    <div class="col-12 col-sm-4"></div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <label>Scholarship/Speaker code</label>
                                                                        <input class="multisteps-form__input form-control" type="text" id="scholarship" name="scholarship" maxlength="10" placeholder="eg. XXX0X0X0X0" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no">
                                                                    </div>
                                                                    <div class="col-12 col-sm-4 mt-3 mt-sm-0"></div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="button-row d-flex mt-4">
                                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" id="next_two" type="button" title="Next" disabled>Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single form panel-->
                                                        <div id="card_three" class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                                            <div class="row text-center">
                                                                <div class="col-10 mx-auto">
                                                                    <h5 class="font-weight-normal">Payment Method</h5>
                                                                    <p>You will have a maximum of 5 days to make your payment and upload your voucher to the system. Y Complete the form with your VAT information If you require a
                                                                        tax deductible receipt.</p>
                                                                </div>
                                                            </div>
                                                            <div class="multisteps-form__content row text-center">
                                                                <div class="row mt-4 row text-center">
                                                                    <div class="col-sm-3 ms-auto">
                                                                        <input type="checkbox" class="btn-check" id="btncheck2" name="group1[]" value="electronic" data-bs-toggle="modal" data-bs-target="#ModalPayOne">
                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck2">
                                                                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <title>box-3d-50</title>
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                                            <g transform="translate(603.000000, 0.000000)">
                                                                                                <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                                                <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                                                <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        <h6>Electronic
                                                                            Transfer</h6>
                                                                    </div>
                                                                    <div class="col-sm-3 me-auto">
                                                                        <input type="checkbox" class="btn-check" id="btncheck3" name="group1[]" value="paypal" data-bs-toggle="modal" data-bs-target="#ModalPayOne">
                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck3">
                                                                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <title>spaceship</title>
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                                            <g transform="translate(4.000000, 301.000000)">
                                                                                                <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                                                                <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                                                                <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                                                                                <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        <h6>Credit or Debit
                                                                            Card</h6>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row text-center">
                                                                    <div class="col-10 mx-auto">
                                                                        <p class="mb-0 text-sm">To finish your registration select a method of payment to the event</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single form panel-->
                                                        <div id="card_four" class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                                            <div class="row text-center">
                                                                <div class="col-10 mx-auto">
                                                                    <h5 class="font-weight-normal">Payment Method</h5>
                                                                    <p>You will have a maximum of 5 days to make your payment and upload your voucher to the system. Y Complete the form with your VAT information If you require a
                                                                        tax deductible receipt.</p>
                                                                </div>
                                                            </div>
                                                            <div class="multisteps-form__content">
                                                                <div class="row mt-4">
                                                                    <div class="col-sm-3 ms-auto">
                                                                        <input type="checkbox" class="btn-check"  id="btncheck1" name="group1[]" data-bs-toggle="modal" data-bs-target="#ModalPayOne">
                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck1">
                                                                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <title>settings</title>
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                                            <g transform="translate(304.000000, 151.000000)">
                                                                                                <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                                                                <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                                                                <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        <h6>Design</h6>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <input type="checkbox" class="btn-check" id="btncheck2" name="group1[]">
                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck2">
                                                                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <title>box-3d-50</title>
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                                            <g transform="translate(603.000000, 0.000000)">
                                                                                                <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                                                <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                                                <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        <h6>Code</h6>
                                                                    </div>
                                                                    <div class="col-sm-3 me-auto">
                                                                        <input type="checkbox" class="btn-check" id="btncheck3" name="group1[]">
                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck3">
                                                                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <title>spaceship</title>
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                                            <g transform="translate(4.000000, 301.000000)">
                                                                                                <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                                                                <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                                                                <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                                                                                <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        <h6>Develop</h6>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row text-center">
                                                                    <div class="col-10 mx-auto">
                                                                        <br>
                                                                        <p class="mb-0 text-sm">To finish your registration select a method of payment to the event</p>
                                                                    </div>
                                                                </div>
                                                                <div class="button-row d-flex mt-4">
                                                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--single form panel-->

                                                        <div id="Menu_Two" class="row" style="display: none;">
                                                            <div class="col-12 col-lg-12 mx-auto my-4">
                                                                <div class="multisteps-form__progress">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card multisteps-form__form p-3 border-radius-xl bg-white" id="card_five" data-animation="FadeIn" style="display: none;">
                                                            <div class="row text-center">
                                                                <div class="row text-center">
                                                                    <div class="row text-center mt-1">
                                                                        <div class="col-10 mx-auto">
                                                                            <h5 class="font-weight-normal">VAT INFORMATION:</h5>
                                                                            <p class="mb-0 text-sm">
                                                                                SAT notice: If you request a receipt, only your VAT CODE (RFC) is needed; no further data is
                                                                                required for issuance.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="multisteps-form__content">
                                                                <div class="row mt-0">
                                                                    <div class="row mt-1">
                                                                        <div class="col-12 col-sm-4">
                                                                            <label>Business name *</label>
                                                                            <input class="multisteps-form__input form-control all_input_finalize" type="text" id="business_name_iva" name="business_name_iva" placeholder="eg. Christopher Prior Jones" maxlength="20" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                                        </div>
                                                                        <div class="col-12 col-sm-4 mt-1 mt-sm-0">
                                                                            <label>VAT Code *</label>
                                                                            <input class="multisteps-form__input form-control all_input_finalize" type="text" id="code_iva" name="code_iva" placeholder="eg. CPJ41250AS" maxlength="13" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                                        </div>
                                                                        <!-- <div class="col-12 col-sm-4 mt-1 mt-sm-0">
                                                                            <label>Payment method *</label>
                                                                            <select class="multisteps-form__select form-control all_input_finalize_select" name="payment_method_iva" id="payment_method_iva">
                                                                                <option value="" disabled selected>Select Option</option>
                                                                                <option value="ELECTRONIC TRANSFER">ELECTRONIC TRANSFER</option>
                                                                                <option value="CREDIT OR DEBIT CARD">CREDIT OR DEBIT CARD</option>
                                                                            </select>
                                                                        </div> -->
                                                                    </div>
                                                                    <div class="row mt-1">
                                                                        <div class="col-12 col-sm-5">
                                                                            <label>Email to send the receipt * </label>
                                                                            <input class="multisteps-form__input form-control all_input_finalize" type="text"  id="email_receipt_iva" name="email_receipt_iva" placeholder="eg. user@domain.com" onfocus="focused(this)" onfocusout="defocused(this)">
                                                                            <span class="mb-0 text-sm" id="error_email_send" style="display:none;color:red;">Wrong email</span>
                                                                        </div>
                                                                        <div class="col-12 col-sm-2">
                                                                            <label>Postal Code *</label>
                                                                            <input class="multisteps-form__input form-control all_input_finalize" type="text" id="postal_code_iva" name="postal_code_iva" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="eg. 50398">
                                                                        </div>
                                                                        <div class="col-12 col-sm-4 mt-1 mt-sm-0">
                                                                            <label>Payment method *</label>
                                                                            <select class="multisteps-form__select form-control all_input_finalize_select" name="payment_method_iva" id="payment_method_iva">
                                                                                <option value="" disabled selected>Select Option</option>
                                                                                <option value="ELECTRONIC TRANSFER">ELECTRONIC TRANSFER</option>
                                                                                <option value="CREDIT OR DEBIT CARD">CREDIT OR DEBIT CARD</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-1">

                                                                    </div>
                                                                    <div class="row text-center mt-1">
                                                                        <div class="col-10 mx-auto">
                                                                            <p class="mb-0 text-sm">Once payment has been identified, you will receive your donation receipt within 48 hours. To
                                                                                report delays send a copy of your payment slip to apm@psiquiatrasapm.org.mx.
                                                                                Please remember that receipts can only be issued within the month of your deposit.To finish your registration select button Register</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-row d-flex mt-1">
                                                                        <button class="btn bg-gradient-success ms-auto mb-0" id="finalize" type="button" onclick="myFunction_TermsConditions()" disabled>Finalize</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--single form panel-->
                                                        <div class="card p-1 border-radius-xl bg-white" id="card_six" data-animation="FadeIn" style="display: none;">
                                                            <div class="row text-center">
                                                                <div class="col-10 mx-auto">
                                                                    <h5 class="font-weight-normal">TERMS AND CONDITIONS :</h5>
                                                                    <textarea class="form-control" rows="11" cols="50" disabled>PAYMENT
The conference fee must be paid in full by the deadline on your payment form. Registration is
not guaranteed until you have paid and received a confirmation email with your bar code.
Ensure that all the bank charges are covered when making your payment, WADD/APM cannot
cover any shortfall on transactions. Incomplete bookings will be cancelled after the payment
deadline as indicated above.
Please note that registrations and/or payments are not available on the day of the event, so
please do register in advance.
REFUNDS
Fees are non-refundable.
RECEIPT
Asociaci??n Psiqui??trica Mexicana, A.C. is an non-profit society and can therefore only issue
receipts that are tax-deductible for individuals and companies within Mexico. Due to our tax
status, this must be issued within the month of your deposit. We are unable to produce a receipt
outside this time.
DATA PROTECTION.
Thank you for completing the form. This information will be used for the purpose of your
registration to IV World Congress on Dual Disorders 2022, and for statistical and market analysis.
We use your information to process your registration application and to communicate with you
about this event.
We temporarily provide personal information to companies that perform services to us and
require them to protect your information in the same way we do.
Presenting your delegate badge to exhibitors and sponsors for scanning expresses your
consent to share your personal details with them.
DATA SECURITY:
We take commercially reasonable steps to protect your information from loss, misuse, and
unauthorized access. When personal information is transferred over the Internet, we encrypt it
using Transfer Layer Security (TLS) encryption technology or similar technology.
YOUR RIGHTS:
You have the right to receive the information we hold about you, ask to correct it or, under
certain circumstances, to delete it.
CONTACT US:
Inquiries regarding data protection can be directed to our data protection office at
contact@grupolahe.com
PRIVACY NOTICE:
For complete information about our data protection practices, follow the link below to our
Privacy notice.

                                                                        </textarea>

                                                                    <div class="button-row mt-2">
                                                                        <button class="btn bg-gradient-success ms-auto mb-0" type="submit">I HAVE READ THE TERMS AND CONDITIONS AND I AGREE</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single form panel-->

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
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="ModalPayOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">VERY IMPORTANT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 text-sm">
                        VERY IMPORTANT
                        <br>
                    </p>
                    <p class="text-sm text-justify">
                        <br>
                        Mexican Psichiatry Association is a Non-profit Society and can therefore only
                        issue receipts that are tax-deductible for individuals and companies within
                        Mexico. Once payment has been identified, you will receive your receipt within
                        48 hours. To report delays send a copy of your payment slip to
                        apm@psiquiatrasapm.org.mx. Please remember that receipts can only be issued
                        within the month of your deposit. If you need a tax-deductible receipt, please
                        click the Yes button below.

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal" onclick="myFunctionDiscardVAT()">No</button>
                    <button type="button" class="btn bg-gradient-success" onclick="myFunction()">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <footer class="footer pt-12">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ?? <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="" class="font-weight-bold" target="www.grupolahe.com">Creative GRUPO LAHE</a>.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link pe-0 text-muted">privacy policies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php echo $footer; ?>
</main>


</body>

