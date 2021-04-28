
// Reservation

function application() {
    var good = document.getElementById('reservation').value;
    var aff = document.getElementById('affichage');
    var data;

    console.log(good);
    switch (good) {
        case "bungalow":
            data = "<select><option> Pension </option> <option> Complete </option><option> Half </option><option> None </option></select>";
            aff.innerHTML = data;
            document.getElementById("resImg").src = "Assets/Img/bungalow.jpg";
            break;
        case "appartment":
            data = "<select> <option> Pension </option> <option> Complete </option><option> Half </option><option> None </option></select>";
            aff.innerHTML = data;
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
            document.getElementById("resImg").url = "Assets/Img/appartment.jpg";
            break;
        default:
            data = "";
    }
    
}
