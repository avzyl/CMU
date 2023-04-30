<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `collegeschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->college_school.'." value="'.$row->college_school.'">'.$row->college_school.'</option>';
                  echo 'success';
                }
        }

        public function role(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `tbl_roles`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->role.'." value="'.$row->role.'">'.$row->role.'</option>';
                  echo 'success';
                }
        }

        public function getdpSRA(){
            $user = new user();
            return $user->data()->dp;
        }

        public function getMmSRA(){
            $user = new user();
             return $user->data()->mm;
        }

        public function getnames(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='mt-3 ml-5 rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark justify-content-center'>";
                echo listPic();
                echo $data['role']." ";
                echo $data['name'];
                echo "</div>";
            }
        }

        public function getList(){
          $con = $this->con();
          $sql = "SELECT * FROM `tbl_accounts`";
          $data = $con->prepare($sql);
          $data->execute();
          $result = $data->fetchAll(PDO::FETCH_ASSOC);
          echo "<table class='table'>
          <thead>
          <thead>
          <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Colleges</th>
          </tr>
          </thead>
          <tbody>
          </table>";
          }

          public function viewT(){
                $con = $this->con();
                $sql ="SELECT * FROM `tbl_accounts` WHERE `role` = 'teacher'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll(PDO::FETCH_ASSOC);
                echo "<h3 class='mb-4 mt-5'><b>Completed Task</b></h3>";
                echo "<table class='table table-striped table-bordered table-sm'>";
                echo "<thead>
                        <tr>
                          <th>Task Item</th>
                          <th>Date Completed</th>
                        </tr>
                      </thead><tbody>";
                foreach ($result as $data) {
                  echo "<tr>";
                  echo "<td>$data[name]</td>";
                  // echo "<td>$data[date_completed]</td>";
                  echo "</tr>";
                }
                echo "</tbody></table>";
              }
}
