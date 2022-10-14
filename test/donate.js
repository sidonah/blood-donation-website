const btn = document.getElementById("register");

function validateForm() {
  var name = document.forms["donate"]["name"].value;
  var age = document.forms["donate"]["age"].value;
  var blood_type = document.forms["donate"]["blood_type"].value;
  var email = document.forms["donate"]["email"].value;
  var phone = document.forms["donate"]["phone"].value;
  var address = document.forms["donate"]["address"].value;
  var gender = document.forms["donate"]["gender"].value;

  if (
    (name == null || name == "",
    age == null || age == "",
    blood_type == null || blood_type == "",
    email == null || phone == "",
    address == null || address == "",
    gender == null || gender == "")
  ) {
    alert("Please Fill All Required Field");
    return false;
  }

    if (isNaN(age)) {
    alert("Age input is not correct");
    return false;
  }

  if (isNaN(phone)) {
    alert("Phone number input is not correct");
    return false;
  }

  if (age < 16) {
    alert("Sorry, you must be atleast 16 to donate blood");
    return false;
  }
}

// 
// console.log(validateForm());

// Check if btn is clicked
btn.addEventListener("click", (e) => {
  validateForm();
});
