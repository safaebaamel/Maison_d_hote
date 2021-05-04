
// Reservation

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
            data = "<select> <option> View </option> <option> Extern View </option><option> Intern View </option>";
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

    var kids_num = document.getElementById('nbr_childs').value;
    for (var i = 0; i < kids_num ; i++) {
        var input_age = document.createElement("Input");
        input_age.type = "number";
        input_age.id = "name" + i;
        input_age.placeholder = "Age of the child" + Number(i+1);
        document.getElementById("display").appendChild(input_age);   
    }
}

