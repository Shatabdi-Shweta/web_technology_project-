error = [];

function isLetter(char) {
  return char.toLowerCase() != char.toUpperCase();
}

function nameCheck() {
  let validation = document.getElementById("validation");
  let name = document.getElementById("name").value;

  if (name === "") {
    validation.innerHTML = "Error: Empty Name!";
    error.push("Error: Empty Name!");
  } else if (name.length < 2) {
    validation.innerHTML = "Error: Less than two words!";
    error.push("Error: Less than two words!");
  } else if (!isLetter(name[0])) {
    validation.innerHTML = "Error: Must start with a letter!";
    error.push("Error: Must start with a letter!");
  } else {
    validation.innerHTML = name;
  }
}

function emailCheck() {
  let validation = document.getElementById("validation");
  let email = document.getElementById("email").value;

  if (email === "") {
    validation.innerHTML = "Error: Empty email!";
    error.push("Error: Empty email!");
  } else if (email.indexOf("@") === -1) {
    validation.innerHTML = "Error: Invalid email!";
    error.push("Error: Invalid email!");
  } else {
    validation.innerHTML = email;
  }
}

function genderCheck() {
  let validation = document.getElementById("validation");
  let gender = document.querySelector("input[name='gender']:checked");
  if (!gender) {
    validation.innerHTML = "Error: No gender selected!";
    error.push("Error: No gender selected!");
  } else {
    validation.innerHTML = gender.value;
  }
}

function dobCheck() {
  let validation = document.getElementById("validation");
  let dob = document.querySelector("#dob");

  if (dob.value.value === undefined) {
    validation.innerHTML = "Error: No DOB selected!";
    error.push("Error: No DOB selected!");
  } else {
    console.log(dob.value.value);
    validation.innerHTML = "";
  }
}

function degreeCheck() {
  let validation = document.getElementById("validation");
  let degree = [];
  let flag = false;
  let checkboxes = document.getElementsByName("degree[]");

  for (let i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      flag = true;
      degree.push(checkboxes[i].value);
    }
    validation.innerHTML = degree;
  }

  if (flag === false) {
    validation.innerHTML = "Error: No degree selected!";
    error.push("Error: No degree selected!");
  }
}

function bloodGroupCheck() {
  let validation = document.getElementById("validation");
  let bloodGroup = document.querySelector("#bloodGroup").value;

  if (bloodGroup === "") {
    validation.innerHTML = "Error: No blood group selected!";
    error.push("Error: No blood group selected!");
  } else {
    validation.innerHTML = bloodGroup;
  }
}

function proPicCheck() {
  let validation = document.getElementById("validation");
  let proPic = document.getElementById("profile-picture").value;

  if (proPic === "") {
    validation.innerHTML = "Error: Please upload a profile picture!";
    error.push("Error: Please upload a profile picture!");
  } else {
    validation.innerHTML = "Success!";
  }
}

function printArray() {
  let outputString = "";

  for (let i = 0; i < error.length; i++) {
    outputString += `<li>${error[i]}</li>`;
  }

  let validation = document.getElementById("validation");

  validation.innerHTML = outputString;
}

function personProfileCheck() {
  nameCheck();
  emailCheck();
  genderCheck();
  dobCheck();
  degreeCheck();
  bloodGroupCheck();
  proPicCheck();
  printArray();
}
