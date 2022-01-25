//nav bar
function displayNav() { 
	document.getElementById("nav").style.display = "block";
	document.getElementById("bars").style.display = "none";
	document.getElementById("times").style.display = "block";
}
function hideNav() {
	document.getElementById("nav").style.display = "none";
	document.getElementById("bars").style.display = "block";
	document.getElementById("times").style.display = "none";
}

//quantity check (order.html)
function checkOrder(){
	if(orderForm.c_quantity.value == 0 
	&& orderForm.o_quantity.value == 0 
	&& orderForm.b_quantity.value == 0
	&& orderForm.p_quantity.value == 0){
		alert("choose the quantity.");
		return false;
	} else{
		return true;
	}
}


//order date (orderSubmission.html
function orderDate(){
	var today = new Date();
	var time = (today.getMonth()+1) + "/" + today.getDate() + " " + today.getHours() + ":" + today.getMinutes();
	document.getElementById("t").innerHTML = time;
}