<!DOCTYPE html>
    <head>
        <title>Form</title>
        
<style>
body {font-family: 'Times New Roman', Times, serif; 
background-image: url("https://previews.123rf.com/images/cgdeaw/cgdeaw1905/cgdeaw190500028/122252725-abstract-art-line-white-color-wave-on-green-soft-light-wallpaper-modern-soft-green-texture-art-line-.jpg");
background-size: 100%;
background-repeat: repeat-y;}
       
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}



/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .registerbtn{
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  position: absolute;
  left: 430px;
  margin: 0px;
  max-width: 680px;
  padding: 10px;
  background-color: white;
  
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .registerbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <form action="index2.php" method="POST" >    

  <div class="container"style="padding-left:50px">
    <h1 style="padding-top: 100px,">Placement registration</h1>
    <p>Fill this form to apply for company:-)</p>
    <hr>

    <label for="NameoftheStudent"><b>Name</b></label>
    <input type="text"  placeholder="Enter the NameoftheStudent" name="NameoftheStudent" required><br>

    <label for="NameoftheUniversity"><b>Name of the University</b></label>
    <input type="text" placeholder="Enter University name" name="NameoftheUniversity" required><br>
    

    <label for="Registrationnumber"><b>Registration number</b></label>
    <input type="text"  placeholder="Enter the Registrationnumber" name="Registrationnumber" required><br>

     
    <label for="Emailaddress"><b>Email address</b></label>
    <input type="text" placeholder="Enter Emailaddress" name="Emailaddress" required><br>

    <tr>
          <td class="tdLabel"><label for="Companyyouhaveselected" class="label" required><b>Company you have selected</b></label></td>
          <td><select name="Companyyouhaveselected" required id="Companyyouhaveselected" style="width:160px">
          <option value="Spotify">Spotify</option>
          <option value="Google">Google</option>
          <option value="IBM">IBM</option>
          <option value="Apple">Apple</option>
          <option value="IKEA">IKEA</option>
          <option value="Pepsi">Pepsi</option>
          <option value="Amazon">Amazon</option>
          <option value="Microsoft">Microsoft</option>
          </select>
          </td>
          </tr><br>
          <br>


        <tr>
          <td class="tdLabel"><label for="SelectBranch" class="label" required><b>Select Branch</b></label></td>
          <td><select name="SelectBranch" required id="SelectBranch" style="width:160px">
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
          <option value="EEE">EEE</option>
          <option value="Mech">Mech</option>
          <option value="Civil">Civil</option>
          <option value="BBA">BBA</option>
          </select>
          </td>
          </tr><br>
          <br>

          <label for="CGPA"><b>CGPA</b></label>
          <input type="text"  placeholder="Enter the CGPA" name="CGPA" required>


          <label for="Languagesknown"><b>Languages Known</b></label>
          <input type="text"  placeholder="Enter the Languagesknown" name="Languagesknown" required>

        
          <label for="Projects"><b>Projects</b></label>
          <input type="text"  placeholder="Enter the Projects you have done" name="Projects" required><br>

          <label for="Achievements"><b>Achievements</b></label>
          <input type="text"  placeholder="Enter the Achievements you received" name="Achievements" required><br>

          
          <tr>
            <td class="tdLabel"><label for="WorkshopsInternships" class="label" required><b>Number of workshops&Internships  </b></label></td>
            <td><select name="WorkshopsInternships" required id="WorkshopsInternships" style="width:160px">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="9">10</option>
            </select>
            </td>
            </tr><br>
            <br>
            <br>

           <label for="FrameworksTools"><b>Frameworks & Tools</b></label>
            <input type="text"  placeholder="Enter the Frameworks&Tools" name="FrameworksTools" required><br>

            <div class="clearfix">
      <a href="placementform.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name="register" class="registerbtn">Register</button>
    </div>
  
  </div>
</form>

</body>
</html>