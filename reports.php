<?php
include_once("includes/_connect.php");
include_once("includes/header.php");
include_once("includes/nav.php");
include_once("includes/utils.php");
?>

<h2 class="mx-md mt-5">Week 1 Reactor Schedules</h2>

<div class="row mt-2">
    <div class="col"><button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#Mon" aria-expanded="true" aria-controls="Reactor 1" onclick="$(this).toggleClass('btn-outline-primary');$(this).toggleClass('btn-primary');">Reactor 1</button></div>
    <div class="col"><button type="button" class="btn btn-outline-primary btn-block" data-toggle="collapse" data-target="#Tues" aria-expanded="false" aria-controls="Reactor 2" onclick="$(this).toggleClass('btn-outline-primary');$(this).toggleClass('btn-primary');">Reactor 2</button></div> 
    <div class="col"><button type="button" class="btn btn-outline-primary btn-block" data-toggle="collapse" data-target="#Wed" aria-expanded="false" aria-controls="Reactor 3" onclick="$(this).toggleClass('btn-outline-primary');$(this).toggleClass('btn-primary');">Reactor 3</button></div> 
</div>

<div class="collapse multi-collapse mt-2 show" id="Mon">
  <div class="card card-body">
      <h5 class="card-title">Reactor 1</h5> 
      <!-- DISPLAY WORK SCHEDULE FOR MONDAY -->
      <?php showReactorTable(1, 1, $connect); ?>
  </div>
</div>
<div class="collapse multi-collapse mt-2" id="Tues">
  <div class="card card-body">
      <h5 class="card-title">Reactor 2</h5>
      <!-- DISPLAY WORK SCHEDULE FOR TUESDAY -->
      <?php showReactorTable(1, 2, $connect); ?>
  </div>
</div>
<div class="collapse multi-collapse mt-2" id="Wed">
  <div class="card card-body">
      <h5 class="card-title">Reactor 3</h5>
      <!-- DISPLAY WORK SCHEDULE FOR WEDNESDAY -->
      <?php showReactorTable(1, 3, $connect); ?>
  </div>
</div>

<h2 class="mx-md mt-5">Staffs Schedule</h2>

<?php staffButtons($connect); ?>
<?php staffTimetable(1, $connect); ?>

<?php
include_once("includes/footer.php"); 
?>   