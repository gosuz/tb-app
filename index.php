<?php
// Set the variables that repeat
$setsReps70_80 = "3 sets x 5 reps";
$setsReps85_90 = "3 sets x 3 reps";
$setsReps95 = "3 sets x 1 rep";

$exerciseNameArray = $_POST['exerciseName'];
$oneRmArray = $_POST['oneRm'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){ // checking to see if form has been submitted
  
  $emptyCount1 = 0;
  foreach ($exerciseNameArray as $exerciseCheck) {
    if ($exerciseCheck === ''){
      $emptyCount1 = $emptyCount1+1;
    }
  }

  $emptyCount2 = 0;
  foreach ($oneRmArray as $oneRmCheck) {
    if ($oneRmCheck === ''){
      $emptyCount2 = $emptyCount2+1;
    }
  }

  if (($emptyCount1 < 3)  && ($emptyCount2 < 3)){
    foreach (array_combine($exerciseNameArray, $oneRmArray) as $exercise => $oneRm) {
      if (($oneRm ==='') || ($exercise ==='')){
        continue;
      }

        for ($percentage=70, $i=1; $percentage<=95, $i<=6; $percentage+=5, $i++) {
          if ($percentage <= 80){ //70~80%
            echo "Week $i<br>$percentage%<br>";
            // Percentage: 70%
            $weightToUse = (($percentage/100) * (intval($oneRm)));
            echo "$exercise: $weightToUse kg<br>";
            // BP: 14kg 
            echo "$setsReps70_80<br><br>";
            // 
          }
          
          if (($percentage>80) && ($percentage<=90)){ //85~90%
            echo "Week $i<br>$percentage%<br>";
            // Percentage: 70%
            $weightToUse = (($percentage/100) * (intval($oneRm)));
            echo "$exercise: $weightToUse kg<br>";
            // BP: 14kg 
            echo "$setsReps85_90<br><br>";

          } if($percentage>90) { // 95%
            echo "Week $i<br>$percentage%<br>";
            // Percentage: 70%
            $weightToUse = (($percentage/100) * (intval($oneRm)));
            echo "$exercise: $weightToUse kg<br>";
            // BP: 14kg 
            echo "$setsReps95<br><br>";
          }
        }
      }
    } else{
      echo '<p class = "error">Error, name at least one exercise and one rep max </p>';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to the TB workout generator!!</title>
    <link rel="stylesheet" type="text/css" href="style.php"/>
  </head>
  <body>
  <div class="container">
    <h1>Welcome to the TB workout generator app!</h1>
    <form method="post">
      <!-- Exercise 1 input -->
      <p>
      <label for="exerciseName">Enter the name of your selected exercise: </label>
      <input type = "text" id="exerciseName" name="exerciseName[]" placeholder="E.g. Bench Press" value="">
      </p>
    <!-- Whats going to be inlcuded in the value for the input type of text-->
      <label for = "oneRm">Enter your one rep max (in kg): </label>
      <input type = "number" id = "oneRm" name ="oneRm[]" value="oneRm">
      </p>

      <!-- Exercise 2 input -->
      <p>
      <label for="exerciseName">Enter the name of your selected exercise: </label>
      <input type = "text" id="exerciseName" name="exerciseName[]" placeholder="E.g. Squats" value = "">
      </p>
      <p>
        <label for = "oneRm">Enter your one rep max (in kg): </label>
        <input type = "number" id="oneRm" name="oneRm[]" value="oneRm">
      </p>

      <!-- Exercise 3 input -->
      <p>
        <label for="">Enter the name of your selected exercise: </label>
        <input type="text" id = "exerciseName" name="exerciseName[]" placeholder="E.g. RDL" value="">
      </p>

      <p>
        <label for="">Enter your 1RM for the selceted exercise: </label>
        <input type ="number" id="oneRm" name="oneRm[]" value="oneRm">
      </p>

      <input type="submit" value="submit">
    </form>
  </div>
  </body>
</html>


<!-- 
// foreach ($exerciseNameArray as $exercise){//loop over each exercise to get each exercise (BP/SQ/RDL)
    //   echo "Hello<br>";
    //   //loop over each 1RM
    //   var_dump("exercise: $exercise");
    //   foreach ($oneRmArray as $oneRm) {
    //     if (($oneRm ==='') || ($exercise ==='')){
    //       var_dump("oneRm: $oneRm");
    //       continue;
          // Check if its empty, if it empty don't do anything -->