<div class="container">


  <div class="row">
    <div class="col">

      <form action="" class="form my-5 p-3 border border-light rounded">

        <fieldset class="card p-4">
          <legend><?php echo $data['page_title'] ?? "" ?></legend>

          <div class="row g-3 mt-1">

            <div class="col-12 col-lg-6 order-1 order-lg-0">
              <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione una Pregunta</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-12 col-lg-6 order-0 order-lg-1">
              <div class="row">
                <div class="col d-flex justify-content-start">
                  <div class="form-check me-5">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Inicial
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Secuencia
                    </label>
                  </div>
                </div>

                <div class="col-auto">
                  <button class="btn btn-primary">Filtrar</button>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6 order-3 order-lg-2">
              <input type="text" class="form-control" placeholder="Ingrese una Respuesta" aria-label="First name">
            </div>

            <div class="col-12 col-lg-6 order-2 order-lg-3">
              <div class="row">
                <div class="col d-flex justify-content-start">
                  <div class="form-check me-5">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Inicial
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Secuencia
                    </label>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Documento
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6 order-4 order-lg-4">
              <input type="text" class="form-control" placeholder="Ingrese la ruta del archivo"
                aria-label="First name">
            </div>

            <div class="col-12 order-5 order-lg-5">
              <button type="submit" class="btn btn-primary">Confirm identity</button>
            </div>
          </div>


        </fieldset>

      </form>

    </div>
  </div>

</div>

<?php

$script .= '<script src="./js/question.js"></script>';

?>