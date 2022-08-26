var button = document.querySelector('.submit_form');
var banner = document.querySelector('.banner')
button.addEventListener('click',(event)=>{
event.preventDefault()
banner.style.display="none";
})
