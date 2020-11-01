<html>
<head>
<title></title>

<style type="text/css">
	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  padding: 32px 16px;
}
</style>


</head>
<body>
  

<script>

function Create_new(){
	location.replace("http://localhost:8000/user/call_api_add")
}
</script>

<div class="column" align="center">
           <button class="button"  onclick="Create_new()"  >ADD USER     </button>
 </div>
  


</body>
</html>