<?php
// models/Todo.php
class Todo
{
  public $id;
  public $task;
  public $is_complated;
  public $created_at;
  public $updated_at;
  /**
   * Konstruktor untuk Todo
   * @param int $id ID dari todo
   * @param string $task Tugas dari todo
   * @param bool $is_complated Apakah todo diselesaikan
   * @param string $created_at Timestamp pembuatan todo
   * @param string $updated_at Timestamp pembaharuan todo
   */
  public function __construct($id, $task, $is_complated, $created_at, $updated_at)
  {
    $this->id = $id;
    $this->task = $task;
    $this->is_complated = $is_complated;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
  }
}
