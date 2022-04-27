let error = "";

function check(){
	let err = false;
	if(!document.getElementById("UN").includes("@")){
		error = error.concat("Invalid Email, ");
		err = true;
	}
	if(document.getElementById("PW") == ""){
		error = error.concat("Please create password, ");
		err = true;
	}
	if(!document.getElementById("1").checked && !document.getElementById("2").checked && !document.getElementById("3").checked){
		error = error.concat("Please choose something to buy, ");
		err = true;
	}
	if(!document.getElementById("1s").checked && !document.getElementById("3s").checked && !document.getElementById("7s").checked){
		error = error.concat("Please choose a shipping option");
		err = true;
	}
	console.log(error);
	document.getElementById("error").innerHTML = error;
	if(err){
		return false;
	}
}