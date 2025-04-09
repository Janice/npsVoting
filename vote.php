
<!DOCTYPE html>

<html>
    <!-- html head -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>NPS Ballot</title>
         <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    			<script>
						function showname() {
  				//	$('#dropdown').change(function() {
    					//var optionValue = $(this).val();
    					var badge = document.getElementById("badge")
    					var optionValue = badge.value;

    					// Make AJAX request to fetch the data
    					$.ajax({
      					url: 'fetch_data.php',
      					type: 'POST',
      					data: { option: optionValue },
      					dataType: 'json',
      					success: function(response) {
                	console.log(response);
        					if (response.success) {
        						document.getElementById("sqlmessage").innerHTML = " continue ";
        						document.getElementById("sqlmessage2").innerHTML = " continue ";
        						var name = response.first + "  " + response.last;
        						if (name == "null  null")
        						{
        							name = "badge not valid, do not enter";
        						}
          					$('#textfield').val(name);
       				 		} else {
          					$('#textfield').val('name not found');
        					}
      					},
      						error: function() {
        					$('#textfield').val("Mike Bailey");
      					}
    					});
  					};

    			</script>
 
        
        <style>
				body {
  				background-color: white;
  				margin-left: 20px;
				}

				h1 {
  				color: maroon;
  				margin-left: 40px;
				}
				
				.sqlmessage {
					size:30px;  
				}
				
				.label {
                min-width: 40px;
                display: inline-block;
                color: black;
                text-align: left;
                font-size: 14px;
                }

				.empty {
					height:10px;
				}
       </style>
    </head>
    
    <!-- html body -->
    <!-- html body -->
    <body style="background:#eee; font-family:arial;">
        <!-- title -->
       <div class="container">
       	<div class="row" >
           		<div class="row col-xs-12 empty "></div>
			</div><div class="row" >
           		<div class="row col-xs-12 empty "></div>
			</div>
       	<p class="text-center">Best of Category Votes</p>
       	
       	<div class="col-md-12" id="sqlmessage" class="sqlmessage"></div>
       	
       <!-- wp:paragraph {"align":"center"} -->
       
				     <form method="post" class="form-inline" action="">			     	
				     	
				     <div class="mt-2 form-group col-md-12">Enter a Badge ID:</div>
    				 <div class="form-group col-md-3"><input type = "text" name="badge" id="badge" onchange="showname()"></div>
 

						 <div class="mt-2 form-group col-md-4"><input type="text" id="textfield" class="textfield" readonly></div>

									 
						<div class="mt-2 form-group col-md-5"><button type="submit" class="btn btn-default">Submit</button></div>
						<div class="row" >
           		<div class="row col-xs-12 empty "></div>
				   	</div>
						
								<?php
                            $conn = 
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            
                            $sql = "SELECT id, name, alphanumeric FROM category order by id";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)>0) {

                              // output data of each row
                              while($row = mysqli_fetch_assoc($result)) {
                              	echo "<div class=\"row\" >";
                                echo "<div class=\"form-group col-md-3\">". $row["name"]."</div>"."<div class=\"form-group col-md-3\">". "<label for=\"".$row["alphanumeric"]."\" class=\"label \">".$row["alphanumeric"]. "</label>" .   "<input type=\"text\" class=\"form-control \" id=\"".$row["alphanumeric"]. "\" name=\"". $row["alphanumeric"]  ."\"  maxlength=\"4\">". "</div>"."<div class=\"col-md-6 empty \"></div>";
                              	echo "</div>". PHP_EOL;
                              }
                            } else {
                              echo "0 results";
                            }


                            mysqli_close($conn);
                        ?>
                        
                        <button type="submit" class="btn btn-default">Submit</button>
                        <div class="col-md-12" id="sqlmessage2" class="sqlmessage"></div>
                        
                        <?php
														$conn = 
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
														// Check if the form is submitted
														if ($_SERVER["REQUEST_METHOD"] == "POST") {
														    // Get the text inputs from the form
														    $badge = $_POST["badge"];
														    $inputa = $_POST["A"];
														    $inputb = $_POST["B"];
														    $inputc = $_POST["C"];
														    $inputd = $_POST["D"];
														    $inpute = $_POST["E"];
														    $inputg = $_POST["G"];
														    $inputh = $_POST["H"];
														    $inputi = $_POST["I"];
														    $inputj = $_POST["J"];
														    $inputf = $_POST["F"];
														    $inputfa = $_POST["FA"];
														    $inputfb = $_POST["FB"];
														    $inputfc = $_POST["FC"];
														    $inputfd = $_POST["FD"];
														    $inputfe = $_POST["FE"];
														    $inputff = $_POST["FF"];
														    $inputfg = $_POST["FG"];
														    $inputfh = $_POST["FH"];
														    $inputk = $_POST["K"];
														    $inputka = $_POST["KA"];
														    $inputkb = $_POST["KB"];
														    $inputkc = $_POST["KC"];
														    $inputl = $_POST["L"];
														    $inputm = $_POST["M"];
														    $inputn = $_POST["N"];
														    $inputo = $_POST["O"];
														    $inputp = $_POST["P"];
														    $inputpa = $_POST["PA"];
														    $inputq = $_POST["Q"];
														    $inputqa = $_POST["QA"];
														    $inputr = $_POST["R"];
														    $inputra = $_POST["RA"];
														    $inputs = $_POST["S"];
														    $inputt = $_POST["T"];
														    $inputu = $_POST["U"];
														    $inputv = $_POST["V"];
														    $inputw = $_POST["W"];
														    $inputwa = $_POST["WA"];
														    $inputx = $_POST["X"];
														    $inputy = $_POST["Y"];
														    $inputya = $_POST["YA"];
														    
														    $sql = "";


										           if ($inputa > 1)
 														   		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"A\", $inputa);";
 														   if ($inputb > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"B\", $inputb);";
															 if ($inputc > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"C\", $inputc);";
															 if ($inputd > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"D\", $inputd);";
															 if ($inpute > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"E\", $inpute);";
															 if ($inputg > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"G\", $inputg);";
															 if ($inputh > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"H\", $inputh);";
															 if ($inputi > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"I\", $inputi);";
															 if ($inputj > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"J\", $inputj);";												 
															 if ($inputf > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"F\", $inputf);";
															 if ($inputfa > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FA\", $inputfa);";
															 if ($inputfb > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FB\", $inputfb);";
															 if ($inputfc > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FC\", $inputfc);";
															 if ($inputfd > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FD\", $inputfd);";
															 if ($inputfe > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FE\", $inputfe);";
															 if ($inputff > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FF\", $inputff);";
															 if ($inputfg > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FG\", $inputff);";
															 if ($inputfh > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"FH\", $inputfg);";
															 if ($inputk > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"K\", $inputk);";
															 if ($inputka > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"KA\", $inputka);";
															 if ($inputkb > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"KB\", $inputkb);";
															 if ($inputkc > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"KC\", $inputkc);";
															 if ($inputl > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"L\", $inputl);";
															 if ($inputm > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"M\", $inputm);";
															 if ($inputn > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"N\", $inputn);";
															 if ($inputo > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"O\", $inputo);";
															 if ($inputp > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"P\", $inputp);";
															 if ($inputpa > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"PA\", $inputpa);";
															 if ($inputq > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"Q\", $inputq);";
															 if ($inputqa > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"QA\", $inputqa);";
															 if ($inputr > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"R\", $inputr);";
															 if ($inputra > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"RA\", $inputra);";
															 if ($inputs > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"S\", $inputs);";
															 if ($inputt > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"T\", $inputt);";
															 if ($inputu > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"U\", $inputu);";
															 if ($inputv > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"V\", $inputv);";
															 if ($inputw > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"W\", $inputw);";
															 if ($inputwa > 1)
		 													 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"WA\", $inputwa);";
															 if ($inputx > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"X\", $inputx);";
															 if ($inputy > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"Y\", $inputy);";
															 if ($inputya > 1)
															 		$sql .= "INSERT INTO votes (badge_id, category, product_id) VALUES ($badge, \"YA\", $inputya);";


																if ($conn->multi_query($sql) === TRUE) {
																  echo '<script>document.getElementById("sqlmessage2").innerHTML = "Ballot saved"</script>';
																  echo '<script>document.getElementById("sqlmessage").innerHTML = "Ballot saved"</script>';
																} else {
																  if (mysqli_errno($conn) == 1062)
																  {
																  	//echo  $conn->error;
																  	echo '<script>document.getElementById("sqlmessage2").innerHTML = "'.$conn->error.'"</script>';
																  	echo '<script>document.getElementById("sqlmessage").innerHTML = "'.$conn->error.'"</script>';
																  }
																	else 
																  	//echo "Error: " . $sql . $conn->error;
																  	echo '<script>document.getElementById("sqlmessage2").innerHTML = Error: "'.$conn->error.'"</script>';
																  	echo '<script>document.getElementById("sqlmessage").innerHTML = "'.$conn->error.'"</script>';
																}
															}
 

														// Close the database connection
														$conn->close();
														?>

														<!-- HTML form to input multiple records -->
														
											
                </form>

       <div class="row" >
           		<div class="row col-xs-12 empty "></div>
			</div><div class="row" >
           		<div class="row col-xs-12 empty "></div>
			</div>
      </div>
    </body>
</html>