
// Reservation

var total_tarifs = 0;

function Good() {
    var good = document.getElementById('good').value;
    var aff = document.getElementById('affichage');
    var description = document.getElementById('description');
    var data;

    switch (good) {
        case "bungalow":
            document.getElementById("resImg").src = "Assets/Img/bungalow.jpg";
            description.innerHTML = "Our Beautiful Bungalows";
            break;
        case "appartment":
            document.getElementById("resImg").src = "Assets/Img/appartment.jpg";
            break;
        case "simplechamber":
            data = "<select> <option> View </option> <option id={'externview'}> Extern View </option><option id={'externview'}> Intern View </option>";
            aff.innerHTML = data;
            document.getElementById("resImg").src = "Assets/Img/chamber.jpg";
            break;
        case "doublechamber":
            data = "<select> <option> Option </option> <option> 2 simple Beds </option><option> 1 big bed </option>";
            aff.innerHTML = data;
            document.getElementById("resImg").src = "Assets/Img/double.jpg";
            break;
        default:
            data = "";
    }
}

function kids() {
    document.getElementById("display").innerHTML= "";

    var kids_num = document.getElementById('nbr_childs').value;
    for (var i = 0; i < kids_num ; i++) {
        var input_age = document.createElement("Input");
        input_age.type = "number";
        input_age.id = "name" + i;
        input_age.placeholder = "Age of the child" + Number(i+1);
        document.getElementById("display").appendChild(input_age);
        // console.log(kids_num);
        console.log(input_age);
    }
    var button_submit_childs = document.createElement("Input");
    button_submit_childs.type = "button";
    button_submit_childs.value = "Submit";
    button_submit_childs.id = "button_submit_childs";
    document.getElementById("display").appendChild(button_submit_childs);
    // console.log(kids_num);
    document.getElementById("button_submit_childs").addEventListener("click", function() {
        for (var j = 0; j < kids_num ; j++) {
            age = document.getElementById("name"+j);
            // console.log(age);
            Age_kids(age.value);
            }
    });
}

function Age_kids($value) {
    console.log($value);

    if ($value <= 2) {
        var x = document.createElement("Input");
            x.setAttribute("id", "age");
            x.setAttribute("type", "checkbox");
            document.getElementById("display").appendChild(x);

            x.value = "Lit supplémentaire";
    }
    
    // switch(v) {
    //     case (v >= 0 && v <= 2):
    //         var x = document.createElement("SELECT");
    //         x.setAttribute("id", "age");
    //         document.body.appendChild(x);

    //         var z = document.createElement("option");
    //         z.setAttribute("value", "age");
    //         var t = document.createTextNode("Lit Supplémentaire");
    //         z.appendChild(t);
    //         document.getElementById("age").appendChild(z);
    //         break;
    //     case (v >= 2 && v<= 10):
    //         break;
    //     case (v >= 14):
    //         break;
    //     default: 
    //         console.log("Failed");
    //         break;
    // }
}

