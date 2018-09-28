<?php
		
		if(isset($_POST['kirim'])) {
			$username=$_POST=['username']
			$password=$_POST=['password']
			 $user=array(
			 	"user"=>"fajar",
			 	"pass"=>"fajar"):

			 if ($username==$user['user']&&$password==$user['pass']){
			 	echo "Berhasil SELALU:"."<br>>";

			 	?>

			 	<form method="POST">
				 		 mancing<input type="checkbox" name="hobi"[]" value="renang"><br><br>
					mancing<input type="checkbox" name="hobi"[]" value="badminton"><br><br>
					mancing<input type="checkbox" name="hobi"[]" value="sepak bola"><br><br>
					mancing<input type="checkbox" name="hobi"[]" value="mancing"><br><br>
					choose photo<input type="file" name="foto"><br>
			 	</form>


			 	<input type="submit" name="kirim" value="input"> 

?>
