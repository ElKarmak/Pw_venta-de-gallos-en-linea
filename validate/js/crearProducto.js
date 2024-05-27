// Crea una función para seleccionar elementos del DOM
const $ = (element) => document.querySelector(element);

// Función para eliminar mensajes de error previos
const clearErrors = () => {
  // Encuentra todos los elementos con clase 'error-message'
  const errorMessages = document.querySelectorAll(".error-message");
  // Elimina cada elemento encontrado
  errorMessages.forEach((msg) => msg.remove());
};

// Función para validar campos del formulario
const validation = () => {
  // Limpia errores previos
  clearErrors();

  // Define los campos del formulario y sus reglas de validación
  const fields = {
    // Campo de texto solo con letras y espacios
    text: {
      element: $("#input-text"), // Elemento HTML para el campo de texto
      regEx: /^([a-zA-Z\s])+$/, // Expresión regular para validar
      message: "Solo se aceptan letras", // Mensaje de error
    },
    textArea: {
      element: $("#input-description"), // Elemento HTML para el campo de texto
      regEx: /^[a-zA-Z\s.,]+$/, // Expresión regular para validar
      message: "Solo se aceptan letras", // Mensaje de error
    },
    // Campo para números enteros
    int: {
      element: $("#input-number"), // Elemento para el número entero
      regEx: /^[0-9]+$/, // Solo acepta dígitos
      message: "Solo se aceptan números", // Mensaje de error
    },

    numberPositive: {
      element: $("#input-number-positive"), // Elemento para el número entero
      regEx: /^(0*[1-9]\d*(\.\d+)?|0*\.\d*[1-9]\d*)$/, // Solo acepta dígitos
      message: "Solo se aceptan números positivos", // Mensaje de error
      isPositive: true,

    },

    fileChosser: {
      element: $("#input-formFile"),
      regEx: /./,
      message: "Debe seleccionar un archivo",
      isFile: true,
    },
  };

  let isValid = true; // Variable para indicar si el formulario es válido

  // Recorre cada campo definido para validar
  for (const field in fields) {
    const { element, regEx, message } = fields[field]; // Extrae información del campo

    if (!element.value) {
      // Si el campo está vacío
      // Crea un mensaje de error para campos vacíos
      const error = document.createElement("p");
      error.style.color = "red"; // Cambia el color del texto a rojo
      error.style.fontSize = "12px"; // Establece el tamaño de la fuente
      error.textContent = "Este campo no puede estar vacío"; // Mensaje para campos vacíos
      error.classList.add("error-message"); // Añade clase para identificar errores
      error.classList.add("error-animation");
      element.insertAdjacentElement("beforebegin", error); // Añade el mensaje de error después del campo
      isValid = false; // Indica que el formulario no es válido
      continue; // Pasa al siguiente campo sin más validación
    }

    if (!regEx.test(element.value)) {
      // Si el valor no cumple con la RegEx
      if (
        !element.nextElementSibling ||
        !element.nextElementSibling.classList.contains("error-message")
      ) {
        // Crea mensaje de error si no existe ya
        const error = document.createElement("p");
        error.style.color = "blue"; // Cambia el color del texto a rojo
        error.style.fontSize = "12px"; // Establece el tamaño de la fuente
        error.textContent = message; // Texto de error según el tipo de campo
        error.classList.add("error-message"); // Añade clase para errores
        error.classList.add("error-message"); // Añade clase para errores

        element.insertAdjacentElement("beforebegin", error); // Añade después del campo
      }
      isValid = false; // Indica que el formulario no es válido
    }
  }

  return isValid; // Devuelve si el formulario es válido o no
};

// Escucha el evento de clic en el botón de envío
$("#btn-submit").addEventListener("click", (event) => {
  event.preventDefault(); // Prevenir el envío del formulario
  const formIsValid = validation(); // Llama a la función de validación
  if (formIsValid) {
    // Si el formulario es válido
    console.log("Formulario válido"); // Muestra mensaje de validación por consola
    $("#form_create").submit();
    // Puedes realizar el envío del formulario o acciones adicionales
  } else {
    console.log("Formulario inválido"); // Muestra mensaje si el formulario es inválido por consola
  }
});
