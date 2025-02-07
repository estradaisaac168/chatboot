(function () {

  getQuestions();

  // const alertForm = document.querySelector('#alertForm');
  const selectQuestion = document.querySelector('#selectQuestion');
  const radioQuestionUno = document.querySelector('#radioQuestionUno');
  const radioQuestionDos = document.querySelector('#radioQuestionDos');
  //const btnFiltrar = document.querySelector('#btnFiltrar');
  const txtQuestion = document.querySelector('#txtQuestion');
  const btnSaveQuestion = document.querySelector('#btnSaveQuestion');


  // Radio Buttons
  radioQuestionUno.addEventListener('change', () => {
    selectQuestion.classList.toggle('d-none', true);
    selectQuestion.classList.toggle('d-block', false);

    // btnFiltrar.classList.toggle('d-none', true);
    // btnFiltrar.classList.toggle('d-block', false);
  });

  radioQuestionDos.addEventListener('change', () => {
    selectQuestion.classList.toggle('d-none', false);
    selectQuestion.classList.toggle('d-block', true);

    console.log("Cargar la data....");

    // btnFiltrar.classList.toggle('d-none', false);
    // btnFiltrar.classList.toggle('d-block', true);
  });


  // Input

  txtQuestion.addEventListener("input", () => {

    if (txtQuestion.value.trim() !== "") {
      btnSaveQuestion.disabled = false;
    } else {
      btnSaveQuestion.disabled = true;
    }
  });


  // Filtrar

  // btnFiltrar.addEventListener('click', (e) => {
  //     e.preventDefault();

  //     if (radioQuestionDos.checked) {
  //         console.log("Filltrar data");
  //     }
  // });

  btnSaveQuestion.addEventListener('click', (e) => {
    e.preventDefault();

    // alertify.set('notifier', 'position', 'top-right');


    if (radioQuestionDos.checked) {

      if (selectQuestion.value === "" || selectQuestion.value === "Seleccione una Respuesta") {
        console.log("Por favor, selecciona una opción válida.");
        // alertify.error('Algo salio mal!');

      }
    }


    createQuestion();

    console.log("Respuesta seleccionada: ", selectQuestion.value);
    console.log("Texto escrito: ", txtQuestion.value);

    // alertify.success('Pregunta guardada con exito!');
  });


  async function getQuestions() {

    try {

      const url = 'http://localhost/projects/chatboot/question/getQuestions';

      const response = await fetch(url);
      const data = await response.json();

      console.log(data);

    } catch (error) {
      console.error(error);

    }

  }




  async function createQuestion(question) {

    const dataQuestion = new FormData();
    dataQuestion.append('question', question);
    dataQuestion.append('option', selectQuestion.value);

    try {

      const url = 'http://localhost/projects/chatboot/question/create';

      const response = await fetch(url, {
        method: 'POST',
        body: dataQuestion
      });

      const data = await response.json();

    } catch (error) {
      console.error(error);

    }

  }

})();