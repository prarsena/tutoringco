<html><head><title>Fun with Forms</title></head><body>
<h1>Add Tutor to Database</h1>
<style>
body {
    background-color: lightblue;
}

h1 {
    color: white;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
    }
</style>
<form method="post" action="input.php">
	<input type="hidden" value="index.php" />
	<fieldset>
		<div>
			<label for="name">Name: </label>
			<input name="name" id="name" type="text" value="" />
		</div>
		<div>
			<label for="age">Age:  </label>
			<input name="age" id="age" type="int" value="" />
		</div>
		<div>
			<label for="location">Location:</label>
			<input name="location" id="location" type="text" />
		</div>
	</fieldset>
	<fieldset>
		<legend>Subjects</legend>
		<input type="checkbox" name="subject[]" id="subject[]" value="french" />French
		<input type="checkbox" name="subject[]" id="subject[]" value="spanish" />Spanish
		<input type="checkbox" name="subject[]" id="subject[]" value="chemistry" />Chemistry
		<input type="checkbox" name="subject[]" id="subject[]" value="computers" />Computers
		<input type="checkbox" name="subject[]" id="subject[]" value="english" />English
	</fieldset>
	<div>
		<input type="submit" value="submit" />
	</div>
	<br> <br>
	<a href="view.php">view current tutors</a>
</form>
</body>
</html>