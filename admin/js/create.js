function create_admin() {
  // inputboxes values
  const Administrator_ID = document.getElementById("Administrator_ID").value;
  const Admin_Name = document.getElementById("name").value;
  const Name_With_Initials = document.getElementById("nameWithInitials").value;
  const DOB = document.getElementById("dob").value;
  const admin_mobile = document.getElementById("mobile").value;
  const joined_date = document.getElementById("joined_date").value;
  const username = document.getElementById("username").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const Repeat_password = document.getElementById("repeatPassword").value;
  const address = document.getElementById("address").value;
  const city = document.getElementById("city").value;
  const zipCode = document.getElementById("zipCode").value;

// Regular expressions for validation
const AdminIDRegex = /^[\/$a-zA-Z0-9]+$/;
const AdminNameRegex = /^[a-zA-Z]+$/;
const mobileRegex = /^[0]{1}[7]{1}[01245678]{1}[0-9]{7}$/;
const usernameRegex = /^[a-zA-Z0-9!@#$%^*-_+=/.,:;|\\` ~]{3,20}$/;
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
const zipCodeRegex = /^[0-9]+$/;



// Validate email using regex
if (!emailRegex.test(email)) {
    alert("Invalid email address");
} else {
    // Validate password using regex
    if (!passwordRegex.test(password)) {
        alert("Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, and one digit.");
    } else {
        // Check if repeat password matches the password
        if (password !== Repeat_password) {
            alert("Passwords do not match");
        } else {
            // All input values are valid
            // Proceed with further processing or form submission
        }
    }
}
  
// getting gender details
const gender = document.getElementsByName("gender");
let genderSelected = false;

for (let i = 0; i < gender.length; i++) {
  if (gender[i].checked) {
    genderSelected = true;
    alert(gender[i].value);
    break; // Exit the loop if a gender option is selected
  }
}

if (!genderSelected) {
  alert("Please select a gender."); // Show an error message if no gender option is selected
}

//data fetching start

const apiUrl = 'https://localhost/student_management_system/admin/api/create_admin.php';
const requestBody = {
Administrator_ID : Administrator_ID,
Admin_Name : Admin_Name,
gender : gender,
DOB : DOB,
admin_mobile : admin_mobile,
joined_date : joined_date,
department : department,
experience : experience,
username : username,
email : email,
password : password,
address : address,
 city: city,
 zipCode: zipCode,
 country: country,
};

const headers = new Headers();
headers.append('Content-Type', 'application/json');
// You can add more custom headers if needed
// headers.append('Authorization', 'Bearer <your_token>');

fetch(apiUrl, {
  method: 'POST', // You can use 'GET', 'POST', 'PUT', 'DELETE', etc., depending on your API endpoint
  headers: headers,
  body: JSON.stringify(requestBody)
})
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json();
})
.then(data => {
  // console.log('Data received:', data);
  if(data == "success"){
   alert("done");
  }
})
.catch(error => {
  console.error('There has been a problem with your fetch operation:', error);
});

}
