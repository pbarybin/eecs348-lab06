function updateParagraph() {
    var borderR = document.getElementById("borderR").value;
    var borderG = document.getElementById("borderG").value;
    var borderB = document.getElementById("borderB").value;
    var borderWidth = document.getElementById("borderWidth").value;
    var backR = document.getElementById("backR").value;
    var backG = document.getElementById("backG").value;
    var backB = document.getElementById("backB").value;
    var paragraph = document.getElementById("paragraph");

    paragraph.style.borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`
    paragraph.style.borderWidth = borderWidth
    paragraph.style.backgroundColor = `rgb(${backR}, ${backG}, ${backB})`
}