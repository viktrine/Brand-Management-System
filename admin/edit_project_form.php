<div class="row-fluid">
  <!-- block -->
  <?php
  $query = mysql_query("select * from projects where id = '$get_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
  ?>

  <div class="block">
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">EDIT PROJECT</div>
    </div>
    <div class="block-content collapse in">
      <div class="span12">
        <form method="post">
          <div class="control-group">
            <div class="controls">
              <input class="input focused" name="project_name" value="<?php echo $row['project_name']; ?>" id="focusedInput" type="text" placeholder = "Project Name" required>
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <input type="text" class="input-block-level datepicker" value="<?php echo $row['start_date']; ?>" name="date_start" id="date01" placeholder="Expected Start Date" required/>
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <input type="text" class="input-block-level datepicker" value="<?php echo $row['end_date']; ?>" name="date_end" id="date01" placeholder="Expected End Date" required/>
            </div>
          </div>

          <div class="controls"> 
            <select name="assing" class="" required>
              <option><?php echo $row['assign_to']; ?></option>
              <?php
              $cys_query = mysql_query("select * from tl_users order by email");
              while($cys_row = mysql_fetch_array($cys_query)){

                ?>
                <option value="<?php echo $cys_row['email']; ?>"><?php echo $cys_row['email']; ?></option>
              <?php } ?>
            </select>
          </div>


          <div class="control-group">
            <div class="controls">
              <button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /block -->
</div>

<?php
if (isset($_POST['save'])){
  $project_name = $_POST['project_name'];
  $date_start = $_POST['date_start'];
  $date_end = $_POST['date_end'];
  $assing = $_POST['assing'];

  mysql_query("update projects set project_name = '$project_name', start_date = '$date_start', end_date = '$date_end', assign_to = '$assing' where id = '$get_id' ")or die(mysql_error());

  ?>
  <script>
    window.location = "projects_page.php";
  </script>

  <?php 
}
?>