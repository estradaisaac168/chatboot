(function () {

  const btnAddInputQuestion = document.querySelector('#btn-add-input-question');
  const btnAddInputOption = document.querySelector('#btn-add-input-option');
  const btnRemoveInputOption = document.querySelector('#btn-remove-input');


  btnAddInputQuestion.addEventListener('click', function () {
    let input = document.createElement("input");
    input.type = "text";
    input.classList.add("form-control");
    input.placeholder = "Escribe la pregunta";
    input.id = "miInput";

    // Agregar un evento para detectar cambios
    input.addEventListener("input", function () {
      console.log("Valor ingresado:", input.value);
    });

    let groupForm = document.createElement("DIV");
    groupForm.classList.add("form-group");
    groupForm.classList.add("mb-3");
    groupForm.classList.add("pe-3");
    groupForm.appendChild(input);

    // Agregar el input al contenedor
    document.querySelector("#contenedor").appendChild(groupForm);

  });


  btnAddInputOption.addEventListener('click', function () {
    let input = document.createElement("input");
    input.type = "text";
    input.classList.add("form-control");
    input.placeholder = "Escribe la opción";
    input.id = "miInput";

    // Agregar un evento para detectar cambios
    input.addEventListener("input", function () {
      console.log("Valor ingresado:", input.value);
    });

    let groupForm = document.createElement("DIV");
    groupForm.classList.add("form-group");
    groupForm.classList.add("mb-3");
    groupForm.classList.add("ps-3");
    groupForm.appendChild(input);

    // Agregar el input al contenedor
    document.querySelector("#contenedor").appendChild(groupForm);

  });


  btnRemoveInputOption.addEventListener('click', function () {

    let contenedor = document.querySelector("#contenedor");
    if (contenedor.lastChild) {
      contenedor.removeChild(contenedor.lastChild);
    }

  });







// })();