<html>
<head>
<title></title>

<style type="text/css">
	.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  padding: 10px 10px;
}
.button1 {
  background-color: #b350af; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  padding: 10px 10px;
}
</style>


</head>
<body>
  

<script>

function Create_new(){
	location.replace("http://localhost:8000/user/call_api_add")
}

function Excel(){
	location.replace("http://localhost:8000/welcome/excel")
}
</script>

<div class="column" align="center">
           <button class="button"  onclick="Create_new()"  >ADD USER     </button>
 </div>

 <div class="column" align="center">
           <button class="button1"  onclick="Excel()"  >EXCEL_FILE   </button>
 </div>

 
  


</body>
</html>
