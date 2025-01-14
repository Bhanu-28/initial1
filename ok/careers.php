<?php
session_start();
require 'connect.php';

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VIT-AP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yaldevi:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
</head>
<body>
<section class="sub-header">
	<nav>
    <a href="index.php"><img src="images/logo2.png"></a>
		 <div class ="nav-links" id="navLinks">
		 	<i class="fa fa-times" onclick="hideMenu()"></i>
		 	<ul>
		 		<li><a href="index.php">HOME</a></li>
		 		<li><a href="about.php">ABOUT</a></li>
		 		<li><a href="careers.php">CAREERS</a></li>
		 		<li><a href="advantage.php">ADVANTAGES</a></li>
		 		<li><a href="contact.php">CONTACT</a></li>

		 	</ul>


		 </div>
		 <i class="fa fa-bars" onclick="showMenu()"></i>

	</nav>
	<h1>CAREER</h1>

</section>
<!--------- Career Development Centre-------->

<section class="cdc">
	<div class="row">
		<div class="cdc-col">
			<h1>Career Development Centre</h1>
			<p>The Career Development Centre plays an integral role in creating the illustrious placement record of VIT. It ensures smooth functioning of the placement activities in the campus. The centre further facilitates training activities of the students and makes sure they get placed in the best of both national and international companies.<br>In 2019-20 alone, CDC has brought more than 700 companies on campus for placements. Last year, the highest offer made was 41.6 lakhs per annum by Microsoft. Over the recent years, many reputed companies such as Intel, Ebay, Amazon, Dell, GE, Texas Instruments, Schneider Electric, DE Shaw & Co, Hitachi, HP, PayPal, Tata Motors, L&T, Dr. Reddy’s, Bosch, Deloitte, Morgan Stanley, Qualcomm, Ashok Leyland, Honda, Ford, Global Analytics, TCS, Cognizant, Accenture, Wipro and Infosys have participated in hiring from VIT.</p>
			<h4>VIT achieves the highest number of dream offers, with attractive salaries, in the country.<br>The following are some of the very high salary package (CTC-in Rs) offered at VIT.</h4>
			<ol>
                <li>Microsoft – 41.60 Lakhs</li>
                <li>Work India – 40 Lakhs</li>
                <li>D. E. Shaw India Private Limited – 34 Lakhs</li>
                <li>Udaan – 30 Lakhs</li>
                <li>CISCO – 29.17 Lakhs</li>
            </ol>
		</div>
		<div class="cdc-col">
			<img src="https://vitap.ac.in/wp-content/uploads/2020/06/pat2019.jpg">
			
		</div>
		
	</div>
	

</section>
<!------- Career -------->

<section class="course">
	<h1>Courses</h1>
	<p>VIT-AP offers distinctive education through its undergraduate, postgraduate and PhD programmes.</p>

	<div class="row">
		<div class="course-col">
			<h3>VIT-AP School of<br>Computer Science and Engineering</h3>
			<p>
				
				B.Tech.CSE<br><br>B.Tech.Business Systems<br><br>M.Tech(5year integrated)

			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Electronics Engineering</h3>
			<p>
					B.Tech.ECE<br><br>M.Tech.VLSI(2 years)
			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Business</h3>
			<p class="a">
					BBA<br><br>B.Com.(Finance)
			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Law</h3>
			<p>
					BA LL.B(Hons)<br><br>BBA LL.B(Hons)<br><br>Ph.D Law
			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Mechanical Engineering</h3>
			<p>
					B.Tech.Mechanical
			</p>
		</div>
				</div>

		<div class="row2">
		<div class="course-col2">
			<h3>VIT-AP School of<br>Advanced Sciences</h3>
			<p>
					B.Sc.M.Sc.Data Science with Exit Option<br>B.Sc.Data Science
			</p>
		</div>
		<div class="course-col2">
			<h3>VIT-AP School of<br>Social Sciences & Humanities</h3>
			<p>
					B.A.-M.A.Public Services with Exit Option<br>B.A.
			</p>
		</div>
		<div class="course-col2">
			<h3>Ph.D.</h3>
			<p>
					The Ph.D. programme at VIT-AP admits bright students to carry out research in engineering, basic sciences, humanities and management disciplines.
			</p>
		</div>
		</div>
	</div>


</section>



<!------- Footer -------->
<section class="footer">
	<h4>About Us</h4>
	<p>With a history of 32 years of innovation in educational and research domain, VIT  has been a forerunner in delivering quality education.<br>Consistently ranked among the top educational institutes in the country, the VIT group of institutions have had a proud tradition of pursuing knowledge and excellence.</p>
	<div class="icons">
		<i class="fab fa-facebook"></i>
		<i class="fab fa-instagram"></i>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-linkedin-in"></i>
	</div>
	<p>Made by VIT-AP Students</p>


</section>

<!----------JavaScript Menu-------->
<script>
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}



</script>

</body>
</html>