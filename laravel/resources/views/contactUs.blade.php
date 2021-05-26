<form method="post" action="\mailContactUs">
@csrf
<label for="subject">Subject:</label>
<input id="subject" name="subject">
<br>


<textarea name="content"></textarea>

<button type="submit"  value="Submit">Submit</button> 
</form>