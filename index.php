<!DOCTYPE html>
<html>
<head>
<title>first php project</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


  <form action="home.php" method="POST">
  <h1>CHECK! </h1>
  <input type="text" name="num01" placeholder="Number 1">

  <select name="oper">
  	<label> Choose Operation ! </label>
  	<option value="add">Add </option>
  	  	<option value="sub">Subtract</option>

  </select>
    <input type="text" name="num02" placeholder="Number 2">
    <button type="submit">Calculate</button>

   </form>

   



<!-- <script>
	 const inputs=document.querySelectorAll('input');
	 const button=document.querySelector('button');


  button.addEventListener("click",go);

  function go(){
  	inputs.forEach((items)=>{
  		items.value='';
  	})
  }



</script> -->

</body>
</html>
