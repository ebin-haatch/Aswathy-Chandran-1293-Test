<?php
include("action.php");

//$objBal = new MyCalculator();

if (isset($_POST["Calculate"])) {
$num1=$_POST['Operand1'];
$num2=$_POST['Operand2'];

}
?>
<html>
    <head>

    <style>
      .form1{
        border-radius: 5px;
       background-color: #f2f2f2;
       padding: 20px;

      }
      .form-control
      {
        width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
      }
      .btn
      {
       width:50px;
       height:50px;
      }
        </style>
    </head>
<body>
<h3>Simple Calculator</h3>
<div class="form1">
<form method="post" action="">
        <div >
                <div >
                        <label for="Operand1" class="form-label fs-3">First Number</label>
                        <input id="Operand1" name="Operand1" type="number" step="any" class="form-control" value="<?php echo isset($Operand1)?$Operand1:''; ?>">
                </div>
                <div>
                        <label for="Operand2" class="form-label fs-3">Second Number</label>
                        <input id="Operand2" name="Operand2" type="number" step="any" class="form-control" value="<?php echo isset($Operand2)?$Operand2:''; ?>">
                </div>
        </div>
        <div >
                <div>
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="+"  >
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="-" >
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="x" >
                        <input class="btn btn-success fs-2" type="submit" name="Calculate" value="/" >
                </div>
        </div>
</form>


<div >
        <div >
                <label for="Result" >Result</label>
                <?php //$rsc=$objBal->add($num1,$num2); 
                 $mycalc = new MyCalculator($num1,$num2);   
                 if($_POST["Calculate"]=='+')
                 {
                 $rsc=$mycalc-> add();

                 }
                 else if($_POST["Calculate"]=='-')
                 {
                    $rsc=$mycalc-> subtract();
                 }
                 else if($_POST["Calculate"]=='x')
                 {
                    $rsc=$mycalc-> multiply();
                 }
                 else
                 {
                    $rsc=$mycalc->divide();
                 }
                ?>
                <input id="Result" name="Result" type="number" step="any" class="form-control form-control-custom" value="<?php echo $rsc; ?>">

               
        </div>
</div>

<div>

</body>



</html>