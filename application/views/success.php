<html>
<head>
<title>Success</title>



</head>
<body>
  <h1>Form Submitted Successfully</h1>

<script>
function View() {
  location.replace("http://localhost:8000/")
}

function Create_new(){
	location.replace("http://localhost:8000/user/call_api_add")
}
</script>
  
<button style="background-color: orange" onclick="View()" >View Users</button>
<button style="background-color: yellow"  onclick="Create_new()">  Add New User</button>

</body>
</html>