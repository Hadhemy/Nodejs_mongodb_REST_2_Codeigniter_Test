<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>

<div class="column" align="center">
 
    <h1 class="title">Create User</h1>
    <form method="post">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text"     name="name"  placeholder="Type the user name" size="100">
            </div>
        </div>
        
         <div class="field">
            <label class="label">Gender</label>
            <div class="control">
                <input type="text"  name="gender" placeholder="Type the user gender" size="100">
            </div>
        </div>
        
        <div class="field">
          <label class="label">Phone_Number</label>
          <div class="control">
            <input type="text" name="phone_number" placeholder="Type the user phone_number" size="100">
            </div>
        </div>
        
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input type="email" name="email" placeholder="Type the user email" size="100">
            </div>
        </div>
         
         <div class="field">
            <label class="label">Address</label>
            <div class="control">
                <input type="text" name="address" placeholder="Type the user address" size="100">
            </div>
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <input type = "submit" value = "Submit"  style="background-color: pink" />
            </div>
        </div>
    </form>
</div>



</body>
</html>