document.querySelector("#background-disable").onclick = function() {
    if (document.body.style.backgroundImage === "url('../images/autumn.jpg')") {
        document.body.style.backgroundImage = "url()";
    }
    else if (document.body.style.backgroundImage === "url()"){
        document.body.style.backgroundImage = "url('../images/autumn.jpg')";
    }
    else {
        console.log(document.body.style.backgroundImage);
    }
}
