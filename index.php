<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "harunnoreply@gmail.com";
$mail->Password   = "petd1narka";



if ( isset( $_POST['submit'] ) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment =$_POST['comment'];
    $content = "Email from: ".$_POST['email']."<br>"
        ."<b>".$_REQUEST['comment'];
    $mail->IsHTML(true);
    $mail->AddAddress("harunnoreply@gmail.com", "recipient-name");
    $mail->SetFrom($email,$name);
    $mail->Subject = "CV Web Page Comment";
if (!$_POST['name']){
    $error="<br/>Please enter your name";
}
if (!$_POST['email']){
    $error.="<br/>Please enter your email adress";
}
if (!$_POST['comment']){
    $error.="<br/>Please enter your comment";
}
if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error.="<br/> Please enter a valid email adress";
}
if ($error){
    $result='<div class="alert alert-danger"><strong>There were error(s) in your submisson:</strong>'.$error.'</div>';}
    else {
        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } else {
            echo "Email sent successfully";
        }
    }

}

error_reporting(E_ALL ^ E_NOTICE);


?>

<!doctype html>
<html>
<head>
    <title>Curriculum Vitae Harun Hasic</title>
	   
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <link rel="stylesheet" type"text/css" href="style.css">

</head>
	
<body>

	<div class="container bg" .img-fluid>


		<div  data-aos="fade-right" data-aos-duration="900" id="topbar">
		
			<div class="fixedWidth">
				
				
				
				
				<div id="logoDiv">
				<img src="Images/cv-logo.jpg" height=60px width=60px/>
				
				</div>
				
				<div id="gameDiv">
				<a href="minigame.html"><img src="Images/game.png"/>MiniGame</a>
				
				</div>
			
			<div id="topMenuDiv">
			<ul>
                <li><a href="#home">Home</a></li>
				<li><a href="#About me">About Me</a></li>
				<li><a href="#Edu">Education & Experience</a></li>
				<li><a href="#Contact">Contact</a></li>
			</ul>
			
			
			</div>



			</div>
			</div>
		<div class="break"></div>
	
	
	<div data-aos="fade-up"
         data-aos-duration="900" id="contentBar">
        <a name="home"/>
		<p>Welcome to my Curriculum Vitae Website</p>
	
		
			<div class="fixedWidth">
				
				
			</div>
			
		</div>
				<div class="break"></div>

		<div data-aos="fade-up"
             data-aos-duration="1000" class=scroll1>
			<img src="Images/Harun4.png" />
		</div>
		<div class="fixedWidth">
		<div data-aos="fade-right"
             data-aos-duration="1000" class="content">
		<a name="About me"/>
		<h1 center>About me</h1>

			<p>My name is Harun Hasic and I am from Bosnia and Herzegovina. I was born in a town called Zenica in 1998. I am 21 years old.</br>A highly motivated 3<sup>rd</sup> year Software Engineering student at the International University of Sarajevo.	Mostly interested in developing smart software solutions using <em>Java</em> programming language.<br/>
	Experienced in <strong>Java</strong> and <strong>Java Spring Boot</strong> framework.</br>
                Experienced in front and back end development using the latest HTML, CSS, JS, jQuery, Bootstrap and PHP technologies.</br> I have great experience at working in teams, which grew even more on my intership.
	Friendly, communicative and open minded. Always ready for a new challenge and currently looking for a intership or part-time employment opportunity<br/>
            </p>

		</div>
	<div data-aos="fade-left" data-aos-duration="1000" class="scroll2" .img-fluid>
	<a name="Edu"/>
	<h1>Education and Employment history</h1>
	<ul>
	<dl> 
	<li>2013-2017 - Prva gimnazija Zenica</li>
	<li>2017-Preset - International University of Sarajevo - Software Engineering</li>
	<li><dt>2018 - ComTrade Summer Intership</dt>
	
	 <dd>Interhsip in a company called ComTrade, located in Sarajevo.<br/>The task was to make a Travel Activity Tracker App using Java Spring Boot. Database used was PostgreSQL.<br/>
	 The project was called Travel Activity Tracker, and the user could book a hotel from a variety of options. 
	 After the hotel was booked, the user would be given a map in which the user could see the route He is supposed to take.<br/> If the hotel was closer than 300km the user would be given a road map.
	 If the hotel was  more than 300km away, the user would be shown a world map with a plane animation flying from the closest airport to the destination.</br>
	 I was responsible for the Front end mostly, a little of back end, and for the map interface.<br/></dd></li>
	 
	 	<h1>Technologies that I have learned and used</h1>
	<ol type="A">
	<li>C++ - Moderate knowledge</li>
	<li>Java - Upper intermediate knowledge of the <em>Java</em> programming language. Moderate knowledge in the Spring Boot framework.</li>
	<li>Databases - Experienced in using PostgreSQL and MySQL databases.</li>
	<li>HTML, CSS, jQuery, Bootstrap, PHP - Intermediate knowledge in the web development segment.</li>
	<li>Microsoft Office Word, Excel, PowerPoint, Access</li>
	</ol>


	 </dl>
	
	
	</ul>
		</div>
        </div>

		<div data-aos="fade-up"
             data-aos-duration="1000"  class="scroll3">
		<a name="Contact"/>

			<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-6 col-md-offset-3 contactForm" >

							<h1>Contact Me!</h1>
                            <?php echo $result?>
							<p class="lead">For any questions, offers and promotions, please use this contact form.</p>
							<form method="POST" action="">
								<div class="form-group">
									<label for="name">Your name: </label>
									<input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name'];?>"/>
								</div>

								<div class="form-group">
									<label for="email">Your email: </label>
									<input type="text" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email'];?>"/>
								</div>

								<div class="form-group">
									<label for="comment">Your comment: </label>
									<textarea class="form-control" name="comment"/><?php echo $_POST['comment'];?></textarea>
								</div>

								<input type="submit" name="submit" classs="btn btn-success btn-lg" value="Submit"/>

							</form>
						</div>
					</div>

			</div>
            <h1>Social networks</h1>
<div style="display:flex;justify-content:center;align-items:center;">

	<table>
	<tr><th><a href=" https://github.com/harunhasic"><img border="0" alt="GitHub" src="Images/github.png" width="70" height="70"></a></th>
        <th><a href="https://www.instagram.com/harunhasicc/"><img border="0" alt="Instagram" src="Images/insta.png" width="65" height="65"></a></th>
        <th><a href="https://www.facebook.com/harunze"><img border="0" alt="Facebook" src="Images/facebook.png" width="70" height="70" ></a></th>
	</table>
		</div>
		</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript">
                AOS.init();
		</script>

</body>
</html>
