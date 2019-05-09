<!-- 
A very simple input form View template:
note that the form method is POST, and the action
is the URL for the route that handles form input.
 -->

<p>This is a simple form</p>
<form id="form1" name="form1" method="post" action="<?= $BASE ?>/simpleform">
  Enter Latitude:
  <input name="lat" type="text" placeholder="55.953251" id="lat" size="50" />
  <input name="lng" type="text" placeholder="-3.188267" id="lng" size="50" />
  <input name="location" type="text" placeholder="Edinburgh" id="lng" size="50" />
<p>
  <input type="submit" name="Submit" value="Submit" />
</p>
</form>
