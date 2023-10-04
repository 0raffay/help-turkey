<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Donate to Turkeye</title>
</head>

<body class="donationBody">

    <div class="donationWrapper">
        <div class="donation__imgSteps img__wrap">
            <img src="assets/images/donation-journey-1.png" class="active" alt="">
            <img src="assets/images/donation-journey-2.png" alt="">
            <img src="assets/images/donation-journey-3.png" alt="">
            <img src="assets/images/donation-journey-4.png" alt="">
        </div>

        <div class="donation__formContainer ">
            <div class="img__wrap donationLogo">
                <img src="assets/images/logo.png" alt="">
            </div>
            <div class="step1 donation__steps"  id="step1">
                <div class="donation__formHeader">
                    <h6 class="small__title">Select Amount</h6>
                    <p>Select an amount to empower change and make a meaningful impact today.</p>
                </div>
                <div class="donation__formBody">
                    <div class="wrapper">
                        <div class="subscriptionCheck">
                            <div>
                                <input type="radio" name="subscriptionType" checked id="once">
                                <label for="once">Give Once</label>
                            </div>
                            <div>
                                <input type="radio" name="subscriptionType" id="recurring">
                                <label for="recurring">Recurring</label>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <h6 class="small__title">Currency Title</h6>
                        <div class="selectContainer">
                            <input class="purposeSelect" initialValue="Turkish Lire" data-select-required value="Turkish Lire" readonly>
                            <div class="purposeSelectContainer">
                                <span>Canadian dollar (CAD)</span>
                                <span>United States Dollar (USD)</span>
                                <span>Canadian dollar (CAD)</span>
                                <span>Canadian dollar (CAD)</span>
                                <span>Canadian dollar (CAD)</span>
                                <span>Canadian dollar (CAD)</span>
                                <span>Canadian dollar (CAD)</span>
                            </div>
                        </div>
                        <div class="selectAmountContainer">
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="a" value="50">
                                <label for="a"><img src="/assets/images/pound-icon.svg" alt="">50</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="b" value="100">
                                <label for="b"><img src="/assets/images/pound-icon.svg" alt="">100</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="c" value="150">
                                <label for="c"><img src="/assets/images/pound-icon.svg" alt="">150</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="d" value="200">
                                <label for="d"><img src="/assets/images/pound-icon.svg" alt="">200</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="e" value="250">
                                <label for="e"><img src="/assets/images/pound-icon.svg" alt="">250</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="f" value="500">
                                <label for="f"><img src="/assets/images/pound-icon.svg" alt="">500</label>
                            </div>
                        </div>
                        <div class="selectAmountContainer" style='display:none;'>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="five" value="5">
                                <label for="five"><img src="/assets/images/pound-icon.svg" alt="">5</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="ten" value="10">
                                <label for="ten"><img src="/assets/images/pound-icon.svg" alt="">10</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="fif" value="15">
                                <label for="fif"><img src="/assets/images/pound-icon.svg" alt="">15</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="twen" value="20">
                                <label for="twen"><img src="/assets/images/pound-icon.svg" alt="">20</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="twenfif" value="25">
                                <label for="twenfif"><img src="/assets/images/pound-icon.svg" alt="">25</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subscriptionAmount" id="fifty" value="25">
                                <label for="fifty"><img src="/assets/images/pound-icon.svg" alt="">50</label>
                            </div>
                        </div>
                        <div class="otherAmountInput">
                            <input type="number" inputmode="numeric" id="otherAmount" placeholder="Other amount" name="subscriptionAmountOther">
                        </div>
                    </div>
                    <div class="wrapper">
                        <h6 class="small__title">Purpose</h6>
                        <div class="selectContainer">
                            <input class="purposeSelect" initialValue="Select purpose" data-select-required value="Select purpose" readonly>
                            <div class="purposeSelectContainer">
                                <span>Helping Needy</span>
                                <span>Food Shortage</span>
                                <span>Rebuilding</span>
                                <span>Tents</span>
                                <span>Clean Water</span>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <h6 class="small__title">Select Type</h6>
                        <div class="selectContainer ">
                            <input class="purposeSelect" initialValue="Select Type" data-select-required value="Select Type" readonly>
                            <div class="purposeSelectContainer small">
                                <span>Zakat</span>
                                <span>Sadaqah</span>
                                <span>Something Else</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" data-donation-button-1>Continue</button>
                </div>
            </div>
            <div class="step2 donation__steps"  id="step2">
                <div class="donation__formHeader">
                    <h6 class="small__title">Personal Information</h6>
                    <p>Share your information to join us in creating positive change and receiving updates on the impact of your contribution.</p>
                    <button data-donation-go-back class="btn btn-primary"><i class="ri-arrow-left-s-line"></i></button>
                </div>
                <div class="donation__formBody">
                    <div class="selectContainer">
                        <label class='small__title'>Title </label>
                        <input class="purposeSelect title step2Select" data-inital-value='Select Title' value="Select Title" readonly>
                        <div class="purposeSelectContainer">
                            <span>Mr</span>
                            <span>Mrs</span>
                            <span>Miss</span>
                            <span>Ms</span>
                            <span>Dr</span>
                            <span>Prof</span>
                        </div>
                    </div>
                    <div class="flex gap-15 wrapper">
                        <div>
                            <label for="f_name" class='small__title'>First name <span>*</span> </label>
                            <input type="text" placeholder="Fawad" data-not-empty required id="f_name" name="p_info_f_name">
                        </div>
                        <div>
                            <label for="l_name" class='small__title'>Last name <span>*</span> </label>
                            <input type="text" placeholder="Alam" data-not-empty required id="l_name" name="p_info_l_name">
                        </div>
                    </div>
                    <div class='wrapper'>
                        <label for="p_email" class='small__title'>Email <span>*</span> </label>
                        <input type="text" placeholder="fawadalam@gmail.com" data-email data-regex-required-field id="p_email" name="p_info_email" required>
                    </div>
                    <div class='wrapper'>
                        <label for="p_num" class='small__title'>Phone number <span>*</span> </label>
                        <input type="number" placeholder="+92" data-number data-regex-required-field inputmode="numeric" id="p_num" name="p_info_phone" required>
                    </div>
                    <div class='wrapper'>
                        <label for="p_address" class='small__title'>Address <span>*</span> </label>
                        <input type="text" placeholder="fawadalam@gmail.com" data-not-empty id="p_address" name="p_info_address" required>
                    </div>
                    <div class="flex gap-15 wrapper">
                        <div>
                            <label for="p_city" class='small__title'>City <span>*</span> </label>
                            <input type="text" placeholder="Karachi" data-not-empty required id="p_city" name="p_info_city">
                        </div>
                        <div>
                            <label for="p_country" class='small__title'>Country <span>*</span> </label>
                            <input type="text" placeholder="Pakistan" data-not-empty required id="p_country" name="p_info_country">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary btn-lg" data-donation-button-2>Continue</button>
            </div>
            <div class="step3 donation__steps" id="step3">
                <div class="donation__formHeader">
                    <h6 class="small__title">Payment Option</h6>
                    <p>Share your information to join us in creating positive change and receiving updates on the impact of your contribution.</p>
                    <button data-donation-go-back class="btn btn-primary"><i class="ri-arrow-left-s-line"></i></button>
                </div>
                <div class="donation__formBody">
                    <div class="wrapper">
                        <div class="finalAmountContainer">
                            <div class="img__wrap">
                                <img src="assets/images/final-amount-img.png" alt="">
                            </div>
                            <div class="finalAmountText">
                                <h4 class="small__title">Clean Water</h4>
                                <h6> <img src="assets/images/icons/currency-icon-lg.png" alt=""> <span>1000</span></h6>
                            </div>
                        </div>
                    </div>


                    <div class='wrapper'>
                        <label for="" class='small__title'>Card Holder Name </label>
                        <input type="text" placeholder="Enter Card Holder Name">
                    </div>
                    <div class='wrapper'>
                        <label for="" class='small__title'>Card No.</label>
                        <input type="text" placeholder="0000-0000-0000" required>
                    </div>
                    <div class="flex gap-15 wrapper">
                        <div>
                            <label for="" class='small__title'>Expiry Date </label>
                            <input type="text" placeholder="19/02/2030">
                        </div>
                        <div>
                            <label for="" class='small__title'>CVC/CVV</label>
                            <input type="text" placeholder="*****">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg" data-donation-button-3>Continue</button>
                <div class="img__wrap my-4">
                    <img src="assets/images/donation-card-icons.png" alt="">
                </div>
            </div>
            <div class="step4 donation__steps"  id="step4">
                <div class="donation__formBody">
                    <div class="donation__thankYouText">
                        <div class="img__wrap">
                            <img src="assets/images/logo.png" alt="">
                        </div>
                        <div>
                            <h6>Thank You For Donation</h6>
                            <p>Your incredible generosity has a profound impact, fueling positive change and brighter tomorrows for those in need. Thank you for being a beacon of hope in their lives.</p>
                            <a href="index.php" class="btn btn-primary btn-lg">Back To Site</a>
                        </div>
                        <div class="flex gap-20 justify-content-center">
                            <div><i class="ri-facebook-circle-fill"></i></div>
                            <div><i class="ri-instagram-fill"></i></div>
                            <div><i class="ri-linkedin-fill"></i></div>
                            <div><i class="ri-twitter-fill"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <?php include('includes/footer-scripts.php') ?>
</body>

</html>