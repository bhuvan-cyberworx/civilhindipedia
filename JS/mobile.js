

// function courseNav(){
// 	var menuHeightMob = document.getElementById('navigation-links-mobile').clientHeight;
// 	var navMenuDistance = document.getElementById('tutorial-nav-id').offsetTop;
// 	var scrollDistance  = navMenuDistance - menuHeightMob;


//   if(window.pageYOffset > scrollDistance){
//   document.getElementById("tutorial-nav-id").classList.add("fixed-top");
//   document.getElementById("tutorial-nav-id").style.top = menuHeightMob+'px';
//   }

//   else{
//   document.getElementById("tutorial-nav-id").classList.remove("fixed-top");
//   }


// }


var paperSidebar = document.getElementById('papers-sidebar');
var mobileFilter = document.getElementById('mobile-filter');
var mobileFilterClose = document.getElementById('mobile-filter-close');

function sideBarOpen(){
	alert('working');
	paperSidebar.style.right = "00%";
	mobileFilter.style.display = "none";
	mobileFilterClose.style.display = "block";

}


// function sideBarOpen(e)  = {

// }
function sideBarClose(){
	alert('working');
	paperSidebar.style.right = "-80%";
	mobileFilter.style.display = "block";
	mobileFilterClose.style.display = "none";

}
mobileFilter.addEventListener("click", sideBarOpen);

mobileFilterClose.addEventListener("click", sideBarClose);

window.addEventListener("scroll", courseNav);

function saveAndNext(e){
	
}