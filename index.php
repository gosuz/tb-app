<?php
// Set the variables that repeat
$setsReps70_80 = "3 sets x 5 reps";
$setsReps85_90 = "3 sets x 3 reps";
$setsReps95 = "3 sets x 1 rep";
// Input from the user
// Convert the input we got from a string -> integers

$exerciseNameArray = $_POST['exerciseName'];
$oneRmArray = $_POST['oneRm'];
// is the key oneRm? or the position??

// When page loads, input will be empty but don't give an error
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ // checking to see if form has been submitted
  // At least 1 1RM and 1 exercise name needs to be submitted

  // if there is less than one item in the array, print the error

  // '' will give me FALSE
  // if '' is false at least twice, print, print error
  // false twice
  
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
    // echo "Thanks for entering info";

    foreach ($exerciseNameArray as $exercise){//loop over each exercise to get each exercise (BP/SQ/RDL)
      foreach ($oneRmArray as $oneRm) {
        if (($oneRm ==='') || ($exercise ==='')){
          continue;
        }
        for ($percentage=70; $percentage<=80; $percentage+=5) {
          echo "$percentage%<br>";
          // Percentage: 70%
          $weightToUse = (($percentage/100) * (intval($oneRm)));
          echo "$exercise: $weightToUse kg<br>";
          // BP: 14kg 
        }
      }
      
   
      
// weight to use will be consistent for all 70%~95%

    
        // Own loop
        // $exercise;
  //   Percentages range 70~80
  //     For loop for this
  //   Percentages range 85+90
  //     For loop for this
  //   Percentrages range 95
  //     For loop for this 
  
  // Repeat for each exercise
  
    }
  
    }
  } else{
    echo '<p class = "error">Error, name at least one exercise and one rep max </p>';
  }

// for ($percentage=70; $percentage <=80; $percentage+=5) {
//   echo $percentage;
// }

// $exerciseNameArray = $_POST['exerciseName'];
// $oneRmArray = $_POST['oneRm'];

// Create template for 70/75/80%
// 3 sets 5 reps
// Weight: (input from user *0.7/0.75/0.8)


// Create template for 85%/ 90%
  //3 set 3 reps

// Create template for 95%
  //3 set x 1 rep

// Automate that if its 70~80% print

 // 70%
 // 3 sets 5 reps
 // Weight: 
 // Week: 

 // 75%
 // 3 sets 5 reps
 // Weight: 
 // Week: 

 // 80%
 // 3 sets 5 reps
 // Weight: 
 // Week: 

 // Repeat for each exercise
 // Output for each percentage:

  // Percentage: 
  // 3 sets 5 reps
  // Weight: 
  // Week: 

// reps change by percentage




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