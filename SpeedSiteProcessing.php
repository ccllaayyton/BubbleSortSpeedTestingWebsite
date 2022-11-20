<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Clayton Schroeder">
        <title>Xtreme</title>
        <meta name="description" content="This page is to choose compare the sorting speeds of programing languages against one another">
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
    	<header>
    		<h1>CS 120</h1>
    		<h2>Xtreme Bubble Sort Ultimate Speed Challenge World Series</h2>
    	</header>
        
        <?php
        /*The working idea is to call all Bubble Sort scripts from this program.
		Timing for each will take place inside of each program and they will return 
		the times which will be stored in a string where they can be plotted*/
		
		//get the user input from the SpeedSite page
        $language1 = $_POST["language1"];
		$language2 = $_POST["language2"];
		
		//If the user picks the same two languages redirect them
		if($language1 == $language2){
			header("Location: https://cschroe1.w3.uvm.edu/SpeedTestSite/SpeedSiteInputValidation.html");
			exit;
		}
		//TODO: Make it so the user cannot repeat languages
		
		//create arrays to store the times
		$language1Times = array();
		$language2Times = array();

		//Call the correct program based on the user selection
		for($i = 1000; $i<=5000; $i = $i+1000){
			switch ($language1){	
				case "Python":	
						
					//Call python Bubble Sort
					$runPythonCmd = escapeshellcmd("python PythonBubbleSort.py numbers.txt " . $i);
					$output = shell_exec($runPythonCmd);
					//Add to array
					array_push($language1Times,$output);
					break;
				case "Ruby":
					//commands to run the ruby Bubble Sort file
					$runRubyCmd = escapeshellcmd("ruby RubyBubbleSort.rb numbers.txt " . $i);
					$output = shell_exec($runRubyCmd);
					//Add to array
					array_push($language1Times,$output);	
					break;
				case "Java":
					//commands to run the Java Bubble Sort file
					$compileJavaCmd = escapeshellcmd("javac JavaBubbleSort.java");
					$output = shell_exec($compileJavaCmd);
					$runJavaCmd = escapeshellcmd("java JavaBubbleSort numbers.txt " . $i);
					$output = shell_exec($runJavaCmd);
					//Add to Array 
					array_push($language1Times,$output);
					break;
				case "C++":
					//Call C++ Bubble Sort
					$compileCmd = escapeshellcmd("g++ -std=c++1y -o BubbleSort.exe C++BubbleSort.cpp");
					$output = shell_exec($compileCmd);
					$runCmd = escapeshellcmd("./BubbleSort.exe nums.txt " . $i);
					$output = shell_exec($runCmd);
					array_push($language1Times,$output);
					break;
					
			}
			

		}
		for($i = 1000; $i<=5000; $i = $i+1000){
			switch ($language2){	
				case "Python":	
						
					//Call python Bubble Sort
					$runPythonCmd = escapeshellcmd("python PythonBubbleSort.py numbers.txt " . $i);
					$output = shell_exec($runPythonCmd);
					array_push($language2Times,$output);
					break;
				case "Ruby":
					//commands to run the ruby Bubble Sort file
					$runRubyCmd = escapeshellcmd("ruby RubyBubbleSort.rb numbers.txt " . $i);
					$output = shell_exec($runRubyCmd);
					array_push($language2Times,$output);	
					break;
				case "Java":
					//commands to run the Java Bubble Sort file
					$compileJavaCmd = escapeshellcmd("javac JavaBubbleSort.java");
					$output = shell_exec($compileJavaCmd);
					$runJavaCmd = escapeshellcmd("java JavaBubbleSort numbers.txt " . $i);
					$output = shell_exec($runJavaCmd);
					array_push($language2Times,$output);
					break;
				case "C++":
					//Call C++ Bubble Sort
					$compileCmd = escapeshellcmd("g++ -std=c++1y -o BubbleSort.exe C++BubbleSort.cpp");
					$output = shell_exec($compileCmd);
					$runCmd = escapeshellcmd("./BubbleSort.exe nums.txt " . $i);
					$output = shell_exec($runCmd);
					array_push($language2Times,$output);
					break;
		}
	}
		
		//Generate the table 
		echo "<table border='1'>";
		echo "<tr><td>Size</td><td>" . $language1 . "</td><td>" . $language2 . "</td></tr>";
		for($i = 1000; $i<=5000; $i = $i+1000){
			echo "<tr>";
				echo "<td>" . $i . "</td>";
				echo "<td>" . $language1Times[($i/1000)-1] . "</td>";
				echo "<td>" . $language2Times[($i/1000)-1] . "</td>";
			echo "</tr>";
		}
        echo "</table>";

        ?>
        
    </body>
</html>