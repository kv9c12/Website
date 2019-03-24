<!DOCTYPE html>
<html>
<head>
  <title>
    Customer Feedback
  </title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:#00E676;
  padding: 20px;
}

#btn{
  margin-left: 45%;
  width: 10%;
  background-color:#00796B;
}

#field{

}
</style>
</head>
<body style="background-color: #E0F2F1">

<u><h3 style="text-align: center;">Feedback-Form</h3></u>

<div class="container">
  <form action="login.php"><!--provide next form url-->
    <label for="fname" id="field">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First name..">

    <label for="lname" id="field">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last name..">

    <label for="country" id="field">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="india">India</option>
      <option value="uk">United Kingdoms</option>
    </select>

    <label for="subject" id="field">Feedback</label>
    <textarea id="subject" name="subject" placeholder="Enter your feedback here.." style="height:200px"></textarea>

    <input type="submit" value="Submit" id="btn">
  </form>
</div>

</body>
</html>
