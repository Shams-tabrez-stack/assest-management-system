document.getElementById("sub").addEventListener("click", function(event) {
  if (!namecheck() || !numbercheck() || !datecheck() || !assignedcheck()) event.preventDefault();
});

function namecheck() {
  var fname = document.getElementById('Iname').value;
  if (fname == "" || fname == null) {
    document.getElementById("name_error").innerHTML = " Enter Item Name";
    return false;
  } else {
    document.getElementById("name_error").innerHTML = "";
    return true;
  }
}

function numbercheck() {
  var number = document.getElementById('unum').value;
  if (number == "" || number == null){
    document.getElementById("num_error").innerHTML ="Enter Unique Number";
    return false;
  } else{
    document.getElementById("num_error").innerHTML = "";
return true;
  }
}

function datecheck(){
  var adate = document.getElementById('dateT').value;
  if (adate == ""){
    document.getElementById("date_error").innerHTML = "Select Date and time";
    return false;
  } else {
    document.getElementById("date_error").innerHTML = "";
    return true;
  }
}
function assignedcheck(){
  var assigned = document.getElementById('assign').value;
  if( assigned == ""){
    document.getElementById("assign_check").innerHTML = " Enter Assigned Person Name";
    return false;
  }else {
    document.getElementById("assign_check").innerHTML = "";
    return true;
  }
}
