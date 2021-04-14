var fname, mname, lname, stp, cstp, daofb, momaina, addy, city, state, zcode, eml, phn, gender, country;

function _(x) {
    return document.getElementById(x);
}

function processPhase1() {
    fname = _("firstname").value;
    mname = _("middlename").value;
    lname = _("lastname").value;
    stp = _("stp").value;
    cstp = _("cstp").value;
    daofb = _("daofb").value;
    momaina = _("momaina").value;
    addy = _("addy").value;
    city = _("city").value;
    state = _("state").value;
    zcode = _("zcode").value;
    eml = _("eml").value;
    phn = _("phn").value;
    if (fname.length > 2 && mname.length > 0 && lname.length > 2 && stp.length > 2 && cstp.length > 2 && daofb.length > 2 && momaina.length > 2 && addy.length > 2 && city.length > 2 && state.length > 2 && zcode.length > 2 && eml.length > 2 && phn.length > 2) {
        _("phase1").style.display = "none";
        _("phase2").style.display = "block";
        _("progressBar").value = 33;
        _("status").innerHTML = "Choose Your Country";
    } else {
        alert("Please fill in the fields");
    }
}

function processPhase2() {
    gender = _("gender").value;
    if (gender.length > 0) {
        _("phase2").style.display = "none";
        _("phase3").style.display = "block";
        _("progressBar").value = 66;
        _("status").innerHTML = "Phase Choose Your Account Type";
    } else {
        alert("Please choose your country");
    }
}

function processPhase3() {
    country = _("country").value;
    if (country.length > 0) {
        _("phase3").style.display = "none";
        _("show_all_data").style.display = "block";
        _("display_fname").innerHTML = fname;
        _("display_mname").innerHTML = mname;
        _("display_lname").innerHTML = lname;
        _("display_stp").innerHTML = stp;
        _("display_cstp").innerHTML = cstp;
        _("display_daofb").innerHTML = daofb;
        _("display_momaina").innerHTML = momaina;
        _("display_addy").innerHTML = addy;
        _("display_city").innerHTML = city;
        _("display_state").innerHTML = state;
        _("display_zcode").innerHTML = zcode;
        _("display_eml").innerHTML = eml;
        _("display_phn").innerHTML = phn;
        _("display_gender").innerHTML = gender;
        _("display_country").innerHTML = country;
        _("progressBar").value = 100;
        _("status").innerHTML = "Data Overview";
    } else {
        alert("Please choose your account type");
    }
}

function submitForm() {
    _("multiphase").method = "post";
    _("multiphase").action = "my_parser.php";
    _("multiphase").submit();
}