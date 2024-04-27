const $ = (element) => document.querySelector(element);

function text() {
  const { value } = $("#input-text");

  const regEx = /^([a-zA-Z\s])+$/;

  if (!value) return;

  if (!regEx.test(value)) {
    alert("Solo se aceptan letras");
    $("#input-text").value = "";
  }
}

function correo() {
  const { value } = $("#input-email");

  const regEx = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (!value) return;

  if (!regEx.test(value)) {
    alert(`El correo ${value} no es válido`);
    $("#input-email").value = "";
  }
}

function password() {
  // 8 digits, 1 Upper, 1 number and 1 symbol (special character)
  const { value } = $("#input-password");

  const specialCharacters = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

  const regEx =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;

  if (!value) return;

  if (!regEx.test(value)) {
    alert(`La contraseña ${value} no es válida`);
    $("#input-password").value = "";
  }
}

function url() {
  const { value } = $("#input-url");

  const regEx = /^(http|https):\/\/[^ "]+$/;

  if (!value) return;

  if (!regEx.test(value)) {
    alert(`La URL ${value} no es válida`);
    $("#input-url").value = "";
  }
}

function phoneNumber() {
  const { value } = $("#input-phone-number");

  const regEx = /^\d{10}$/;

  if (!value) return;

  if (!regEx.test(value)) {
    alert("El número de teléfono no es válido");
    $("#input-phone-number").value = "";
  }
}

function intNumber() {
  const { value } = $("#input-int-number");

  const regEx = /^-?[0-9]+$/;

  if (!value) return;

  if (!regEx.test(value)) {
    alert("Solo se aceptan números enteros");
    $("#input-int-number").value = "";
  }
}

function floatNumber() {
  const { value } = $("#input-float-number");
  const regEx = /^-?[0-9]+\.[0-9]+$/;

  if (!value) return;

  if (!regEx.test(value)) {
    alert("Solo se aceptan números decimales");
    $("#input-float-number").value = "";
  }
}

function postalCode() {
  const { value } = $("#input-postal-code");

  const regEx = /^[0-9]{6}$/;

  if (!value) return;

  if (!regEx.test(value)) {
    alert("El código postal no es válido");
    $("#input-postal-code").value = "";
  }
}

const myObject = {
  name: "Victor Manuel Ram[irez",
  age: 21,
};

const { name } = myObject;
