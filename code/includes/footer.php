
		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="/js/materialize.js"></script>
		<script src="/js/init.js"></script>

	</body>
</html>


<script>
$(document).ready(function(){
    $('select').formSelect();
  });
</script>


<?php
// close db_1 connection started in the header
$conn->close();
?>





