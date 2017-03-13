/*
var button = document.querySelector(".box-script");
button.addEventListener("click", function(e) { 
    if (!e) e = window.event;

});

function openbox(id){
    display = document.getElementById(id).style.display; 
    if(display=='none'){
       document.getElementById(id).style.display='block';
    }else{
       document.getElementById(id).style.display='none';
    }

}
*/
function openbox(id) {
    $("div.vboxs").toggleClass("vboxs boxs");
    $(id).removeClass("boxs");
    $(id).addClass("vboxs");
}

/*var bwidth = $("#box1").width();
console.log(bwidth);*/
$(".box-script").width(270);