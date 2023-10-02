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

async function sendLikeRequest(formData){
    const response = await fetch("../utils/database/like_image.php", {
        method : "POST",
        body : formData
    });
} 
async function sendDislikeRequest(formData){
    const response = await fetch("../utils/database/dislike_image.php", {
        method : "POST",
        body : formData
    });
    console.log(await response.text());
} 
function like(id, uid){
    const formData = new FormData();
    formData.append("id", id);
    formData.append("uid", uid);
    sendLikeRequest(formData);
}
function dislike(id, uid){
    const formData = new FormData();
    formData.append("id", id);
    formData.append("uid", uid);
    sendDislikeRequest(formData);
}
let likeIcon = document.querySelectorAll(".star-image")

likeIcon.forEach(icon => {
    icon.addEventListener("click" , ({ currentTarget }) => {
        let {id , uid} = currentTarget.dataset;
        const iconName = currentTarget.getAttribute("name")
        if(iconName === "star-outline"){
            currentTarget.setAttribute("name" , "star")
            like(+id,+uid)
        }else{
            currentTarget.setAttribute("name" , "star-outline")
            dislike(+id,+uid)
        }
    })
})