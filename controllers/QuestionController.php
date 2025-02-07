<?php

namespace Controllers;


use Model\QuestionModel;

use Core\Controllers;


class QuestionController extends Controllers
{
  protected $views;
  protected $model;

  public function __construct()
  {
    parent::__construct();
    $this->model = new QuestionModel();
  }


  public function index()
  {



    $data['page_id'] = 2;
    $data['page_tag'] = "Question";
    $data['page_title'] = "Agregar Preguntas";
    $data['page_name'] = "question";
    $data['page_functions_js'] = "question.js";

    $this->views->getView($this, "index", $data);
  }

  public function getquestions()
  {

    $arrResponse = $this->model->getQuestions();
    echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

    // die();
  }

  public function create()
  {
    // $question_text = $_POST['question_text'];
    // $parent_id = $_POST['parent_id'];
    // $is_root = $_POST['is_root'];

    // $arrResponse = $this->model->insertQuestion($question_text, $parent_id, $is_root);

    echo json_encode($_POST, JSON_UNESCAPED_UNICODE);
    die();
  }
}
