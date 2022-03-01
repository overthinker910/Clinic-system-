function validateForm() {
    let x = document.forms["sign_up"]["first_name"].value;
    let y = document.forms["sign_up"]["last_name"].value;
 
    if (x =="" && y == "" ) 
    {
      alert("The form must be filled out");
      return false;
    }
    
    if (x == "") {
      alert("First Name must be filled out");
      return false;
    } else if (y == "") {
      alert("Last Name must be filled out");
      return false;
    } 
    }  
  