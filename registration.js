var btns = document.getElementsByClassName("show_reg");
{
    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            document.querySelector(".popup").style.display="flex";
        }
      }
}

var span = document.getElementsByClassName("close_btn")[0];

span.onclick = function() {
    document.querySelector(".popup").style.display="none";
}

/* for Login*/

var btns = document.getElementsByClassName("show_reg");
{
    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            document.querySelector(".popup").style.display="flex";
        }
      }
}