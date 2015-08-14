 function checkForm(form)
  {
    
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    } 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!filter.test(form.email.value)) {
      alert("Error: Please check you email address!");
      form.username.focus();
      return false;
    } 
    if(form.pwd1.value == ""||form.pwd2.value == "") {
      alert("Please input your password");
      form.username.focus();
      return false;
    }  

    if(form.pwd1.value != form.pwd2.value) {
       
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }