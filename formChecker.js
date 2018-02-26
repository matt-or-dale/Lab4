function check(){
  var uName = document.getElementById("userName").value;
  var password = document.getElementById("password").value;
  var fives = document.getElementById("fives").value;
  var shakes = document.getElementById("shakes").value;
  var hugs = document.getElementById("hugs").value;
  var shipping = document.getElementsByName("shipping");
  var valid = true;

  if(uName == ""){
    valid=false;
    window.alert("Must enter a user name.");
  }
  else if (password == "") {
    valid=false;
    window.alert("Must enter a password.");
  }
  else if (uName.indexOf("@") == -1) {
    valid=false;
    window.alert("User name must be in the form of an email address.");
  }
  else if (uName.lastIndexOf(".") == -1){
    valid=false;
    window.alert("User name must be in the form of an email address.");
  }
  else{
    isChecked=false;
    for(i=0; i<shipping.length; i++){
      if(shipping[i].checked){
        isChecked=true;
        break;
      }
    }
    if(isChecked==false){
      valid=false;
      window.alert("Must select a shipping option.");
    }
  }
  return(valid);
}
