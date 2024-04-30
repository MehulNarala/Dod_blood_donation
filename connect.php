<?php
$NameofOwner = $_POST['$NameofOwner'];
$NameofOwner = $_POST['$ContactNumber'];
$Email = $_POST['$Email'];
$Address = $_POST['$Address'];
$NameofDog = $_POST['$NameofDog'];
$Breed = $_POST['$Breed'];
$Age = $_POST['$Age'];
$Weight = $_POST['$Weight'];
$Gender = $_POST['$Gender'];
$BloodGroup = $_POST['$BloodGroup'];
$DateOfLastVaccine = $_POST['$DateOfLastVaccine'];
$DateOfLastHeartwormTest = $_POST['$DateOfLastHeartwormTest'];
$DateOfLastFleaAndTickTreatment = $_POST['$DateOfLastFleaAndTickTreatment'];
$HistoryOfAnyHealthProblems = $_POST['$HistoryOfAnyHealthProblems'];

// database connection
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(NameofOwner,ContactNumber,Email,Address,NameofDog,Breed,Age,Weight,Gender,BloodGroup,DateOfLastVaccine,DateOfLastHeartwormTest,DateOfLastFleaAndTickTreatment,HistoryOfAnyHealthProblems)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)")
    $stmt->bind_param("sissssiissiiii",$NameofOwner,$NameofOwner,$Email,$Address,$NameofDog,$Breed,$Age,$Weight,$Gender,$BloodGroup,$DateOfLastVaccine,$DateOfLastHeartwormTest,$DateOfLastFleaAndTickTreatment,$HistoryOfAnyHealthProblems);
    $stmt->execute();
    echo "registration SUccessfully...";
    $ stmt->close();
    $ conn->close();
}
?>