function validate() {
    let name = document.getElementById("name").value;
      email = document.getElementById("email").value;
    subject = document.getElementById("subject").value;
     message = document.getElementById("message").value;
     error_message = document.getElementById("error_message");
    error_message.style.padding = "10px";
    var text;
    var regex = /^[a-zA-Z\s]+$/;
    if (name === '' ||!regex.test(name)){
        text = "Please Enter valid Name";
        error_message.innerHTML = text;
        return false;
    }
    if(subject.length < 1){
        text = "Please Enter Correct Subject";
        error_message.innerHTML = text;
        return false;
    }
    var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if(!re.test(String(email).toLowerCase())){
        text = "Please Enter valid Email";
        error_message.innerHTML = text;
        return false;
    }
    if(message.length <= 1){
        text = "Please Enter More Than 140 Characters";
        error_message.innerHTML = text;
        return false;
    }
    alert("Form Submitted Successfully!");
    return true;
}
