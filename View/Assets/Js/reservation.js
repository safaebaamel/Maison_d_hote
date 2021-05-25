
// Geting everything with Ids 

var good = document.getElementById("good");
var pension_val = document.getElementById("pension");
var affichage = document.getElementById("affichage");
var view_div = document.getElementById("view_div");
// var div_Vue = document.getElementById("Div_Vue");
var children = document.getElementById("with_child")
// var Div_Pension = document.getElementById("pension")
var plus_children = document.getElementById("plus_children")
var total_desc = document.getElementById("total_desc")
// var img_Bine = document.getElementById("img_Bine");
var price = document.getElementById("price");
var add_simple_bed = ((simple_chamber * 100) / 70);
var baby_bed = ((simple_chamber / 100) + 25);
var outside_view_price = ((simple_chamber * 20) / 100);
var medium_child = ((simple_chamber / 100) + 50);
var pension_complete = 400;
var pension_half = 200;
var simple_chamber = 1500;
var double_chamber = 2500;
var appartment_price = 4000;
var bungalow_price = 4500;
var outside_view = 400;
var price_chamber = 0;
var price_pension_full = 500;
var price_pension = 0;
var tarifs = 0;

function Good() {
    switch (good.value) {
        case "simplechamber":
            affichage.innerHTML = `<label class="form-label">View Type</label>
                                            <select onchange="view_type_func()" name="view" class="form-select" id="view_t" required>
                                                <option value="">Choose...</option>
                                                <option value="inside_view">Inside View</option>
                                                <option value="outside_view">Outside View</option>
                                            </select>`;
            price_chamber = simple_chamber;
            document.getElementById("resImg").src = "Assets/Img/chamber.jpg";
            total();
            break;
        case "doublechamber":
            affichage.innerHTML = `<label class="form-label">Bed Type</label>
                                            <select class="form-select" name="bed" onchange="bedType()" id="bed" required>
                                                <option value="">Choose...</option>
                                                <option value="doublebed">Double Bed</option>
                                                <option value="simplebed">2 Simple Beds</option>
                                            </select>`;
            price_chamber = double_chamber;
            document.getElementById("resImg").src = "Assets/Img/double.jpg";
            total();
            break;
        case "appartment":
            price_chamber = appartment_price;
            document.getElementById("resImg").src = "Assets/Img/appartment.jpg";
            total();
            break;
        case "bungalow":
            price_chamber = bungalow_price;
            document.getElementById("resImg").src = "Assets/Img/bungalow.jpg";
            total();
            break;
        case "empty":
            affichage.innerHTML = ` `;
            total();
            break;
        default:
            price_chamber = 0;
            total();
            break;
    }
}

var price_view = 0;

function view_type_func() {
    var view_type = document.getElementById("view_t").value;
    console.log(view_type);
    switch (view_type) {
        case "inside_view":
            price_view = 0;
            total();
            break;
        case "outside_view":
            price_view = 300;
            total();
            break;
        default:
            break;
    }
    console.log(price_view);
}

function bedType() {
    var bed_type = document.getElementById("bed").value;
    var double_type_v = document.getElementById("double_type");
    console.log(bed_type);
    switch (bed_type) {
        case "simplebed":
            double_type_v.innerHTML = `<label class="form-label">View Type</label>
            <select  onchange="view_type_func()" name="view" class="form-select" id="view_t" required>
                <option value="">Select</option>
                <option value="inside_view">Inside View</option>
            </select>`;
            total();
            break;
        case "doublebed":
            double_type_v.innerHTML = `<label class="form-label">View Type</label>
            <select  onchange="view_type_func()" name="view" class="form-select" id="view_t" required>
                <option value="">Select</option>
                <option value="inside_view">Inside View</option>
                <option value="outside_view">Outside View</option>
            </select>`;
            total();
            break;
        default:
            double_type_v.innerHTML = ` `;
            total();
            break;
    }
}


function pension_func() {
    switch(pension_val.value) {
        case "nopension":
            price_pension = 0;
            total();
            break;
        case "allpension":
            price_pension = price_pension_full;
            total();
            break;
        case "breakfastandlunch":
            price_pension = (price_pension_full/2);
            total();
            break;
        case "breakfastanddinner":
            price_pension = (price_pension_full/2);
            total();
            break;
        default:
            price_pension = 0;
            total();
            break;
    }
}

function check_add_children() {
    extra = document.getElementById("extra");
    if (with_child.checked) {
        plus_children.innerHTML =`
        <hr class="my-4">
        <div class="row"> 
            <div class="col-md-6">
                <label class="form_label">Under 2 Years old? </label>
                <input type="number" class="form-control" oninput=""  id="undertwo_kids" placeholder="< 2YO">
            </div>
            <div  class="col-md-6" id="">
                <label class="form-label">Choose</label>
                    <select class="form-select" onchange="func_extras_b()" id="undertwo_kids_add" required>
                        <option value="Nobed">No bed</option>
                        <option value="Extrabed">Extra Bed</option>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="form_label">Between 3 and 14? </label>
                <input type="number" class="form-control" oninput="" id="twoten_kids" placeholder=" 2 < < 14 ">
            </div>
            <div  class="col-md-6">
                <label class="form-label">Choose</label>
                    <select class="form-select" id="twoten_kids_add" onchange="func_extras_m()" required>
                        <option value="Null"></option>
                        <option value="simple_chamber">Simple Chamber</option>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="form_label">Older than 14 ?</label>
                <input type="number" class="form-control" oninput="" id="older_kids" placeholder=" > 14 ">
            </div>
            <div  class="col-md-6">
                <label class="form-label">Choose</label>
                    <select class="form-select" id="adults" onchange="func_extras_a()" required>
                        <option value="simplechamber">Simple Chamber</option>
                        <option value="plusbed">Extra Bed</option>
                    </select>
            </div>
        </div>
        `;
    } else {
        plus_children.innerHTML = " ";
    }
}

var price_extra_b = 0;
function func_extras_b() {
    var el = document.getElementById("undertwo_kids_add");
    switch(el.value) {
        case "Nobed":
            price_extra_b = 0;
            total();
            break;
        case "Extrabed":
            price_extra_b = 400;
            total();
            break;
        default:
            price_extra_b = 0;
            break;
    }
}

var price_extra_m = 0;
function func_extras_m() {
    var m = document.getElementById("twoten_kids_add");
    switch(m.value) {
        case "NULL":
            price_extra_m = 0;
            total()
            break;
        case "simple_chamber":
            price_extra_m = 750;
            total()
            break;
        default:
            break;
    }
    console.log(price_extra_m);
}

var price_extra_a = 0;

function func_extras_a() {
    var adult = document.getElementById("adults");
    switch (adult.value) {
        case "simplechamber":
            price_extra_a = 0;
            total()
            break;
        case "plusbed":
            price_extra_a = ((simple_chamber * 70) / 100);
            total()
            break;
        default:
            break;
    }
}

function total() {
    var total_days = document.getElementById("days").value;
    tarifs = ((price_chamber + price_view + price_pension) * total_days + price_extra_m + price_extra_b + price_extra_a);
    price.innerHTML = "Total Price: " + tarifs + "DH";
    price.style.alignContent= "center";
}