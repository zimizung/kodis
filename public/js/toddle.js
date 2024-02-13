document.addEventListener("DOMContentLoaded", function() {
    // components objects
    var mortOBJ = document.getElementById("mort");
    var leavOBJ = document.getElementById("leav");
    var histOBJ = document.getElementById("hist");
    var pensOBJ = document.getElementById("pens");
    var propOBJ = document.getElementById("prop");

    // buttons to toggle the objects
    var openMort = document.getElementById('mortBtn');
    var openLeav = document.getElementById('leavBtn');
    var openPens = document.getElementById('pensBtn');
    var openHist = document.getElementById('histBtn');
    var openProp = document.getElementById('propBtn');
    var close = document.querySelectorAll(".closexc");

    // parent div to toggle visibility
    var contDiv = document.querySelector(".cont2");

    // initial object state
    hideAllObjects();
    toggleContDiv();

    // action when buttons are pressed
    openMort.onclick = function() {
        mortOBJ.style.display = "block";
        pensOBJ.style.display = "none";
        histOBJ.style.display = "none";
        propOBJ.style.display = "none";
        leavOBJ.style.display = "none";
        toggleContDiv();
    };
    openPens.onclick = function() {
        mortOBJ.style.display = "none";
        pensOBJ.style.display = "block";
        histOBJ.style.display = "none";
        propOBJ.style.display = "none";
        leavOBJ.style.display = "none";
        toggleContDiv();
    };
    openHist.onclick = function() {
        mortOBJ.style.display = "none";
        pensOBJ.style.display = "none";
        histOBJ.style.display = "block";
        propOBJ.style.display = "none";
        leavOBJ.style.display = "none";
        toggleContDiv();
    };
    openProp.onclick = function() {
        mortOBJ.style.display = "none";
        pensOBJ.style.display = "none";
        histOBJ.style.display = "none";
        propOBJ.style.display = "block";
        leavOBJ.style.display = "none";
        toggleContDiv();
    };
    openLeav.onclick = function() {
        mortOBJ.style.display = "none";
        pensOBJ.style.display = "none";
        histOBJ.style.display = "none";
        propOBJ.style.display = "none";
        leavOBJ.style.display = "block";
        toggleContDiv();
    };

    close.forEach(function(button) {
        button.onclick = function() {
            hideAllObjects();
            toggleContDiv();
        };
    });

    // function to hide all objects
    function hideAllObjects() {
        mortOBJ.style.display = "none";
        leavOBJ.style.display = "none";
        histOBJ.style.display = "none";
        pensOBJ.style.display = "none";
        propOBJ.style.display = "none";
    }

    // function to toggle the visibility of the parent div
    function toggleContDiv() {
        var objects = [mortOBJ, leavOBJ, histOBJ, pensOBJ, propOBJ];
        var visible = objects.some(function(obj) {
            return obj.style.display === "block";
        });
        contDiv.style.display = visible ? "block" : "none";
    }
});