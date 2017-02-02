<!DOCTYPE HTML>
<html>  
  <body>

    <form method="post">
      Chart name: <input type="text" name="chart_name"><br>

      <p>
	Chart type:
	<select name="form_chart_type">
	  <option value="">Select...</option>
	  <option value="Stats">Stats</option>
	  <option value="Bar">Bar</option>
	  <option value="Line">Line</option>
	  <option value="Pie">Pie</option>
	</select>
      </p>

      <p>
	Sort by:
	<select name="form_sort_by">
	  <option value="">Select...</option>
	  <option value="None">None</option>
	  <option value="Score">Score</option>
	  <option value="First_Name">First Name</option>
	  <option value="Last_Name">Last Name</option>
	</select>
      </p>

      <p>
	Chart data:
	<textarea
	   name="data" rows="30" cols"100" class="form-control" placeholder="First_Name Last_Name, Score">
	</textarea>
      </p>
      
      <input type="submit">
    </form>

    <h1><?php echo ($_POST['chart_name']); ?></h1>
    
  </body>
</html>
