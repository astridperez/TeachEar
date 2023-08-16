// Función para mostrar el formulario de registro y ocultar el de inicio de sesión
function showRegisterForm() {
  document.getElementById("login-form").style.display = "none";
  document.getElementById("frmRegistro").style.display = "block";
  document.getElementById("HIn").style.display = "none";
  document.getElementById("HRe").style.display = "block";
}

// Función para mostrar el formulario de inicio de sesión y ocultar el de registro
function showLoginForm() {
  document.getElementById("login-form").style.display = "block";
  document.getElementById("frmRegistro").style.display = "none";
  document.getElementById("HIn").style.display = "block";
  document.getElementById("HRe").style.display = "none";
}