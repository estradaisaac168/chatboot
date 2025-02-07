<?php require_once dirname(__DIR__) . '/layout/header.php'; ?>


<div class="container">

  <div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">

      <form action="" class="form my-5 p-3 border border-light rounded">

        <fieldset class="card p-4">
          <legend><?php echo $data['page_title'] ?? "" ?></legend>

          <div class="row g-3 mt-1">

            <div class="col-12">
              <select id="selectQuestion" class="form-select  d-none" aria-label="Default select example">
                <option value="" disabled selected>Seleccione una Respuesta</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-12">
              <input id="txtQuestion" type="text" class="form-control" placeholder="Ingrese una Pregunta"
                aria-label="First name">
            </div>

            <div class="col-12">

              <div class="row">
                <div class="col d-flex justify-content-start">
                  <div class="form-check me-5">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioQuestionUno"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Inicial
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioQuestionDos">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Secuencia
                    </label>
                  </div>
                </div>

                <div class="col-auto">
                  <button id="btnFiltrar" type="button" class="btn btn-primary d-none">Filtrar respuestas</button>
                </div>
              </div>

            </div>

            <div class="col-12">
              <button id="btnSaveQuestion" type="submit" class="btn btn-primary mb-3" disabled>Guardar pregunta</button>
            </div>
          </div>

        </fieldset>

      </form>

    </div>
  </div>

</div>

<?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>