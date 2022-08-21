<?php
        #sample connection to database with name test
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "placementproject"; #can be any name 
        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }else{
            if(isset($_REQUEST['register'])){
               if($_REQUEST['NameoftheStudent']!=""&&$_REQUEST['NameoftheUniversity']!=""&&$_REQUEST['Registrationnumber']!=""&&$_REQUEST['Emailaddress']!=" " &&$_REQUEST['Companyyouhaveselected']!=NULL&&$_REQUEST['SelectBranch']!=NULL&&$_REQUEST['CGPA']!=""&&$_REQUEST['Languagesknown']!=""&&$_REQUEST['Projects']!=""&&$_REQUEST['Achievements']!=""&&$_REQUEST['WorkshopsInternships']!=NULL&&$_REQUEST['FrameworksTools']!=""){
                    $input = $_REQUEST['NameoftheStudent'];    
                    $input1 = $_REQUEST['NameoftheUniversity'];
                    $input2 = $_REQUEST['Registrationnumber'];
                    $input3 = $_REQUEST['Emailaddress'];
                    $input4 = $_REQUEST['Companyyouhaveselected'];
                    $input5 = $_REQUEST['SelectBranch'];
                    $input6 = $_REQUEST['CGPA'];
                    $input7 = $_REQUEST['Languagesknown'];
                    $input8 = $_REQUEST['Projects'];
                    $input9 = $_REQUEST['Achievements'];
                    $input10 = $_REQUEST['WorkshopsInternships'];
                    $input11 = $_REQUEST['FrameworksTools'];
                   echo '<script>alert("Data taken successfull")</script>';
                   echo '<script>windows: location="ending.php"</script>';
                    
                   
                    echo("The given value is: ".$input." ".$input1." ".$input2." ".$input3." ".$input4." ".$input5." ".$input6." ".$input7." ".$input8." ".$input9." ".$input10." ".$input11);
                    $sql = "INSERT INTO register(NameoftheStudent,NameoftheUniversity,Registrationnumber,Emailaddress,Companyyouhaveselected,SelectBranch,CGPA,Languagesknown,Projects,Achievements,WorkshopsInternships,FrameworksTools) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7','$input8','$input9','$input10','$input11')";
                    if($conn->query($sql)===TRUE){
                        echo "\n\nThe value is taken into table";
                    }
                    else{
                      echo "\n error in executing";
                    }
                }else{
                    echo "\nThe value is not provided.";
                }

            }
        }
?>