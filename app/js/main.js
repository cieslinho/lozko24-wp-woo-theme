const navBtn = document.querySelector('.nav__btn')
const navList = document.querySelector('.menu')
const menuItem = document.querySelector('.menu-item-21')
const newBtn = document.createElement('button')

function createDropdownBtn() {
	newBtn.classList.add('nav__dropdown')
	newBtn.textContent = '+'

	menuItem.appendChild(newBtn)
}

const handleNav = () => {
	navBtn.classList.toggle('active')
	navList.classList.toggle('active')
}

const handleDropdown = () => {
	newBtn.previousElementSibling.classList.toggle('active')
}

navBtn.addEventListener('click', handleNav)
createDropdownBtn()
newBtn.addEventListener('click', handleDropdown)
