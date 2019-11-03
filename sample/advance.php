<?php include ('server.php') ?>

<html>
    <head>
        <title> Form</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <center> <img src="MKU.png"> </center>
        <hr> </hr>
        <h2> Course Advancement Form</h2>
            <div class="container">
                <form method="post" action="server.php">
                    <div class="row">
                        <div class="col-20">
                            <label for="FullName"> FULL NAME</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="FullName" name="FullName" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="RegNo">REGISTRATION NUMBER</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="RegNo" name="RegNo" placeholder="Your Registaration Number..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="IdNo">ID NUMBER</label>
                        </div>
                        <div class="col-20">
                            <input type="text" id="IdNo" name="IdNo" placeholder="Your ID Number..">
                        </div>
                
                        <div class="row">
                            <div class="col-20">
                                <label for="MobileNo"> &nbsp &nbsp &nbsp &nbsp &nbsp MOBILE NUMBER</label>
                            </div>
                            <div class="col-35">
                                <input type="text" id="MobileNo" name="MobileNo" placeholder="Your Mobile Number..">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="HomeTown">HOME TOWN</label>
                        </div>
                        <div class="col-20">
                            <input type="text" id="HomeTown" name="HomeTown" placeholder="Your Home Town..">
                        </div>
                        
                        <div class="row">
                            <div class="col-20">
                                <label for="email"> &nbsp &nbsp &nbsp &nbsp &nbsp EMAIL</label>
                            </div>
                            <div class="col-35">
                                <input type="text" id="email" name="email" placeholder="Your Email..">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="NextOfKin">NEXT OF KIN</label>
                        </div>
                        <div class="col-20">
                            <input type="text" id="NextOfKin" name="NextOfKin" placeholder="Your Next Of Kin..">
                        </div>
                   
                        <div class="row">
                            <div class="col-20">
                                <label for="PhoneNo"> &nbsp &nbsp &nbsp &nbsp &nbsp PHONE NUMBER</label>
                            </div>
                            <div class="col-35">
                                <input type="text" id="PhoneNo" name="PhoneNo" placeholder="Next Of Kin Phone Number..">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="Programme">PROGRAMME</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="Programme" name="Programme" placeholder="Your Programme..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="School">SCHOOL</label>
                            </div>
                        <div class="col-75">
                            <select name="School">
                                <option value="Computing & Informatics">School of Computing & Informatics</option>
                                <option value="Pure & Applied Sciences">School of Pure & Applied Sciences</option>
                                <option value="Social Sciences">School of Social Sciences</option>
                                <option value="Medicine">School of Medicine</option>
                                <option value="Engineering">School of Engineering</option>
                                <option value="Hospitality & Tourism">School of Hospitality & Tourism </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="Department">DEPARTMENT</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="Department" name="Department" placeholder="Your Department..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="date">DATE</label>
                        </div>
                        <div class="col-75">
                            <input type="Date" id="cdate" name="Date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="CurrentCourse">CURRENT COURSE </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="CurrentCourse" name="CurrentCourse" placeholder="Your Current Course..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="StudyMode">STUDY MODE</label>
                        </div>
                        <div class="col-75">
                            <select name="StudyMode">
                                <option value="regular">Regular</option>
                                <option value="weekend">Weekend</option>
                                <option value="evening">Evening</option>
                                <option value="distant">Distant</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="NewCourse">NEW COURSE <br>
                            <i>(For advancement in education courses indicate teaching subject)</i></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="NewCourse" name="NewCourse" placeholder="Your New Course..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label for="StudyMode2">STUDY MODE</label>
                        </div>
                        <div class="col-75">
                            <select name="StudyMode2">
                                <option value="regular">Regular</option>
                                <option value="weekend">Weekend</option>
                                <option value="evening">Evening</option>
                                <option value="distant">Distant</option>
                            </select>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-20">
                             <label for="CommenceDate">COMMENCEMENT DATE<br><br>
                                <i>(<b>NB: </b>Upload all the Result Slips/Transcripts of the previous Course, Completion letter/
                                Certificate of Previous Course, Form Four Certificate, National ID and Secondary School
                                leaving Certificate)
                                </i>
                             </label>
                         </div>
                         <div class="col-75">
                             <input type="date" id="CommenceDate" name="CommenceDate">
                         </div>
                     </div> 
                     <br> <br>
                     <center>
                     <form action="upload.php" method="post" enctype="multipart/form-data">
                        SELECT FILES TO UPLOAD:
                        <input type="file" name="fileToUpload" id="fileToUpload" multiple>
                        <input type="submit" value="Upload Docs" name="submit">
                    </form> 
                    </center>
                    <br><br><br>
                   
                    <center>
                    <div class="row">
                        <input type="submit" name="advance" value="Submit">
                    </div>
                    </center>
                </form>
            </div>
        </body>
