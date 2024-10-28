function fontControl() {

    var borderR = document.getElementById("borderR").value;
    var borderG = document.getElementById("borderG").value;
    var borderB = document.getElementById("borderB").value;
    var width = document.getElementById("width").value;
    var backgroundR = document.getElementById("backgroundR").value;
    var backgroundG = document.getElementById("backgroundG").value;
    var backgroundB = document.getElementById("backgroundB").value;
    document.getElementById("paragraph").style.borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`;
    document.getElementById("paragraph").style.backgroundColor = `rgb(${backgroundR}, ${backgroundG}, ${backgroundB})`;
    document.getElementById("paragraph").style.borderWidth = width;
}