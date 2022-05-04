//Reg Ex Declaration - Globaly.
var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
var $LNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
var $FullNameRegEx = /^([a-zA-Z ]{2,40})$/;
var $BankAccountNameRegEx = /^([a-zA-Z ]{2,60})$/;
var $PasswordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,12}$/;
var $CPasswordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,12}$/;
var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
var $ConNoRegEx = /^([0-9]{10})$/;
var $AgeRegEx = /^([0-9]{1,2})$/;
var $AadhaarNoRegEx = /^([0-9]{12})$/;
var $GSTNoRegEx = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
var $IndianDrivingLicenseNoRegEx = /^([A-Z]{2,3}[-/0-9]{8,13})$/;
var $IndianVehicleRegNoRegEx = /^([A-Z]{2}[0-9]{1,2}[A-Z]{1,3}[0-9]{1,4})$/;
var $PincodeRegEx = /^[1-9][0-9]{5,6}$/;
var $PANNoRegEx = /^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/;
var $IFSCCodeRegEx = /^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/;
var $BankAccountNoRegEx = /^([0-9]{9,18})$/;
var $PostTitleRegex = /^(.{30,300})$/;
var $PostDescRegex = /^(.{100,3000})$/;
var $LatitudeLongitude = /^(-?(?:1[0-7]|[1-9])?\d(?:\.\d{1,8})?|180(?:\.0{1,8})?)$/;


var TxtNameFlag = false,
    lnNameFlag = false,
    eiNameFlag = false,
    TxtDateFlag = false,
    addNameFlag = false,
    DesignationFlag = false,
    TxtContactNoFlag = false,
    TxtContactMsgFlag = false,
    passMsgFlag = false,
    cpassMsgFlag = false;

$(document).ready(function () {
    $("#fn").blur(function () {
        TxtNameFlag = false;
        $("#fnValidation").empty();
        if ($(this).val() == "") {
            $("#fnValidation").html("(*) First Name Required..!!");
            // alert("#fnValidation");
        } else {
            if (!$(this).val().match($FNameLNameRegEx)) {
                $("#fnValidation").html("(*) Invalid First Name..!!");
                // alert("#fnValidation");
            } else {
                TxtNameFlag = true;
            }
        }
    });
});
$(document).ready(function () {
    $("#ln").blur(function () {
        lnNameFlag = false;
        $("#lnValidation").empty();
        if ($(this).val() == "") {
            $("#lnValidation").html("(*) Last Name Required..!!");

        } else {
            if (!$(this).val().match($LNameLNameRegEx)) {
                $("#lnValidation").html("(*) Invalid Last Name..!!");
            } else {
                lnNameFlag = true;
            }
        }
    });
    $(document).ready(function () {
        $("#ei").blur(function () {
            eiNameFlag = false;
            $("#eiValidation").empty();
            if ($(this).val() == "") {
                $("#eiValidation").html("(*) Email_id required..!!");

            } else {
                if (!$(this).val().match($EmailIdRegEx)) {
                    $("#eiValidation").html("(*) Invalid Email_id..!!");
                } else {
                    eiNameFlag = true;
                }
            }
        })
    });
    $("#add").blur(function () {
        $("#addValidation").empty();
        if ($(this).val() == "" || $(this).val() == null) {
            $("#addValidation").html("(*) Address required..!!");
            addNameFlag = false;
        } else {
            addNameFlag = true;
        }
    });

    $(document).ready(function () {
        $("#add").blur(function () {
            addNameFlag = false;
            $("#addValidation").empty();
            if ($(this).val() == "") {
                $("#addValidation").html("(*) Address required..!!");
            } else {

                addNameFlag = true;
            }
        })
    });

    $(document).ready(function () {
        $("#pass").blur(function () {
            passMsgFlag = false;
            $("#passValidation").empty();
            if ($(this).val() == "") {
                $("#passValidation").html("(*)Password Required..!!");
            } else {
                if (!$(this).val().match($PasswordRegEx)) {
                    $("#passValidation").html("(*)Invalid password..!!");
                } else {
                    passMsgFlag = true;
                }
            }
        })
    });

    $(document).ready(function () {
        $("#cpass").blur(function () {
            cpassMsgFlag = false;
            $("#cpassValidation").empty();
            if ($(this).val() == "") {
                $("#cpassValidation").html("(*) Confirm Password Required ..!!");

            } else {
                if (!$(this).val().match($PasswordRegEx)) {
                    $("#cpassValidation").html("(*) Invalid confirm password..!!");
                } else {
                    cpassMsgFlag = true;
                }
            }
        })
    });


    //===========================================================
    $(document).ready(function () {
        $("#designation").blur(function () {
            DesignationFlag = false;
            $("#DesignationValidation").empty();
            if ($(this).find("option:selected").text() === " ") {
                $("#DesignationValidation").html("(*) Designation required..!!");

            } else {

                DesignationFlag = true;
            }
        })
    });

    $("#cn").blur(function () {
        TxtContactNoFlag = false;
        $("#cnValidation").empty();
        if ($(this).val() == "") {
            $("#cnValidation").html("(*) Contact No. required..!!");
        } else {
            if (!$(this).val().match($ConNoRegEx)) {
                $("#cnValidation").html("(*) Invalid contact no..!!");
            } else {
                TxtContactNoFlag = true;
            }
        }
    });

    $("#BtnSubmit").click(function () {
        TxtNameFlag = false;
        $("#fnValidation").empty();
        if ($("#fn").val() == "") {
            $("#fnValidation").html("(*) First Name Required..!!");
        } else {
            if (!$("#fn").val().match($FNameLNameRegEx)) {
                $("#fnValidation").html("(*) Invalid First Name..!!");
            } else {
                TxtNameFlag = true;
            }
        }
        lnNameFlag = false;
        $("#lnValidation").empty();
        if ($("#ln").val() == "") {
            $("#lnValidation").html("(*) Last Name Required..!!");
        } else {
            if (!$("#ln").val().match($FNameLNameRegEx)) {
                $("#lnValidation").html("(*) Invalid Last Name..!!");
            } else {
                lnNameFlag = true;
            }
        }
        eiNameFlag = false;
        $("#eiValidation").empty();
        if ($("#ei").val() == "") {
            $("#eiValidation").html("(*) Email_id Required..!!");
        } else {
            if (!$("#ei").val().match($EmailIdRegEx)) {
                $("#eiValidation").html("(*) Invalid Email_id..!!");
            } else {
                eiNameFlag = true;
            }
        }
        passMsgFlag = false;
        $("#passValidation").empty();
        if ($("#pass").val() == "") {
            $("#passValidation").html("(*) Password Required..!!");
        } else {
            if (!$("#pass").val().match($PasswordRegEx)) {
                $("#passValidation").html("(*) Invalid Password..!!");
            } else {
                passMsgFlag = true;
            }
        }

        cpassMsgFlag = false;
        $("#cpassValidation").empty();
        if ($("#cpass").val() == "") {
            $("#cpassValidation").html("(*) Confirm Password Required..!!");
        } else {
            if (!$("#cpass").val().match($PasswordRegEx)) {
                $("#cpassValidation").html("(*) Invalid Confirm Password..!!");
            } else {
                cpassMsgFlag = true;
            }
        }

        DesignationFlag = false;
        $("#DesignationValidation").empty();
        if ($("#Designation").val() == "") {
            $("#DesignationValidation").html("(*) Designation Required..!!");
        } else {
            // if (!$("#Designation").val().match($EmailIdRegEx)) {
            //     $("#DesignationValidation").html("(*) Invalid Email_id..!!");
            // } else {
            DesignationFlag = true;
            // }
        }
        //         DesignationFlag = false;
        //         $(function(){
        //         $("#Designation").change(function(){
        //         // var HoursEntry = $("#Designation option:selected").val();
        //         // console.log(HoursEntry);
        //         // alert(DesignationValidation);
        //         if("#Designation" == "")
        //         {
        //             $("#DesignationValidation").html("Please select at least One option");
        //             return false;
        //         }
        //         else
        //         {
        //             $("#DesignationValidation").html("selected val is  "+HoursEntry);
        //             return true;
        //             DesignationFlag = true;
        //         }
        //     });
        // });  
        addNameFlag = false;
        $("#addValidation").empty();
        if ($("#add").val() == "") {
            $("#addValidation").html("(*) Address Required..!!");
        } else {

            addNameFlag = true;
        }

        TxtContactNoFlag = false;
        $("#cnValidation").empty();
        if ($("#cn").val() == "") {
            $("#cnValidation").html("(*) Contact No. Required..!!");
        } else {
            if (!$("#cn").val().match($ConNoRegEx)) {
                $("#cnValidation").html("(*) Invalid Contact No..!!");
            } else {
                TxtContactNoFlag = true;
            }
        }

        $("#cn").keypress(function (e) {
            $("#cnValidation").empty();
            var Flag = false;
            (e.which >= 48 && e.which <= 57) ?
                Flag = true : (Flag = false, $("#cnValidation").html("(*) Invalid contact no..!!"));
            return Flag;
        });

        if (TxtNameFlag == true && lnNameFlag == true && eiNameFlag == true && addNameFlag ==
            true && TxtContactNoFlag == true && passMsgFlag == true && cpassMsgFlag == true && DesignationFlag == true) {
                // location.replace("process1.php")

            //alert("Form submitted successfully..!!");
            document.register.submit();
        } else {
            echo("Error to submit form..!!");
            //alert("ERROR...Failed To Submit Form !!");

        }
    });

});