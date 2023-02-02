let open_modal1=document.getElementById("open_modal1");
let open_modal2=document.getElementById("open_modal2");
let open_modal3=document.getElementById("open_modal3");

let modal_container=document.getElementById("modal-container2");
let close_modal=document.getElementById("close_modal");
let close_icon=document.getElementById("close-icon");

open_modal1.addEventListener("click",function()
    {
        modal_container.classList.add("show");
    });

    open_modal2.addEventListener("click",function()
    {
        modal_container.classList.add("show");
    });

    open_modal3.addEventListener("click",function()
    {
        modal_container.classList.add("show");
    });

    close_modal.addEventListener("click",function()
    {
        modal_container.classList.remove("show");
    });

    close_icon.addEventListener("click",function()
    {
        modal_container.classList.remove("show");
    });