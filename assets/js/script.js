$(document).ready(function () {
    sliders();
    open__mobileMenu();
    active__page();
    closeModal();
    volunteer__formValidation();
    popUpValidation();
});

function sliders() {
    $(".causesSlider").slick({
        variableWidth: true,
        // variableHeight: true,
        // infinite: true,
        slidesToScroll: 1,
        slidesToShow: 1,
        nextArrow: $(".causesArrows button.causes-next"),
        prevArrow: $(".causesArrows button.causes-prev"),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
}

function runVideos() {
    // Get all video containers and play buttons
    const videoContainers = document.querySelectorAll(".reviewVideo");
    const playButtons = document.querySelectorAll(".custom-play-button");

    // Add click event listeners to each play button
    playButtons.forEach((playButton, index) => {
        const video = videoContainers[index].querySelector(".video");

        playButton.addEventListener("click", () => {
            video.play();
            playButton.style.display = "none"; // Hide the play button when video starts playing
        });

        // Add event listener to reset the video when it ends
        video.addEventListener("ended", () => {
            video.currentTime = 0;
            playButton.style.display = "block"; // Show the play button again after the video ends
        });

        // Add click event listener to video to pause it and show play button again
        video.addEventListener("click", () => {
            if (!video.paused) {
                video.pause();
                playButton.style.display = "block";
            }
        });
    });
}

function open__mobileMenu() {
    let burgerButton = $(".burgerMenu");
    let mobileMenu = $(".mobile__header");

    burgerButton.click(function () {
        mobileMenu.toggleClass("active");
    });

    let submenu = $(".mobile__header .submenu");
    let submenuButton = $(".mobile__list > .has__submenu");
    submenu.eq(0).slideUp();

    submenuButton.click(function () {
        console.log("upper");
        submenuButton.find(" > .submenu").slideToggle();
    });

    let closeButton = $("[data-close-menu]");
    closeButton.click(function () {
        $(".mobile__header").removeClass("active");
    });
}

function active__page() {
    let links = $("header li a");
    let currentLocation = window.location.href;
    let exactLocation = currentLocation.replace(
        "http://localhost/help-turkey/",
        ""
    );
    console.log(exactLocation);

    links.removeClass("active");

    links.each(function () {
        let thisHrefValue = $(this).attr("href");
        if (thisHrefValue === exactLocation) {
            $(this).addClass("active");
        }
    });
}

function closeModal() {
    let closeButton = $("[data-close-modal]");
    closeButton.click(function () {
        $(this).closest(".popup__overlay").hide();
    });
}

function volunteer__formValidation() {
    const allFieldsNotEmpty = $("[required-fields]");
    const numberField = $("[requied-number-field]");
    const emailField = $("[required-email-field]");
    const $submitButton = $("[data-submit-volunteer]");
    let thankYouModal = $(".thankYouModal");

    function checkIfEmpty() {
        allFieldsNotEmpty.each(function () {
            const itsValue = $(this).val();
            if (itsValue === "") {
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });
    }

    function numberFieldValidation() {
        const numberFieldValue = numberField.val();
        const numberRegex = /^\d{9,}$/;
        if (!numberRegex.test(numberFieldValue)) {
            numberField.addClass("error");
        } else {
            numberField.removeClass("error");
        }
    }

    function emailFieldValidation() {
        const emailFieldValue = emailField.val();
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(emailFieldValue)) {
            emailField.addClass("error");
        } else {
            emailField.removeClass("error");
        }
    }

    function updateButtonStatus() {
        let errorClassOnEmpty = allFieldsNotEmpty.hasClass("error");
        let errorClassOnRegex = $("[data-regex-required-field]").hasClass(
            "error"
        );

        if (errorClassOnEmpty || errorClassOnRegex) {
            $submitButton.prop("disabled", true);
        } else {
            $submitButton.prop("disabled", false);
        }
    }

    function switchSteps() {
        if (!$submitButton.prop("disabled")) {
            $(".volunteerForm *").each(function () {
                $(this).val("");
            });
            thankYouModal.addClass("active").show();
        }
    }

    $submitButton.click(function (e) {
        checkIfEmpty();
        numberFieldValidation();
        emailFieldValidation();
        updateButtonStatus();
        switchSteps();

        e.preventDefault();
    });

    allFieldsNotEmpty.change(function () {
        $(this).removeClass("error");
        updateButtonStatus();
    });

    numberField.change(function () {
        numberFieldValidation();
        updateButtonStatus();
    });

    emailField.change(function () {
        emailFieldValidation();
        updateButtonStatus();
    });
}

function popUpValidation() {

    function goBack() {
        let backButton = $('[data-donation-go-back]')
        backButton.click(function() {
            let itsParent = $(this).closest('.donation__steps');
            itsParent.hide()
            itsParent.prev().show()
        })
    }
    goBack()


    // Radio Buttons
    const subscriptionTypeRadioButtons = $(
        ".subscriptionCheck input[type='radio']"
    );
    const customAmountLabels = $(
        ".selectAmountContainer input[type='checkbox']"
    );
    const customLabelsContainer = $(".selectAmountContainer");

    //Selects
    const selects = $("[data-select-required]");
    const openSelectContainerButton = $(".purposeSelect");
    const selectOptionContainer = $(".selectContainer .purposeSelectContainer");
    const otherInput = $(".otherAmountInput input");

    //Img Change
    const donationStepImages = $(".donation__imgSteps img");

    const step1Button = $("[data-donation-button-1]");

    function customSelect() {
        selectOptionContainer.slideUp();
        let isOpen = false;
        openSelectContainerButton.click(function () {
            selectOptionContainer.slideUp();
            if (isOpen) {
                $(this).next().slideUp();
                isOpen = false;
            } else {
                $(this).next().slideDown();
                isOpen = true;
            }
        });

        const allFieldsNotEmpty = $("input[data-not-empty]");
        const numberField = $("input[data-number]");
        const emailField = $("input[data-email]");
        const selectField = $(".step2Select");

        function updateButtonStatus() {
            let errorClassOnEmpty = allFieldsNotEmpty.hasClass("error");
            let errorClassOnRegex = $(
                "input[data-regex-required-field]"
            ).hasClass("error");
            let errorClassOnSelect = selectField.hasClass("error");

            if (errorClassOnEmpty || errorClassOnRegex || errorClassOnSelect) {
                step1Button.prop("disabled", true);
            } else {
                step1Button.prop("disabled", false);
            }
        }

        function selectTheText() {
            $(".purposeSelectContainer span").click(function () {
                $(this).parent().prev().addClass("selected");
                let itsText = $(this).text();
                $(this).parent().prev().val(itsText).removeClass("error");
                $(".selectContainer .purposeSelectContainer").slideUp();
                updateButtonStatus();
            });
        }
        selectTheText();
    }
    customSelect();
    function step1() {
        subscriptionTypeRadioButtons.change(function () {
            if ($(this).prop("id") === "once") {
                customLabelsContainer.eq(0).show();
                customLabelsContainer.eq(1).hide();
                customAmountLabels.prop("checked", false);
                otherInput.removeClass("disabled");
            } else if ($(this).prop("id") === "recurring") {
                customLabelsContainer.eq(1).show();
                customLabelsContainer.eq(0).hide();
                customAmountLabels.prop("checked", false);
                otherInput.removeClass("disabled");
            }
        });
        $(".otherAmountInput").on("click", function () {
            if (otherInput.hasClass("disabled")) {
                otherInput.removeClass("disabled"); // Enable the input field
                $(".selectAmountContainer input[type='checkbox']").prop(
                    "checked",
                    false
                );
            }
        });

        function radioButtonsUpdate() {
            customAmountLabels.change(function () {
                if ($(this).is(":checked")) {
                    customAmountLabels.not(this).prop("checked", false);
                }
                radioButtonAndInputUpdate();
                inputUpdate();
            });
        }
        radioButtonsUpdate();

        function radioButtonAndInputUpdate() {
            let anyCheckboxChecked = customAmountLabels.is(":checked");
            if (anyCheckboxChecked) {
                otherInput.addClass("disabled");
            } else {
                otherInput.removeClass("disabled");
            }
        }

        function inputUpdate() {
            if (otherInput.val() === "" && !otherInput.hasClass("disabled")) {
                otherInput.addClass("error");
                step1Button.prop("disabled", true);
            } else {
                otherInput.removeClass("error");
                step1Button.prop("disabled", false);
            }
        }

        function selectUpdate() {
            selects.each(function () {
                let itsValue = $(this).val();
                let initalValue = $(this).attr("initialValue");
                if (itsValue === initalValue) {
                    $(this).addClass("error");
                    step1Button.prop("disabled", true);
                } else {
                    $(this).removeClass("error");
                    step1Button.prop("disabled", false);
                }
            });
        }

        step1Button.click(function () {
            console.log(selects);
            selectUpdate();
            inputUpdate();

            if (otherInput.hasClass("disabled")) {
                if (
                    !step1Button.prop("disabled") &&
                    !selects.hasClass("error")
                ) {
                    $("#step1").hide();
                    $("#step2").show();
                    donationStepImages.removeClass("active");
                    donationStepImages.eq(1).addClass("active");
                }
            } else {
                if (
                    !step1Button.prop("disabled") &&
                    otherInput.val() !== "" &&
                    !selects.hasClass("error")
                ) {
                    $("#step1").hide();
                    $("#step2").show();
                    donationStepImages.removeClass("active");
                    donationStepImages.eq(1).addClass("active");
                }
            }

            // console.log('afterClided')
        });
        otherInput.change(function () {
            inputUpdate();
        });
    }
    step1();

    function step2() {
        const allFieldsNotEmpty = $("[data-not-empty]");
        const numberField = $("[data-number]");
        const emailField = $("[data-email]");
        const selectField = $(".step2Select");
        const $submitButton = $("[data-donation-button-2]");

        var switchThisStep = false;

        function checkSelectField() {
            if (selectField.val() === selectField.attr("data-inital-value")) {
                selectField.addClass("error");
                $submitButton.prop("disabled", true);
            } else {
                selectField.removeClass("error");
                $submitButton.prop("disabled", false);
            }
        }

        function checkIfEmpty() {
            allFieldsNotEmpty.each(function () {
                const itsValue = $(this).val();
                if (itsValue === "") {
                    $(this).addClass("error");
                } else {
                    $(this).removeClass("error");
                }
            });
        }

        function numberFieldValidation() {
            const numberFieldValue = numberField.val();
            const numberRegex = /^\d{9,}$/;
            if (!numberRegex.test(numberFieldValue)) {
                numberField.addClass("error");
            } else {
                numberField.removeClass("error");
            }
        }

        function emailFieldValidation() {
            const emailFieldValue = emailField.val();
            const emailRegex =
                /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailRegex.test(emailFieldValue)) {
                emailField.addClass("error");
            } else {
                emailField.removeClass("error");
            }
        }

        function updateButtonStatus() {
            let errorClassOnEmpty = allFieldsNotEmpty.hasClass("error");
            let errorClassOnRegex = $(
                "input[data-regex-required-field]"
            ).hasClass("error");
            let errorClassOnSelect = selectField.hasClass("error");

            if (errorClassOnEmpty || errorClassOnRegex || errorClassOnSelect) {
                $submitButton.prop("disabled", true);
                switchThisStep = false;
            } else {
                $submitButton.prop("disabled", false);
                switchThisStep = true;
            }
        }

        function switchSteps() {
            // if (switchThisStep) {
            //     $(this).parent().hide();
            //     $(this).parent().next().show();
            // }
            if (!$submitButton.prop("disabled")) {
                // $(this).parent().hide();
                // $(this).parent().next().show();

                // var donationAmount = 0;
                // var donationPurpose = $(".purposeSelect.purpose").val();
                // var donationType = $(".purposeSelect.type").val();

                // var infoTitle = $(".purposeSelect.title").val();
                // var infoFName = $('input[name="p_info_f_name"]').val();
                // var infoLName = $('input[name="p_info_l_name"]').val();
                // var infoEmail = $('input[name="p_info_email"]').val();
                // var infoPhone = $('input[name="p_info_phone"]').val();
                // var infoAddress = $('input[name="p_info_address"]').val();
                // var infoCity = $('input[name="p_info_city"]').val();
                // var infoCountry = $('input[name="p_info_country"]').val();

                // if (
                //     $('input[name="subscriptionAmount"]:checked').val() ==
                //     undefined
                // ) {
                //     donationAmount = $(
                //         'input[name="subscriptionAmountOther"]'
                //     ).val();
                // } else {
                //     donationAmount = $(
                //         'input[name="subscriptionAmount"]:checked'
                //     ).val();
                // }
                // console.log(donationAmount);
                // console.log(donationPurpose);
                // console.log(donationType);

                // // values appnd
                // $(".purposeName").text(donationPurpose);
                // $(".purposeAmount").text(donationAmount);
                // $('input[name="purposeName"]').val(donationPurpose);
                // $('input[name="purposeAmount"]').val(donationAmount);
                // $('input[name="purposeType"]').val(donationType);
                // $('input[name="infoTitle"]').val(infoTitle);
                // $('input[name="infoFName"]').val(infoFName);
                // $('input[name="infoLName"]').val(infoLName);
                // $('input[name="infoEmail"]').val(infoEmail);
                // $('input[name="infoPhone"]').val(infoPhone);
                // $('input[name="infoAddress"]').val(infoAddress);
                // $('input[name="infoCity"]').val(infoCity);
                // $('input[name="infoCountry"]').val(infoCountry);
                donationStepImages.removeClass("active");
                donationStepImages.eq(2).addClass("active");
                $("#step2").hide();
                $("#step3").show();
            }
        }

        $submitButton.click(function (e) {
            checkIfEmpty();
            numberFieldValidation();
            emailFieldValidation();
            checkSelectField();
            updateButtonStatus();
            switchSteps();

            e.preventDefault();
        });

        allFieldsNotEmpty.change(function () {
            $(this).removeClass("error");
            updateButtonStatus();
        });

        numberField.change(function () {
            numberFieldValidation();
            updateButtonStatus();
        });

        emailField.change(function () {
            emailFieldValidation();
            updateButtonStatus();
        });
    }
    step2();
    
    function step3 () {
        let step3Button = $('[data-donation-button-3]')
        
        step3Button.click(function() {
            $('#step3').hide()
            $('#step4').show()

            donationStepImages.removeClass("active");
            donationStepImages.eq(3).addClass("active");

            $('.donationLogo').hide()
            $('.donationWrapper').css({height: '100%'})
        })
    }
    step3()
}
