function validateFormre() {
const name=/^[A-Za-z]+([\ A-Za-z]+)*/;
const addr=/^[A-Za-z0-9]+([\ A-Za-z0-9]+)*/;
const emailRegExp = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
const passw = /^[A-Za-z0-9@#$%^*]{8,10}$/;
  var x = document.forms["loginform1"]["uname"].value;
  var y = document.forms["loginform1"]["psw"].value;
  var a = document.forms["loginform1"]["repsw"].value;
  var b = document.forms["loginform1"]["aname"].value;
  var c = document.forms["loginform1"]["addr"].value;

  if (a===""||b===""||c===""||y===""||x===""||!emailRegExp.test(x)||!passw.test(y)||!passw.test(a)||!name.test(b)||!addr.test(c)||(y!=a)){
    if(x===""){
      document.getElementById("demo").innerHTML = "* E-Mail field cannot be empty";
    }
    else if(!emailRegExp.test(x)){
      document.getElementById("demo").innerHTML = "* Invalid email format";
    }
    if(y===""){
    document.getElementById("demo1").innerHTML = "* Password field cannot be empty ";

    }
    else if(!passw.test(y)){
      document.getElementById("demo1").innerHTML = "* Invalid password format";
    }
    if(a===""){
    document.getElementById("demo3").innerHTML = "* Password field cannot be empty ";

    }
    else if(!passw.test(a)){
      document.getElementById("demo3").innerHTML = "* Invalid password format";
    }
    else if((y!=a)){
      document.getElementById("demo3").innerHTML = "* Passwords domot match";
    }


    if(b===""){
      document.getElementById("demo2").innerHTML = "* Name field cannot be empty";
    }
    else if(!name.test(b)){
      document.getElementById("demo2").innerHTML = "* Invalid Name format";
    }
    if(c===""){
    document.getElementById("demo4").innerHTML = "* Address field cannot be empty ";

    }
    else if(!addr.test(c)){
      document.getElementById("demo4").innerHTML = "* Invalid Address format";
    }
    return false;

  }
  else{
    return true;
  }
}
