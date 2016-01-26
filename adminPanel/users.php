<?php
include '../db.php';

 ?>
<table class="userTable responsive-table centered highlight">
        <thead>
          <tr>
              <th data-field="id">No.</th>
              <th data-field="name">Ad</th>
              <th data-field="surname">Soyad</th>
              <th data-field="point">Yığdığı Bal</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $connection = mysqli_select_db($db_connection,$dbname);
          $query=mysqli_query($db_connection,"SELECT * FROM student");
          while($row = mysqli_fetch_assoc($query)){
            echo '<tr>
                <td class="userId" >'.$row['id'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['surname'].'</td>
                <td>'.$row['result'].'</td>
              </tr>';
          }
           ?>


        </tbody>
      </table>
