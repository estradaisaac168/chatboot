<?php

namespace Model;

use Core\Mysql;

class QuestionModel extends Mysql
{
  private $question_text;
  private $parent_id;
  private $is_root;

  public function __construct()
  {
    parent::__construct();
  }


  public function getQuestions()
  {

    $sql = "SELECT q.question_id, q.question_text, q.parent_id, q.is_root
            FROM questions q;";

    $request = $this->select_all($sql);

    return $request;
  }


  public function insertQuestion(string $question_text, int $parent_id, int $is_root)
  {

    $this->question_text = $question_text;
    $this->parent_id = $parent_id;
    $this->is_root = $is_root;

    $return = 0;

    $sql = "SELECT * 
            FROM questions 
            WHERE question_text = '{$this->question_text}'";


    $request = $this->select_all($sql);

    if (empty($request)) {

      $query_insert  = "INSERT INTO questions (question_text,parent_id,is_root) VALUES(?,?,?)";

      $arrData = array($this->question_text, $this->parent_id, $this->is_root);

      $request_insert = $this->insert($query_insert, $arrData);

      $return = $request_insert;
    } else {

      $return = "exist";
    }
    return $return;
  }
}
