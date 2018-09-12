<div class="row-fluid">
  <!-- block -->
  <div class="block">
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">Add PROJECT</div>
    </div>
    <div class="block-content collapse in">
      <div class="span12">
        <form method="post">

          <div class="control-group">
            <div class="controls">
              <input class="input focused" name="project_name" id="focusedInput" type="text" placeholder = "Project Name" required>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <input type="text" class="datepicker" name="date_start" id="date01" placeholder="Expected Start Date" required/>
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <input type="text" class="datepicker" name="date_end" id="date01" placeholder="Expected End Date" required/>
            </div>
          </div>

          <div class="controls"> 
            <select name="assign" class="" required>
              <option disabled selected>Assign To</option>
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
  $assign = $_POST['assign'];

  $query = mysql_query("select * from tl_users where email = '$email' and password = '$password'")or die(mysql_error());
  $count = mysql_num_rows($query);

  if ($count > 0){ ?>
    <script>
      alert('Data Already Exist');
    </script>
    <?php
  }else{
    mysql_query("insert into projects(project_name, start_date, end_date, assign_to) values('$project_name','$date_start','$date_end','$assign')")or die(mysql_error());
    ?>
    <script>
      window.location = "projects_page.php";
    </script>
    <?php
  }
}
?>