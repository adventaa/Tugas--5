<?php
require 'add.php';
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
  <style>
    body{
      background-color: cadetblue;
    }
    input[type=checkbox]:checked + label {
  color:red;
  text-decoration: line-through;
}
    .cbox4 {
  font-size: 5em;
  color:red;
  text-decoration: line-through;
}
    </style>
<head>
	  <title>TODO LIST</title>
    <link rel="stylesheet" type="text/css" href="style_todo.css">
    <script src="https://kit.fontawesome.com/03adc290fd.js" crossorigin="anonymous"></script>
</head>

<body>
	  <div class="heading">
		  <h2 style="font-style: 'Hervetica';">ToDo List</h2>
	  </div>

	  <form method="post" action="todo.php" class="input_form">
      <?php if (isset($errors)) { ?>
	      <p><?php echo $errors; ?></p>
      <?php } ?>
		    <input type="text" name="isi" class="task_input">
		    <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	  </form>
        <table>
          <thead>
            <tr>
              <th style="text-align: left;">Nomor</th>
              <th style="text-align: justify;">Tasks</th>
              <th style="text-align: right;">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php 
            // select all tasks if page is visited or refreshed
            $list = mysqli_query($conn, "SELECT * FROM list");

            $i = 1; while ($row = mysqli_fetch_array($list)) { ?>
              <tr>
                <td> <?php echo $i; ?> </td>
                <td class="task"> <input type="checkbox" class="cbox4" value="fourth_checkbox"> <label for="cbox4"> <?php echo $row['isi']; ?> </label></td>
                <td class="delete"> 
                  <a href="todo.php?del_isi=<?php echo $row['nomor'] ?>"><i class="fa-solid fa-trash-can"></i></a> 
                </td>
              </tr>
            <?php $i++; } ?>	
          </tbody>
    </table>
</body>
</html>
  
  

    
        <!--  
        <div class="container">
            <h1 class="top-heading">TODO List</h1>
            <form action="" method="post">
                <div class="input-container">
                    <input type="text" name="inputBox" id="inputBox">
                    <button href = "add.php" type="submit" id="add">ADD</button>
                </div>
                <ul class="list">
                    <li class="item">
                        <p>Item 1</p>
                        <div class="icon-container">
                            <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check"></i></button>
                            <button type="submit" name="" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </li>
                    <li class="item">
                        <p>Item 1</p>
                        <div class="icon-container">
                            <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check"></i></button>
                            <button type="submit" name="" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </li>
                </ul>
                
                <hr>
                <ul class="list">
                    <li class="item fade">
                        <p class="delete-text"><span>Item 1</span></p>
                        <div class="icon-container">
                            <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check" hidden></i></button>
                            <button type="submit" name="" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </li>
                </ul>

            </form>
        </div>
        -->
   