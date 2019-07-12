<!DOCTYPE html>
<html>
<head>
  <title>Contact Me</title>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #555;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #0CADA0;
  color:bisque;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #d1d1f1d1;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
</style>
</head>
<body>

<h2 style="text-align:center">Contact Me</h2>

<div class="container">
  <form action="login.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">E-Mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your e-mail id..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Mobile</label>
      </div>
      <div class="col-75">
        <input type="text" id="mobile" placeholder="Your mobile number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Address</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Your Address.." style="height:150px"></textarea>
      </div>
    </div>
    <div class="row">
      <br />
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
