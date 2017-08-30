<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
<form style = "background-color: yellow">
<div>
   <h1>Personal Information</h1>
   <label><b>Name : &nbsp &nbsp &nbsp </b></label>
   <input type = "text" name = "name" placeholder="Enter your name" checked="name" required><br/><br/>
   <label><b>Email : &nbsp &nbsp &nbsp </b></label>
   <input type = "email" name = "email" placeholder="Enter your email address" required><br/><br/>
   <label><b>Password :</b></label>
   <input type = password name = "password" placeholder = "Enter your password" required><br/><br/>
   <label><b>Age : &nbsp &nbsp &nbsp &nbsp</b></label>
   <input type = "number" name = "age" value = "age" placeholder = "Enter your age" maxlength="3"><br/><br/>
   <label><b>Gender : </b></label>
   <input type = "radio" name = "gender" value = "male" checked>male<br/>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   <input type = "radio" name = "gender" value = "female">female<br/><br/><br/>
</div>
<div>
   <h1>Contact Information</h1>
   <label><b>Address : line1 : </b></label>
   <input type = "text" name = "address" placeholder="House No." required><br/>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   <label><b>line2 : </b></label>
   <input type = "text" name = "address" placeholder="Street"><br/>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   <label><b>line3 : </b></label>
   <input type = "text" name = "address" placeholder="City"><br/><br/>
   &nbsp &nbsp &nbsp &nbsp &nbsp
   <label><b>Country :</b></label>
   <select>
   	     <option>India</option>
   	     <option>USA</option>
   	     <option>France</option>
   	     <option>Australia</option>
   	     <option>Other</option>
   </select required>
   <br/><br/>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   <label><b>PIN : </b></label>
   <input type = "number" name = "pin" placeholder="Enter your pincode" maxlength="6"><br/><br/>
   <label><b>Mobile no. : </b></label>
   <input type = "number" name = "mobile" placeholder="Enter your mobile no." maxlength="11"><br/><br/>
   <label><b>Website : </b></label>
   <input type = "url" name = "website" placeholder="Enter your website"><br/><br/>
   <label><b>Feedback : </b></label>
   <textarea name = "feedback" rows = "5" cols = "20" placeholder="Enter your feedback"></textarea><br/><br/>
   <label><b>D.O.B. : </b></label>
   <input type = "date" name = "dob" placeholder="Enter your dob"><br/><br/>
   <input type = "checkbox" name = "checkbox" required>I agree with the above terms and conditions<br/><br/>
   <input type = "reset" name = "reset"> 
   <input type = "submit" name = "submit" value = "submit">
</div>
</form>


</body>
</html>