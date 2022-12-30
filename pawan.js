

const mobile_nav = document.querySelector(".mobile-navbar-btn");
const nav_header = document.querySelector(".header");

const toggleNavbar = () => {
    nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());


function hover() {
    var s = document.getElementById("pawan");
    const a = ["green", "brown", "red", "yellow", "grey", "blue", "pink","rgb(109, 51, 4)" ,"#b3b3ff","#d966ff","#FCAC45","#80ffbf"];

    var c = Math.floor(Math.random() * a.length);
    // alert(c);
    s.style.color = a[c];
}

function hoverout() {
    var s = document.getElementById("pawan");
    const a = ["green", "brown", "red", "yellow", "grey", "blue", "pink","rgb(109, 51, 4)","#b3b3ff" ,"#FCAC45","#80ffbf","#d966ff"];

    var c = Math.floor(Math.random() * a.length);
    // alert(c);
    s.style.color = a[c];
}



var a = 0
function over() {
    if (a === 0) {
        document.getElementById("abc").style.display = "block";
        document.getElementById("skills").innerHTML = "Close";


        a = 1;
    }
    else {
        document.getElementById("abc").style.display = "none";
        document.getElementById("skills").innerHTML = "Skills";
        a = 0;
    }

}


