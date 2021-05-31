// Getting everything with Ids 

var extra = document.getElementById('extra');
var good = document.getElementById("good");
var pension_val = document.getElementById("pension");
var extra_chamber = document.getElementById('extra_chamber');
var affichage = document.getElementById("affichage");
var view_div = document.getElementById("view_div");
var children = document.getElementById("with_child")
var plus_children = document.getElementById("plus_children")
var total_desc = document.getElementById("total_desc")
var price = document.getElementById("price");
var chamber_add = document.getElementById('chamber_add');
var pension_complete = 400;
var simple_chamber = 300;
var appartment_price = 200;
var bungalow_price = 4500;
var outside_view = 400;
var tarifs = 0;


let i = 1;
extra.addEventListener('click', function () {
    document.getElementById('pic').innerHTML = `
    <img src="Assets/Img/double.jpg" class="img-fluid img-thumbnail" alt="" id="resImg">
    <div class="input-group-append text-center m-1">
        <label id="description" class="m-2 fs-4 text-center">Chambre Double/Simple</label>
    </div>
    <div class="text-center" style="color: blue;" name="price" id="price">
    </div>
    `;
})
extra.addEventListener('click', function () {
    n = extra_chamber.value
    chamber_add.innerHTML = ``
    for (i = 1; i <= n; i++) {

        chamber_add.innerHTML += `
            <div class="col-12 mt-3" id="title-room">
                <center>
                <hr>Chamber Type N°${i}
                    
                </center>
            </div>
            <div id="chamber${i}" class="col-sm-4">

                <select class="browser-default custom-select mb-4 " id="room${i}" name="room[${i}][Roomtype]" >
                    <option value="" disabled="" selected="">Room</option>
                    <option value="single room">single room</option>
                    <option value="double room">double room</option>
                </select>
            </div>

            <!-- Bed Type -->

            <div id="bed-type${i}" class="col-sm-4"></div>

            <!-- View Type -->

            <div id="view-type${i}" class="col-sm-4"></div>

            <!-- pension -->

            <div class="col-12 mt-2" id="title-pension">
                <center>Pension N°${i}
                    
                </center>
            </div>
            <div class="col-12" id="pension${i}"><select class="form-control " name="pension[${i}][idpension]">
                    <option value="" id="pension${i}" disabled="" selected="">Select type of Pension</option>
                    <option value="17">Complete</option>
                    <option value="18">Breakfast / Lunch</option>
                    <option value="19">Breakfast / Dinner</option>
                    <option value="20">without</option>
                </select>
            </div>

    `
    }

})

function pick_good() {

    var property = document.getElementById('bien').value;
    console.log(property);

    switch (property) {
        case "bungalow":
            document.getElementById("resImg").src = "Assets/Img/bungalow.jpg";
            price_chamber = bungalow_price;
            total();
            break;
        case "appartment":
            document.getElementById("resImg").src = "Assets/Img/appartment.jpg";
            price_chamber = appartment_price;
            total();
            break;
        default:
            break;
    }

}

/* Room Type */
document.addEventListener('change', (e) => {
    for (let j = 1; j <= i; j++) {
        if (e.target.id == `room${j}` && e.target.value == 'double room') {
            document.getElementById(`view-type${j}`).innerHTML = ``
            document.getElementById(`bed-type${j}`).innerHTML = `<div >
            <select required id="bed-type${j}" class="browser-default custom-select mb-4 dom" id="select" name="room[${j}][bedtype]">
            <option value="" disabled="" selected="">Bed</option>
            <option value="double bed">Double Bed</option>
            <option value="2 Single Beds">2 Single Beds</option>
            </select>
            </div>`

        } else if (e.target.id == `room${j}` && e.target.value == 'single room') {
            document.getElementById(`bed-type${j}`).innerHTML = ``
            document.getElementById(`view-type${j}`).innerHTML = `<div >
            <select required class="browser-default custom-select mb-4 dom" id="select" name="room[${j}][viewtype]">
            <option value="" disabled="" selected="">View</option>
            <option value="interior view">interior view</option>
            <option value="exterior view">exterior view</option>
            </select>
            </div>`
        }
    }
})
document.addEventListener('change', (e) => {
    for (let j = 1; j <= i; j++) {
        if (e.target.id == `bed-type${j}` && e.target.value == 'double bed') {
            document.getElementById(`view-type${j}`).innerHTML = `<div >
            <select required class="browser-default custom-select mb-4 dom" id="select" name="room[${j}][viewtype]">
            <option value="" disabled="" selected="">View</option>
            <option value="interior view">interior view</option>
            <option value="exterior view">exterior view</option>
            </select>
            </div>`
        } else if (e.target.id == `bed-type${j}` && e.target.value == '2 Single Beds') {
            document.getElementById(`view-type${j}`).innerHTML = `<div >
        <select  class="browser-default custom-select mb-4 dom" id="select" name="room[${j}][viewtype]">
        
        <option value="interior view">interior view</option>
        </select>
        </div>`
        }
    }
})
/* list for age of child */
function children_func() {
    const nbr_child = document.getElementById('nbr_child').value;
    document.querySelector('#add_child').innerHTML = ``;
    for (i = 1; i <= nbr_child; i++) {
        document.querySelector('#add_child').innerHTML += ` 
        <div class=" col-12 child-offer">
            
                <select required class="col-sm-5 m-3 select-age browser-default custom-select " name="" id="child-age-` + i + `"  >
                    <option value="" disabled="" selected="">child age ` + i + `</option>
                    <option value="2"> age<= 2 </option> 
                    <option value="2.14"> 2 < age < 14 </option> 
                    <option value="14">age => 14 </option>
                </select>
            
            
                <select id = "select-offer` + i + `"  class="col-sm-5 m-3 select-offer` + i + ` browser-default custom-select " name="child[${i}][idofferschild]">        
                </select>
            
        </div>`


    }
}


document.addEventListener("change", function (e) {
    const nbchild = document.getElementById('nbr_child').value;

    for (let i = 1; i <= nbchild; i++) {
        const idenf = document.getElementById(`child-age-${i}`);
        if (e.target.id == `child-age-${i}` && e.target.value == "2") {
            document.querySelector(`#select-offer${i}`).innerHTML = ``
            document.querySelector(`#select-offer${i}`).innerHTML += `
        
        <option value="12">no supplement child bed 0 DH</option> 
        <option value="13">child bed supplement 25% single room</option>`


        } else if (e.target.id == `child-age-${i}` && e.target.value == "2.14") {
            document.querySelector(`#select-offer${i}`).innerHTML = ``
            document.querySelector(`#select-offer${i}`).innerHTML += `
        <option value="14">add 50% single room</option> `
        } else if (e.target.id == `child-age-${i}` && e.target.value == "14") {
            document.querySelector(`#select-offer${i}`).innerHTML = ``
            document.querySelector(`#select-offer${i}`).innerHTML += `
        <option value="15">add a single room</option>
        <option value="16">add 70% single room + bed</option>
        `
        }


    }
})

var price_view = 1;

function total() {
    var diffDays = 1;
    d_in = document.getElementById("d_in").value;
    d_out = document.getElementById("d_out").value;

    var date1 = new Date(d_in);
    var date2 = new Date(d_out);

    var oneDay = 24 * 60 * 60 * 1000; 
    var diffDays = Math.abs((date1.getTime() - date2.getTime()) / (oneDay));

    
    console.log(diffDays);
    console.log(price_chamber);
    tarifs = (price_chamber * diffDays);
    price.innerHTML = "Total Price: " + tarifs + "DH";
    price.style.alignContent = "center";
    x = tarifs;
    document.getElementById("hidden_price").value = tarifs;
}