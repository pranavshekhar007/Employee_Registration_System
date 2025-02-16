<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

/* .tablink:hover {
  background-color: #008040;
} */

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
 
  display: none;
  padding: 100px 20px;
  height: 100%;
}

.tablink.active {
    background-color: #0066cc; /* Set the background color for active tab */
    color: white; /* Set the text color for active tab */
  }

form {
    max-width: 1000px;
    margin: 0 auto;
    width: 100%; /* Set width to 100% for full-screen */
    max-width: 900px; /* You can adjust the max-width as needed */
    background-color: #ffffff;
    border: 2px solid #000000;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input,
select {
    width: 100%;
    padding: 8px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-sizing: border-box;
}
textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
  border: 1px solid #0066cc;
  background-color: #0099cc;
  color: #ffffff;
  padding: 5px 10px;
}

button:disabled,
button[disabled]{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #666666;
}

/* button:hover {
    background-color: #45a049;
} */

table {
    border-collapse: collapse;
    width: 100%;
    margin: 10px auto;
    border-radius: 1px;
    padding: 22px;
    border: 1px solid #000000;
}

th, td {
    border: 1px solid #ddd;
    padding: 2px;
    text-align: center;
    border-radius: 1px;
    padding: 2px;
    border: 1px solid #000000;
}

th {
    background-color: #f2f2f2;
}

.ui-datepicker {
    background-color: #fff;
    border: 1px solid #ccc;
}
        
</style>
</head>
<body>

<button class="tablink" onclick="openPage('tab1', this, 'green')" id="defaultOpen">PERSONAL INFO</button>
<button class="tablink" onclick="openPage('tab2', this, 'green')">EDUCATIONAL INFO</button>
<button class="tablink" onclick="openPage('tab3', this, 'green')">EXPERIENCE</button>
<button class="tablink" onclick="openPage('tab4', this, 'green')">RESEARCH & REFERENCE</button>

<div class="tabcontent" id="tab1">

    <form id="employmentForm1" name="employmentForm1"  method="post"  enctype="multipart/form-data">
        
        <table border="1">
            <tbody>
                <tr> 
                    <th colspan="6"><h2>LLOYD EMPLOYMENT APPLICATION FORM</h2></th>
                </tr>
                <tr>
                    <th>Post Applied For:</th><td colspan="2"><input type="text" id="postApplied" name="postApplied"  placeholder="Enter Position" ></td>
                    <th>Specialization:</th><td colspan="3"><input type="text" id="Specialization" name="Specialization" placeholder="Enter Specialization" ></td>
                </tr>
                <tr>
                    <th>Full Name:</th><td><input type="text" id="fullName" name="fullName" placeholder="Enter Full Name" ></td>
                    <th>Father's Name:</th><td><input type="text" id="fatherName" name="fatherName" placeholder="Enter Father's Name" ></td>
                    <th>Spouse Name:</th><td><input type="text" id="spouseName" name="spouseName" placeholder="Enter Spouse Name" ></td>
                </tr>
                <tr>
                    <th>Gender:</th><td><select id="gender" name="gender" placeholder="Post Name" >
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select></td>
                    <th>Marital Status:</th><td><select id="maritalStatus" name="maritalStatus" placeholder="Post Name" >
                        <option value="" disabled selected>Select your marital status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select></td>
                    <th>Category:</th><td><select id="category" name="category" placeholder="Post Name" >
                        <option value="" disabled selected>Select your category</option>
                        <option value="general">General</option>
                        <option value="obc">OBC</option>
                        <option value="sc">SC</option>
                        <option value="st">ST</option>
                    </select></td>
                <tr>
                    <th>Nationality:</th><td colspan="2"><input type="text" id="nationality" name="nationality" placeholder="Enter Nationality" ></td>
                    <th>Date of Birth:</th><td colspan="2"><input type="text" id="dob" name="dob" placeholder="Enter DOB" ></td>
                </tr>
                <tr>
                    <th>Pan Card Number:</th><td colspan="2"><input type="text" id="panNumber" name="panNumber" placeholder="Enter PAN No" ></td>
                    <th>Aadhar Card Number:</th><td colspan="2"><input type="text" id="aadharNumber" name="aadharNumber" placeholder="Enter Aadhar No" ></td>
                </tr>
                <tr>
                    <th colspan="3">Upload Photograph:</th>
                    <td colspan="3"><input class="file-upload-input" type="file" accept="image/*" id="personImage" name="personImage" placeholder="Upload Photograph" ></td>
                </tr>
                <input type="hidden" id="formType" name="formType" placeholder="Enter Form Type" value="personal">
            </tbody>
        </table>
        <table border="1">
            <tbody>        
                <tr> 
                    <th colspan="6">ADDRESS FOR COMMUNICATION</th>

                </tr>
                <tr>
                    <th>Address:</th><td><input type="text" id="address" name="address" placeholder="Enter Address" ></td>
                    <th>City:</th><td><input type="text" id="city" name="city" placeholder="Enter City" ></td>
                    <th>Pin Code:</th><td><input type="text" id="pinCode" name="pinCode" placeholder="Enter PIN" ></td>
                </tr>
                <tr>
                    <th>Email ID:</th><td><input type="text" id="email" name="email" placeholder="Enter Email" required></td>
                    <th>Mobile No:</th><td><input type="text" id="mobileNo1" name="mobileNo1" placeholder="Enter Mobile" required></td>
                    <th>Alternate Mobile No:</th><td><input type="text" id="mobileNo2" name="mobileNo2" placeholder="Enter Mobile" ></td>
                </tr>
            </tbody>
        </table>
        
        
        <button id="submitBtn1" type="submit">Submit</button>
    <button id="nextBtn1" name="nextBtn1" onclick="nextTab()" type="button" disabled>Next</button>
    </form>
</div>

<div class="tabcontent" id="tab2">
  
    <form id="employmentForm2" action="employeeRegistration2.php" method="post">
        
        <input type="hidden" name="person_id" id="person_id">
        <table border="1">
            <tbody>
                <tr> 
                    <th colspan="7"><h2>LLOYD EMPLOYMENT APPLICATION FORM</h2></th>
                </tr>
                <tr>
                    <th colspan="7">EDUCATION</th>
                </tr>
                <tr>
                    <th>Level</th>
                    <th>Program</th>
                    <th>School/College</th>
                    <th>Board/University</th>
                    <th>Year</th>
                    <th>%/CGPA</th>
                    <th>Specialization</th>
                </tr>
                <tr>
                    <th>PhD</th>
                    <td><div><input type="text" id="phd1" name="phd1" placeholder="Program Name"></div></td>
                    <td><div><input type="text" id="phd2" name="phd2" placeholder="School/College Name"></div></td>
                    <td><div><input type="text" id="phd3" name="phd3" placeholder="Board/University"></div></td>
                    <td><div><input type="text" id="phd4" name="phd4" placeholder="Passed Year"></div></td>
                    <td><div><input type="text" id="phd5" name="phd5" placeholder="Your %/CGPA"></div></td>
                    <td><div><input type="text" id="phd6" name="phd6" placeholder="Specialization"></div></td>
                </tr>
                <tr>
                    <th>PG</th>
                    <td><div><input type="text" id="pg1" name="pg1" placeholder="Program Name"></div></td>
                    <td><div><input type="text" id="pg2" name="pg2" placeholder="School/College Name"></div></td>
                    <td><div><input type="text" id="pg3" name="pg3" placeholder="Board/University"></div></td>
                    <td><div><input type="text" id="pg4" name="pg4" placeholder="Passed Year"></div></td>
                    <td><div><input type="text" id="pg5" name="pg5" placeholder="Your %/CGPA"></div></td>
                    <td><div><input type="text" id="pg6" name="pg6" placeholder="Specialization"></div></td>
                </tr>
                <tr>
                    <th>
                        UG
                    </th>
                    <td><div><input type="text" id="ug1" name="ug1" placeholder="Program Name" required></div></td>
                    <td><div><input type="text" id="ug2" name="ug2" placeholder="School/College Name" required></div></td>
                    <td><div><input type="text" id="ug3" name="ug3" placeholder="Board/University" required></div></td>
                    <td><div><input type="text" id="ug4" name="ug4" placeholder="Passed Year" required></div></td>
                    <td><div><input type="text" id="ug5" name="ug5" placeholder="Your %/CGPA" required></div></td>
                    <td><div><input type="text" id="ug6" name="ug6" placeholder="Specialization"></div></td>
                </tr>
                <tr>
                    <th>10th</th>
                    <td><div><input type="text" id="marks_10th1" name="marks_10th1" placeholder="Program Name" required></div></td>
                    <td><div><input type="text" id="marks_10th2" name="marks_10th2" placeholder="School/College Name" required></div></td>
                    <td><div><input type="text" id="marks_10th3" name="marks_10th3" placeholder="Board/University" required></div></td>
                    <td><div><input type="text" id="marks_10th4" name="marks_10th4" placeholder="Passed Year" required></div></td>
                    <td><div><input type="text" id="marks_10th5" name="marks_10th5" placeholder="Your %/CGPA" required></div></td>
                    <td><div><input type="text" id="marks_10th6" name="marks_10th6" placeholder="Specialization"></div></td>
                </tr>
                <tr>
                    <th>12th</th>
                    <td><div><input type="text" id="marks_12th1" name="marks_12th1" placeholder="Program Name" required></div></td>
                    <td><div><input type="text" id="marks_12th2" name="marks_12th2" placeholder="School/College Name" required></div></td>
                    <td><div><input type="text" id="marks_12th3" name="marks_12th3" placeholder="Board/University" required></div></td>
                    <td><div><input type="text" id="marks_12th4" name="marks_12th4" placeholder="Passed Year" required></div></td>
                    <td><div><input type="text" id="marks_12th5" name="marks_12th5" placeholder="Your %/CGPA" required></div></td>
                    <td><div><input type="text" id="marks_12th6" name="marks_12th6" placeholder="Specialization"></div></td>
                </tr>
                
                <tr><th>Any Other</th>
                    <td><div><input type="text" id="any_other1" name="any_other1" placeholder="Program Name"></div></td>
                    <td><div><input type="text" id="any_other2" name="any_other2" placeholder="School/College Name"></div></td>
                    <td><div><input type="text" id="any_other3" name="any_other3" placeholder="Board/University"></div></td>
                    <td><div><input type="text" id="any_other4" name="any_other4" placeholder="Passed Year"></div></td>
                    <td><div><input type="text" id="any_other5" name="any_other5" placeholder="Your %/CGPA"></div></td>
                    <td><div><input type="text" id="any_other6" name="any_other6" placeholder="Specialization"></div></td>
                </tr>
               
            </tbody>
        </table>
        
        <button id="submitBtn2" type="submit">Submit</button>
    <button id="nextBtn2" onclick="nextTab()" type="button" disabled>Next</button>
    </form>
</div>

<div class="tabcontent" id="tab3">
  
    <form id="employmentForm3" action="employeeRegistration3.php" method="post">
    <input type="hidden" name="education_id" id="education_id">
    <input type="hidden" name="edu_person_id" id="edu_person_id">
        <table border="1">
            <tbody>
                <tr> 
                    <th colspan="6"><h2>LLOYD EMPLOYMENT APPLICATION FORM</h2></th>
                </tr>
                <tr>
                    <th colspan="5">EXPERIENCE ( in reverse chronological order, starting with latest)</th>
                    <td><label for="experience">Total year of Experience:</label><input type="text" id="experience" name="experience" placeholder="Your Experience" ></td>
                </tr>
                <tr>
                    <th></th>
                    <th>Organisation</th>
                    <th>Post</th>
                    <th>Date of Joining</th>
                    <th>Date Leaving</th>
                    <th>Salary*</th>
                </tr>
                <tr>
                    <th rowspan="5">Academics</th>
                    <td><div><input type="text" id="acm_org1" name="acm_org1" placeholder="Organisation Name" required></div></td>
                    <td><div><input type="text" id="acm_post1" name="acm_post1" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="acm_joiningDate1" name="acm_joiningDate1" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="acm_leavingDate1" name="acm_leavingDate1" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="acm_salary1" name="acm_salary1" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="acm_org2" name="acm_org2" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="acm_post2" name="acm_post2" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="acm_joiningDdate2" name="acm_joiningDdate2" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="acm_leavingDate2" name="acm_leavingDate2" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="acm_salary2" name="acm_salary2" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="acm_org3" name="acm_org3" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="acm_post3" name="acm_post3" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="acm_joiningDdate3" name="acm_joiningDdate3" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="acm_leavingDate3" name="acm_leavingDate3"placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="acm_salary3" name="acm_salary3" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="acm_org4" name="acm_org4" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="acm_post4" name="acm_post4" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="acm_joiningDdate4" name="acm_joiningDdate4" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="acm_leavingDate4" name="acm_leavingDate4" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="acm_salary4" name="acm_salary4" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="acm_org5" name="acm_org5" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="acm_post5" name="acm_post5" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="acm_joiningDdate5" name="acm_joiningDdate5" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="acm_leavingDate5" name="acm_leavingDate5" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="acm_salary5" name="acm_salary5" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <th rowspan="5">Industry</th>
                    <td><div><input type="text" id="ind_org1" name="ind_org1" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="ind_post1" name="ind_post1" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="ind_joiningDate1" name="ind_joiningDate1" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="ind_leavingDate1" name="ind_leavingDate1" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="ind_salary1" name="ind_salary1" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="ind_org2" name="ind_org2" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="ind_post2" name="ind_post2" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="ind_joiningDate2" name="ind_joiningDate2" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="ind_leavingDate2" name="ind_leavingDate2" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="ind_salary2" name="ind_salary2" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="ind_org3" name="ind_org3" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="ind_post3" name="ind_post3" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="ind_joiningDate3" name="ind_joiningDate3" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="ind_leavingDate3" name="ind_leavingDate3" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="ind_salary3" name="ind_salary3" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="ind_org4" name="ind_org4" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="ind_post4" name="ind_post4" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="ind_joiningDate4" name="ind_joiningDate4" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="ind_leavingDate4" name="ind_leavingDate4" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="ind_salary4" name="ind_salary4" placeholder="Salary"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="ind_org5" name="ind_org5" placeholder="Organisation Name"></div></td>
                    <td><div><input type="text" id="ind_post5" name="ind_post5" placeholder="Post Name"></div></td>
                    <td><div><input type="text" id="ind_joiningDate5" name="ind_joiningDate5" placeholder="Joining Date"></div></td>
                    <td><div><input type="text" id="ind_leavingDate5" name="ind_leavingDate5" placeholder="Leaving Date"></div></td>
                    <td><div><input type="text" id="ind_salary5" name="ind_salary5" placeholder="Salary"></div></td>
                </tr>
                
            </tbody>
        </table>
        

        <button id="submitBtn3" type="submit">Submit</button>
    <button id="nextBtn3" onclick="nextTab()" type="button" disabled>Next</button>
    </form>
</div>

<div class="tabcontent" id="tab4">
  
    <form id="employmentForm4" action="employeeRegistration4.php" method="post">
    <input type="hidden" name="reac_education_id" id="reac_education_id">  
    <input type="hidden" name="reac_person_id" id="reac_person_id">
    <input type="hidden" name="experience_id" id="experience_id">
        <table border="1">
            <tbody>
                <tr> 
                    <th colspan="6"><h2>LLOYD EMPLOYMENT APPLICATION FORM</h2></th>
                </tr>
                <tr>
                    <th colspan="4">RESEARCH EXPERTISE</th>
                </tr>
                <tr>
                    <th width="20%">Area of Research Interest</th>
                    <td colspan="3"><input type="text" id="researchArea" name="researchArea" placeholder="Enter Your Interest" ></td>
                </tr>
                <tr>
                    <th>International Journals</th><td><input type="text" id="internationalJournals" name="internationalJournals" placeholder="International Journals" ></td>
                    <th>National Journals</th><td><input type="text" id="nationalJournals" name="nationalJournals" placeholder="National Journals" ></td>

                </tr>
                <tr>
                    <th>Oral Presentation in Conferences</th><td><input type="text" id="oralPresentation" name="oralPresentation" placeholder="Oral Presentation" ></td>
                    <th>Books</th><td><input type="text" id="books" name="books" placeholder="Books" ></td>

                </tr>
                <tr>
                    <th>Books Chapters</th><td><input type="text" id="bookChapters" name="bookChapters" placeholder="Book Chapters" ></td>
                    <th>Patents</th><td><input type="text" id="patents" name="patents" placeholder="Patents" ></td>
                </tr>
            </tbody>
        </table>
        <table border="1">
            <tbody>
                <tr>
                    <th colspan="6">Cumulative Impact Factor (Thomson Reuters Only)</th>
                </tr>
                <tr>
                    <th>PhD projects guided</th><td><input type="text" id="phdprojectsGuided" name="phdprojectsGuided" placeholder="PhD Guided" ></td>
                    <th>PG Projects guided</th><td><input type="text" id="pgprojectsGuided" name="pgprojectsGuided" placeholder="PG Guided" ></td>
                    <th>UG Projects guided</th><td><input type="text" id="ugprojectsGuided" name="ugprojectsGuided" placeholder="UG Guided" ></td>
                </tr>
                
                <tr>
                    <th>Consultancy Generated (Rs.)</th><td colspan="2"><input type="text" id="consul_gen_payment" name="consul_gen_payment" placeholder="Enter Rs." ></td>
                    <th>Research Grants (Rs.)</th><td colspan="2"><input type="text" id="res_grants_pay" name="res_grants_pay" placeholder="Enter Rs." ></td>
                </tr>
            </tbody>
        </table>
        
        <table border="1">
            <tbody>
                <tr>
                    <th colspan="2">GENERAL  INFORMATION</th>
                </tr>
                <tr>
                    <td width="40%">Where did you hear about us?</td>
                    <td><input type="text" id="ans1" name="ans1" placeholder="Your Answer" ></td>
                </tr>
                <tr>
                    <td>Would you be ready to sign bond I contract to work with us for 2 year?</td>
                    <td><input type="text" id="ans2" name="ans2" placeholder="Your Answer" ></td>
                </tr>
                <tr>
                    <td>Why should we be recruiting you?</td>
                    <td><input type="text" id="ans3" name="ans3" placeholder="Your Answer" ></td>
                </tr>
                <tr>
                    <td>What value addition can you bring to Lloyd?</td>
                    <td><input type="text" id="ans4" name="ans4" placeholder="Your Answer" ></td>
                </tr>
            </tbody>
        </table>
        <table  border="1">
            <tbody>
                <tr>
                    <th colspan="5">REFERENCES</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Mobile No.</th>
                    <th>E.mail</th>
                </tr>
                <tr>
                    <td><div><input type="text" id="name1" name="name1" placeholder="Your Name"></div></td>
                    <td><div><input type="text" id="designation1" name="designation1" placeholder="Your Designation"></div></td>
                    <td><div><input type="text" id="organization1" name="organization1" placeholder="Organization Name"></div></td>
                    <td><div><input type="text" id="mob1" name="mob1" placeholder="Your Mob No"></div></td>
                    <td><div><input type="text" id="email1" name="email1" placeholder="Your Mail Id"></div></td>
                </tr>
                <tr>
                    <td><div><input type="text" id="name2" name="name2" placeholder="Your Name"></div></td>
                    <td><div><input type="text" id="designation2" name="designation2" placeholder="Your Designation"></div></td>
                    <td><div><input type="text" id="organization2" name="organization2" placeholder="Organization Name"></div></td>
                    <td><div><input type="text" id="mob2" name="mob2" placeholder="Your Mob No"></div></td>
                    <td><div><input type="text" id="email2" name="email2" placeholder="Your Mail Id"></div></td>
                </tr>
            </tbody>
        </table>
        <table border="1">
            <tbody>
                <tr>
                    <th>ACKNOWLEDGEMENT  & AUTHORIZATION</th>
                </tr>
                <tr>
                    <td>
                        <ol>
                            <li>I Certify that all the information given here is true and complete to the best of my knowledge.</li>
                            <li>I authorize investigation of all statements contained in this application for employment.</li>
                            <li>I understand that false I misleading given in application I interview may result in disqualification.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><label for="sign">Signature of applicant:</label>
                    <input class="file-upload-input" type="file" onchange="readURL(this)" accept="image/*" id="sign" name="sign" placeholder="Upload Signature" ></td>
                </tr>
                
            </tbody>
        </table>

        <button id="submitBtn4" type="submit">Submit</button>
    </form>
</div>
<!-- <script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
//document.getElementById("defaultOpen").click();
</script> -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        // Initialize Datepicker
        $(function () {
            $("#dob").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });

        
    </script>

<script>
        // Initialize Datepicker
        $(function () {
            $("#acm_joiningDate1").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });

        $(function () {
            $("#acm_leavingDate1").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_joiningDdate2").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_leavingDate2").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_joiningDdate3").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_leavingDate3").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_joiningDdate4").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_leavingDate4").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_joiningDdate5").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#acm_leavingDate5").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_joiningDate1").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_leavingDate1").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_joiningDate2").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_leavingDate2").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_joiningDate3").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_leavingDate3").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_joiningDate4").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_leavingDate4").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_joiningDate5").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
        $(function () {
            $("#ind_leavingDate5").datepicker({
                dateFormat: 'yy-mm-dd', // Set the date format
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0" // Allow selection of birthdates up to 100 years ago
            });
        });
    </script>


</body>
</html> 

<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the first form element
        var form1 = document.getElementById("submitForm1");

        // Add a submit event listener to the form
        form1.addEventListener("submit", function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Perform any additional processing if needed

            // Redirect to the second form
            window.location.href = "#secondTab"; // Assuming #secondTab is the ID of the second form's container
        });
    });
</script> -->

<!-- <script>
  let currentTab = 1;
  showTab(currentTab);

  function showTab(tabNumber) {
    document.getElementById(`tab${tabNumber}`).style.display = "block";
  }

  function hideTab(tabNumber) {
    document.getElementById(`tab${tabNumber}`).style.display = "none";
  }

  function nextTab() {
    hideTab(currentTab);
    currentTab++;
    showTab(currentTab);
    alert ("Submitted Proceed to next");
  }
  
 
</script> -->

<script>
  var currentTab = 0;
  showTab(currentTab);

  function showTab(n) {
    var tabs = document.getElementsByClassName("tabcontent");
    tabs[n].style.display = "block";

    var tablinks = document.getElementsByClassName("tablink");
    tablinks[n].classList.add("active"); // Add the 'active' class to the current tab
  }

  function hideTab(n) {
    var tabs = document.getElementsByClassName("tabcontent");
    tabs[n].style.display = "none";

    var tablinks = document.getElementsByClassName("tablink");
    tablinks[n].classList.remove("active"); // Remove the 'active' class from the current tab
  }

  function nextTab() {
    hideTab(currentTab);
    currentTab++;
    showTab(currentTab);
    alert("Submitted. Proceed to next");
  }
</script>

<!-- <script>
    function validateForm() {
        // Validation for Post Applied For
        var postApplied = document.getElementById("postApplied").value;
        if (postApplied === "") {
            alert("Post Applied For must be filled out");
            return false;
        }



        // You can add more validations for other fields in a similar way.

        // Example: Validation for Email ID
        var email = document.getElementById("email").value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Invalid Email ID");
            return false;
        }

        // Example: Validation for Mobile No
        var mobileNo1 = document.getElementById("mobileNo1").value;
        var mobileRegex = /^\d{10}$/;
        if (!mobileRegex.test(mobileNo1)) {
            alert("Invalid Mobile No");
            return false;
        }

        // You can add more validations as needed.

        // If all validations pass, the form will be submitted
        return true;
    }
</script> -->
<script>
    $(document).ready(function () {
        $("#employmentForm1").submit(function (event) {
            // var formData = {
            //     fullName: $("#fullName").val(),
            //     fatherName: $("#fatherName").val(),
            //     postApplied: $("#postApplied").val(),
            //     gender: $("#gender").val(),
            //     maritalStatus: $("#maritalStatus").val(),
            //     category: $("#category").val(),
            //     nationality: $("#nationality").val(),
            //     panNumber: $("#panNumber").val(),
            //     aadharNumber: $("#aadharNumber").val(),
            //     dob: $("#dob").val(),
            //     personImage: $("#personImage").val(),
            //     formType: $("#formType").val(),
            //     address: $("#address").val(),
            //     city: $("#city").val(),
            //     pinCode: $("#pinCode").val(),
            //     email: $("#email").val(),
            //     mobileNo1: $("#mobileNo1").val(),
            //     mobileNo2: $("#mobileNo2").val(),
            //     Specialization: $("#Specialization").val(),
            //     spouseName: $("#spouseName").val(),           
           
            // };

            var form = $('#employmentForm1')[0];
            var formData = new FormData(form);
            for(  value of  formData.values()){
                console.log(value);
            }
            $.ajax({
                type: "POST",
                url: "employeeRegistration.php",
                data: formData,
                contentType:false,
                cache:false,
                processData:false,
                dataType: "json",
                success: function(result){
                    
                    if(result.message =='success'){
                        alert(result.message);
                        document.getElementById('person_id').value=result.data;
                        document.getElementById('edu_person_id').value=result.data;
                        document.getElementById('reac_person_id').value=result.data;
                       
                        $("#nextBtn1").prop("disabled", false);
                    }
                }
            });
            $("#submitBtn1").prop("disabled", true);
            event.preventDefault();
        });
    });
</script>

<script>
    $(document).ready(function () {
        $("#employmentForm2").submit(function (event) {
            var formData = {
                phd1: $("#phd1").val(),
                phd2: $("#phd2").val(),
                phd3: $("#phd3").val(),
                phd4: $("#phd4").val(),
                phd5: $("#phd5").val(),
                phd6: $("#phd6").val(),
                pg1: $("#pg1").val(),
                pg2: $("#pg2").val(),
                pg3: $("#pg3").val(),
                pg4: $("#pg4").val(),
                pg5: $("#pg5").val(),
                pg6: $("#pg6").val(),
                ug1: $("#ug1").val(),
                ug2: $("#ug2").val(),
                ug3: $("#ug3").val(),
                ug4: $("#ug4").val(),
                ug5: $("#ug5").val(),
                ug6: $("#ug6").val(),
                marks_10th1: $("#marks_10th1").val(),
                marks_10th2: $("#marks_10th2").val(),
                marks_10th3: $("#marks_10th3").val(),
                marks_10th4: $("#marks_10th4").val(),
                marks_10th5: $("#marks_10th5").val(),
                marks_10th6: $("#marks_10th6").val(),
                marks_12th1: $("#marks_12th1").val(),
                marks_12th2: $("#marks_12th2").val(),
                marks_12th3: $("#marks_12th3").val(),
                marks_12th4: $("#marks_12th4").val(),
                marks_12th5: $("#marks_12th5").val(),
                marks_12th6: $("#marks_12th6").val(),
                any_other1: $("#any_other1").val(),
                any_other2: $("#any_other2").val(),
                any_other3: $("#any_other3").val(),
                any_other4: $("#any_other4").val(),
                any_other5: $("#any_other5").val(),
                any_other6: $("#any_other6").val(),
                person_id: $("#person_id").val(),

           
           
            };

            $.ajax({
                type: "POST",
                url: "employeeRegistration2.php",
                data: formData,
                dataType: "json",
                
                success: function(result){
                    console.log(result.data);
                    alert(result.message);
                    if(result.message =='success'){
                        document.getElementById('education_id').value=result.data
                        document.getElementById('reac_education_id').value=result.data
                        
                        $("#nextBtn2").prop("disabled", false);
                    }
                }
            });
            event.preventDefault();
            $("#submitBtn2").prop("disabled", true);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $("#employmentForm3").submit(function (event) {
            var formData = {
                experience: $("#experience").val(),
                acm_org1: $("#acm_org1").val(),
                acm_post1: $("#acm_post1").val(),
                acm_joiningDate1: $("#acm_joiningDate1").val(),
                acm_leavingDate1: $("#acm_leavingDate1").val(),
                acm_salary1: $("#acm_salary1").val(),
                acm_org2: $("#acm_org2").val(),
                acm_post2: $("#acm_post2").val(),
                acm_joiningDate2: $("#acm_joiningDate2").val(),
                acm_leavingDate2: $("#acm_leavingDate2").val(),
                acm_salary2: $("#acm_salary2").val(),
                acm_org3: $("#acm_org3").val(),
                acm_post3: $("#acm_post3").val(),
                acm_joiningDate3: $("#acm_joiningDate3").val(),
                acm_leavingDate3: $("#acm_leavingDate3").val(),
                acm_salary3: $("#acm_salary3").val(),
                acm_org4: $("#acm_org4").val(),
                acm_post4: $("#acm_post4").val(),
                acm_joiningDate4: $("#acm_joiningDate4").val(),
                acm_leavingDate4: $("#acm_leavingDate4").val(),
                acm_salary4: $("#acm_salary4").val(),
                acm_org5: $("#acm_org5").val(),
                acm_post5: $("#acm_post5").val(),
                acm_joiningDate5: $("#acm_joiningDate5").val(),
                acm_leavingDate5: $("#acm_leavingDate5").val(),
                acm_salary5: $("#acm_salary5").val(),
                ind_org1: $("#ind_org1").val(),
                ind_post1: $("#ind_post1").val(),
                ind_joiningDate1: $("#ind_joiningDate1").val(),
                ind_leavingDate1: $("#ind_leavingDate1").val(),
                ind_salary1: $("#ind_salary1").val(),
                ind_org2: $("#ind_org2").val(),
                ind_post2: $("#ind_post2").val(),
                ind_joiningDate2: $("#ind_joiningDate2").val(),
                ind_leavingDate2: $("#ind_leavingDate2").val(),
                ind_salary2: $("#ind_salary2").val(),
                ind_org3: $("#ind_org3").val(),
                ind_post3: $("#ind_post3").val(),
                ind_joiningDate3: $("#ind_joiningDate3").val(),
                ind_leavingDate3: $("#ind_leavingDate3").val(),
                ind_salary3: $("#ind_salary3").val(),
                ind_org4: $("#ind_org4").val(),
                ind_post4: $("#ind_post4").val(),
                ind_joiningDate4: $("#ind_joiningDate4").val(),
                ind_leavingDate4: $("#ind_leavingDate4").val(),
                ind_salary4: $("#ind_salary4").val(),
                ind_org5: $("#ind_org5").val(),
                ind_post5: $("#ind_post5").val(),
                ind_joiningDate5: $("#ind_joiningDate5").val(),
                ind_leavingDate5: $("#ind_leavingDate5").val(),
                ind_salary5: $("#ind_salary5").val(),
                acm_joiningDdate2: $("#acm_joiningDdate2").val(),
                acm_joiningDdate3: $("#acm_joiningDdate3").val(),
                acm_joiningDdate4: $("#acm_joiningDdate4").val(),
                acm_joiningDdate5: $("#acm_joiningDdate5").val(),
                edu_person_id: $("#edu_person_id").val(),
                education_id: $("#education_id").val(),
            };

            $.ajax({
                type: "POST",
                url: "employeeRegistration3.php",
                data: formData,
                dataType: "json",
                
                success: function(result){
                    console.log(result.data);
                    alert(result.message);
                if (result.message == 'success') {
                   
                    document.getElementById('experience_id').value=result.data;
                 
                    $("#nextBtn3").prop("disabled", false);
                }
                }
            });
            event.preventDefault();
            $("#submitBtn3").prop("disabled", true);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $("#employmentForm4").submit(function (event) {
            // var formData = {
            //     researchArea: $("#researchArea").val(),
            //     internationalJournals: $("#internationalJournals").val(),
            //     nationalJournals: $("#nationalJournals").val(),
            //     oralPresentation: $("#oralPresentation").val(),
            //     books: $("#books").val(),
            //     bookChapters: $("#bookChapters").val(),
            //     patents: $("#patents").val(),
            //     phdprojectsGuided: $("#phdprojectsGuided").val(),
            //     pgprojectsGuided: $("#pgprojectsGuided").val(),
            //     ugprojectsGuided: $("#ugprojectsGuided").val(),
            //     consul_gen_payment: $("#consul_gen_payment").val(),
            //     res_grants_pay: $("#res_grants_pay").val(),
            //     ans1: $("#ans1").val(),
            //     ans2: $("#ans2").val(),
            //     ans3: $("#ans3").val(),
            //     ans4: $("#ans4").val(),
            //     name1: $("#name1").val(),
            //     designation1: $("#designation1").val(),
            //     organization1: $("#organization1").val(),
            //     mob1: $("#mob1").val(),
            //     email1: $("#email1").val(),
            //     name2: $("#name2").val(),
            //     designation2: $("#designation2").val(),
            //     organization2: $("#organization2").val(),
            //     mob2: $("#mob2").val(),
            //     email2: $("#email2").val(),
            //     //sign: $("#sign").val(),
            //     reac_person_id: $("#reac_person_id").val(),
            //     reac_education_id: $("#reac_education_id").val(),
            //     experience_id: $("#experience_id").val(),
                
            // };

            var form = $('#employmentForm4')[0];
            var formData = new FormData(form);
            for(  value of  formData.values()){
                console.log(value);
            }
            $.ajax({
                type: "POST",
                url: "employeeRegistration4.php",
                data: formData,
                contentType:false,
                cache:false,
                processData:false,
                dataType: "json",
                
                success: function(result){
                    
                    if(result.message == 'success'){
                        alert(result.message);
                        
                    }
                }
            });

            event.preventDefault();
            $("#submitBtn4").prop("disabled", true);
        });
    });
</script>