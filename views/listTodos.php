<!-- views/listTodos.php -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>

  <!-- font poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- feather icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!--
  style.CSS
  Berfungsi untuk membuat tampilan lebih menarik
  -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!--
  script.js
  Berfungsi untuk mengirimkan data ke server
  serta menampilkan alert jika data berhasil di input
  -->
  <script src="assets/js/script.js"></script>

</head>

<body>
  <div class="form-todo">
    <h1>Todo List</h1>
    <div class="form">
      <form method="POST" action="?action=add">
        <input type="text" name="task" placeholder="New Task" class="form-input" >
        <button type="submit" class="btn-input">Add</button>
      </form>
    </div>
    <div class="todo-lists">
      <?php foreach ($todos as $todo): ?>
        <ul>
          <li>
          <?php
          // Tampilkan deskripsi Todo (ubah: tambahkan ikon dan class untuk todo yang selesai)
            $isCompleted = isset($todo['is_completed']) && $todo['is_completed'];
            $taskText = htmlspecialchars($todo['task'], ENT_QUOTES, 'UTF-8');
            echo '<div class="task' . ($isCompleted ? ' completed' : '') . '">' . $taskText;
            if ($isCompleted) {
              echo ' <i data-feather="check" class="check"></i>';
            }
            echo '</div>';
          // Jika Todo belum selesai, tampilkan link untuk menandai sebagai selesai
          echo '<div class="btn-todo">';
            if (!$isCompleted) {
              echo '<a href="?action=complete&id=' . $todo['id'] . '" class="btn-completed">Mark Complete</a>';
            }
            // Tampilkan link untuk menghapus Todo
            echo '<a href="?action=delete&id=' . $todo['id'] . '" class="btn-delete">Delete</a>';
          echo '</div>';
          ?>
          </li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
</body>

</html>