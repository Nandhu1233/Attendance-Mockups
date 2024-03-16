			<nav class = "navbar navbar-header navbar-dark bg-dark">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = "navbar-text pull-left">XYZ Company Admin Panel</p>
				</div>
				<div class = "nav navbar-nav navbar-right">
					<a href="logout.php" class="text-light"><?php echo $user_name ?> <i class="fa fa-power-off"></i></a>
				</div>
			</div>
		</nav>
		<div id="topnav" class="bg-light">
			<a class="active" href="home.php">Dashboard</a>
			<a href="employee.php">Employee Details</a>
			<a href="attendance.php">Attendance Register</a>
			<a href="users.php">Account Details</a>
			<!--<div id="topnav-field">
				<a href="home.php" class="topnav-item">
						<div class="topnav-icon"><i class="fa fa-dashboard"> </i></div>  Home
				</a>
			</div>
			<div id="topnav-field">
				<a href="employee.php" class="topnav-item">
						<div class="topnav-icon"><i class="fa fa-columns"> </i></div>  Employee Details
				</a>
			</div>
			<div id="topnav-field">
				<a href="attendance.php" class="topnav-item">
						<div class="topnav-icon"><i class="fa fa-list"> </i></div>  Attendance Register
				</a>
			</div>
			<div id="topnav-field">
				<a href="users.php" class="topnav-item">
						<div class="topnav-icon"><i class="fa fa-users"> </i></div>  Account Details
				</a>
			</div> !-->

		</div>
		<script>
			$(document).ready(function(){
				var loc = window.location.href;
				loc.split('{/}')
				$('#sidebar a').each(function(){
				// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
					if($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)){
						$(this).addClass('active')
					}
				})
			})
			
		</script>