const username = document.getElementById("admin_username");
const password = document.getElementById("admin_password");
const errorOr = document.getElementById("ErrorOr");

function admin_login() {
  // Prevent the default form submission behavior
  // event.preventDefault();

  if (username.value !== "" && password.value !== "") {
    const connection = new XMLHttpRequest();
    const formData = new FormData();
    formData.append("username", username.value);
    formData.append("password", password.value);

    connection.onreadystatechange = function () {
      if (connection.readyState == 4 && connection.status == 200) {
        const jsonResponse = connection.responseText;

        const response = JSON.parse(jsonResponse);
        if (response == "Success") {
          window.location.href = "./dashboard.html";
        } else {
          errorOr.textContent = "Invalid Username or Password";
          errorOr.className = "admin_login_Error";
        }
      }
    };

    // Use "https" in the URL
    connection.open(
      "POST",
      "http://localhost/student_management_system/admin/api/login.php",
      true
    );
    connection.send(formData);
  } else {
    errorOr.textContent = "Type the correct username and password";
  }
}
