<!-- start session -->
<?php session_start() ?>
<!-- header -->
<?php include 'shared/top.php' ?>

<body>

<!-- Nav bar -->
<?php include 'shared/menu.php' ?>

<div class="container">

           <!--Grid with 2 rows-->
            <div class="flex">
                <!--Introdution myself-->
                <header class="flex-1">
                    <div class="myname">   
                        <h3>I am</h3>
                        <h1>Allan Campos</h1>
                        <h2>Oracle DBA/Developer</h2>
                    </div>
        
                    <div class="about">
                    <p>About me </br></br>
                        Professional with 2 years and a half experience in the field of Information Technology in search 
                       of growth and improvement in the technological practices.</br></br> 
                        Has an IT certification, Oracle Database 12c: Fundamentals of SQL - Exam 1Z0-061.
                       Graduate in Computer Science at the Federal University of Maranhão - UFMA</p>
                    </div>
                    <br><br> 
                    
                    <button type="button" class="button-blue" 
                    onclick= "swal ('Uptime, backup and recover' , 'There is NO such thing as 100% uptime! Although there is great engineering, expertise and knowledge, great architecture carefully mapped-out and state-of-the-art infrastructure,no one can truly guarantee 100% Uptime. It is impossible for infrastructures to not face even the slightest of hiccups. Be it a bug, a technical issue, bad weather conditions or a security incident. There are so many things that can go wrong and at some point, they will: System Failures; Power and Network Failures; Third party services failures; DDoS attacks; Security Breaches; Hacking Activity; Extreme weather conditions and natural disasters; Maintenance Issues. Backup and recovery describes the process of creating and storing copies of data that can be used to protect organizations against data loss. This is sometimes referred to as operational recovery. Recovery from a backup typically involves restoring the data to the original location, or to an alternate location where it can be used in place of the lost or damaged data.')"> Researched</button>

                


                </header> 
                <!--This part talk about me-->
                <div class="flex-2">
                    <img src="img/bg03.png" alt="Image" class="img">
                    <!--Button to get my resume in pdf-->
                    <div class="button-resume">
                    <button type="button" class="button-blue"><a href="file/Allan_Campos_original.pdf" class="link" download="resume" target="_blank">Get resume</a></button>
                    </div>  
                </div> 
            
            </div>
            <!--Copyright-->
<?php include 'shared/bottom.php' ?>           