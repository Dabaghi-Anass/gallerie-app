const deleteImageBtns = document.querySelectorAll(".delete-image-btn");
deleteImageBtns.forEach(btn => {
    btn.addEventListener("click" , (e)=>{
        let imageId = e.target.getAttribute("data-image-identifier");
        const inp = document.querySelector("[name=image-id]");
        inp.value = imageId;
        IMAGE_ID_TO_BE_DELETED = imageId;

        openModal();
    });
})
const modalCloseBtn = document.querySelector(".modal-close-btn");
modalCloseBtn.addEventListener("click",()=>{
    const modal = document.querySelector(".modal");
    modal.style.display = "none";
})
function openModal(){
    const modal = document.querySelector(".modal");
    modal.style.display = "grid";
}
const modalCancelBtn = document.querySelector("#modal-cancel-btn");
modalCancelBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    const modal = document.querySelector(".modal");
    modal.style.display = "none";
})