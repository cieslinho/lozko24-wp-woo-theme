const navBtn=document.querySelector(".nav__btn"),navList=document.querySelector(".menu"),menuItem=document.querySelector(".menu-item-4355"),newBtn=document.createElement("button");function createDropdownBtn(){newBtn.classList.add("nav__dropdown"),newBtn.textContent="+",menuItem.appendChild(newBtn)}const handleNav=()=>{navBtn.classList.toggle("active"),navList.classList.toggle("active")},handleDropdown=()=>{newBtn.previousElementSibling.classList.toggle("active")};navBtn.addEventListener("click",handleNav),createDropdownBtn(),newBtn.addEventListener("click",handleDropdown);