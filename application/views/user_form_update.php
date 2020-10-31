<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>

<div class="column" align="center">
    <h1 class="title">Update User</h1>
    <form action="" method="POST">
        <div class="field">
            <label class="label">Name </label>
            <div class="control">
                <input id="name" name="name" class="input" type="text" placeholder="Type the user name">
            </div>
        </div>
         <div class="field">
            <label class="label">Gender</label>
            <div class="control">
                <input id="gender" name="gender" class="input" type="text" placeholder="Type the user gender">
            </div>
        </div>
        <div class="field">
            <label class="label">Phone-Number</label>
            <div class="control">
                <input id="name" name="name" class="input" type="text" placeholder="Type the user phone-number">
            </div>
        </div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input id="email" name="email" class="input" type="email" placeholder="Type the user email">
            </div>
        </div>
         <div class="field">
            <label class="label">Address</label>
            <div class="control">
                <input id="address" name="address" class="input" type="text" placeholder="Type the user address">
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Update</button>
            </div>
        </div>
    </form>
</div>



</body>
</html>