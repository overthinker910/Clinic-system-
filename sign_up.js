
const prof = document.querySelector('#sign_up');
prof.addEventListener('submit', (e) => {
e.preventDefault();
    let x = document.querySelector("#first_name").value
    let y = document.querySelector("#last_name").value
    if(x==''){
    alert("Please enter first name")
    }
    if(y==''){
      alert("Please enter last name")
      }
    let z= document.querySelector("#phone_number").value
    if(isNaN(z)){
      alert("Enter correct phone number")
    }
    let a= document.querySelector("#pass").value
    let b=document.querySelector("#re_pass").value
    if (a=='')
    alert ("Please enter Password");
else if (b=='')
    alert ("Please enter confirm password");    
else if (a!=b) {
    alert ("Password did not match!")
    return false;
}

  });
  