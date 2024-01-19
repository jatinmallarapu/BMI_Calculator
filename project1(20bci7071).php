<?php
 
if($_POST!=null)
{
    $h=empty($_POST["height"]) ? 0 : $_POST["height"];
    $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
    $index =0;
    if($h !=0 && $w !=0)
        $index = round($w/($h*$h)* 703,2);
 
    $bmi="";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
echo "Results<br/>";
        $bmi="your underweight please gain weight              underweight - BMI : " . $index;
echo "your underweight please gain weight";
        $bmiStyle="alert alert-secondary";
    } else if ($index < 25) {
echo "Results<br/>";
        $bmi="normal - BMI : ". $index;
        $bmiStyle="alert alert-success";
    } else if ($index < 30) {
echo "Results<br/>";
        $bmi=" your overweight  please loose weight       overweight - BMI : " . $index; 
echo "your overweight  please loose weight"; 
        $bmiStyle="alert alert-warning";
    } else {
echo "Results<br/>";
        $bmi="your obese please loose weight     obese - BMI : " .$index;  
echo "your obese please loose weight";
        $bmiStyle="alert alert-danger";
    }
}
?>
 <!DOCTYPE html>
 <html lang="en-US">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title> BODY MASS INDEX </title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">\
<link href="Downloads/BMIfavicon.png" rel="icon" type="image/icon">
 </head>
  
     <body>
<center><img src="BMIimg.png" width="500px" height="300px"></center>
         <div class="container">
            
             <form method="post">
                 <div class="form-group">
                   <label for="height"><font color="red" size="5">Enter height, </font><br/>Centemeters</label>
                   <input type="text" class="form-control" name="height" placeholder="69">
                 </div>
                 <div class="form-group">
                   <label for="weight"><font color="red" size="5">Enter weight</font><br/> kilograms </label>
                   <input type="text" class="form-control"  name="weight" placeholder="150">
                 </div>
                 <div class="form-group">
<center>
                   <button type="submit" class="btn btn-success" style="background-color:red; color:white">Calculate</button>
<button type="reset" style="background-color:red; color:white">reset</button>
</center>
                 </div>
               </form>
               <div class="<?=$bmiStyle?>" role="alert" id="bmi">
 
               <?php 
                 echo $bmi;
                 ?>
             
             </div>
           </div>  
     
    
 </body>
 </html>
