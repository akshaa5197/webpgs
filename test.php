<html>

<HEAD>





<style type="text/css">
body
{
    background-color: DodgerBlue;
}
h1 {
    background-color: lightgreen;
}


    ul{
        padding: 0;
        list-style: none;
        background:white;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
</style>
</head>
<body>
    













</style>
</head>
<body>


<center><u style="color:red;"><h1 style="border: 2px solid red;" style>
JM PAPERSALES</h1></u></center> </body>
<hr>
<br>



<div class="col-xs-12 col-md-6"> 
                    <div class="hero-col-2"> 

                        <center><h1 class="hero-title" style="border: 5px solid black;">WHAT WE DO?</h1></center> 
                        <div class="banners row"> 
                            
                        </div><!--end banners--> 

<marquee > <font size="5" align="center"><b>PAPER</b></font></marquee>
<marquee onmouseover="this.setAttribute('scrollamount', 3, 0);" onmouseout="this.setAttribute('scrollamount', 10, 0);" >
<img src="images.png " width="30%" height="200px" scrolldelay="2">

<img src="images1.jpg " width="30%" height="200px" scrolldelay="2">
<img src="images2.jpg" width="30%" height="200px" scrolldelay="2">

</marquee>
<marquee direction="right" > <font size="5" align="center"><b>REXINE</b></font></marquee>
<marquee direction="right"onmouseover="this.setAttribute('scrollamount', 3, 0);" onmouseout="this.setAttribute('scrollamount', 10, 0);"><img src="download.jpg " width="49%" height="200px" direction="right">
<img src="download1.jpg " width="49%" height="200px">
<img src="download2.jpg " width="49%" height="200px">
<img src="images.png " width="49%" height="200px">
</marquee>



<div style="text-align:center;font-size:140%;background-color:black;padding:15px">
			<a id="heading" style="color:white;font-size:180%"> <b> ABOUT US </b> </a>





<ul>

			<li><a href="homepage.html"><font color="red"><b> HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font> </a></li> 
			<li><a href="register.html"><font color="red"> PRODUCTS </font></a>
 <ul class="dropdown">
                <li><a href="paper.html" style="bgcolor:black;">Paper</a></li>
                <li><a href="rex.html">Rexine</a></li>
                
            </ul>
        </li>

			<li><a href="login.html"> <font color="red">REGISTER </font></a>
<ul class="dropdown">
                <li><a href="regemp.php" style="bgcolor:black;">as Employee</a></li>
                <li><a href="#">as Customer</a></li>
                
            </ul>
</li> 
			<li><a href="contactus.html"><font color="red">CONTACT US </b></font></a></li>
</ul>
		</div>	

 <img src="Plotter_Paper_Rolls.jpg " width="49%" height="412px">
<img src="Plotter_Paper_Rolls.jpg " width="49%" height="412px">
 <p>JM PAPER SALES incorporated on 09th March,1995 is a highly dynamic and rapidly growing Trading Company whose annual revenues exceed Rs.4000 Million (US $ 65 Million). The Company has a diversified Business Portfolio in Trading of Packaging grades of paper and paperboards, tissue papers, iron & steel, besides trading of commodities the Company enjoys a strong Leadership position in the Kraft/ Liner board segment.
 
JM PAPER SALES, is a one-stop- paper Solutions shop, enabling customers to source the widest range of papers and boards at single window. NPML has build a great relationship with the leading Paper Manufacturing companies of India to fulfill the needs of his valued customers.    
</p>

<form>
<div id="back" style="background-color:red;color:white;padding:55px;width:359px;margin-center:920px">
				<form style="font-size:180%">
					YOUR NAME <br>
					<input type="text" name="skill"> 
					<br>
					<br>
					OUR LOCATIONS <br>
						<select name="office location">
							<option value="location"> Delhi </option>
							<option value="national"> Badarpur </option>
							<option value="international"> Faridabad </option>
						</select>
<form><input type="submit"></form></div>
<hr>
<img src="giphy.gif " align="upright" width="105%" height="200px">





</form>




<?php
if (empty($_POST["Name"]))
{
$errName="required field";
}
else
{
echo Name;
}?>



</html>

