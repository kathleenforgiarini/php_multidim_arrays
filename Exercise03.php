<?php

$jobs = array (
    array ("Job_Id" => 667, "Job_Title" => "Clerck"),
    array ("Job_Id" => 668, "Job_Title" => "Analyst"),
    array ("Job_Id" => 669, "Job_Title" => "Programmer"),
    array ("Job_Id" => 670, "Job_Title" => "Manager"),
    array ("Job_Id" => 671, "Job_Title" => "Administrator")
);

?>

<!DOCTYPE html>

    <body>
   		List of jobs: 
       <select onchange="populateJobs()" name="jobs" id="jobs">
      
        <?php 
            foreach ($jobs as $oneDim) {
                echo "<option value='". $oneDim['Job_Id'] . "'> " . $oneDim['Job_Title'] . "</option>";       
            }
       ?>
       </select>
   		<br/>
   		Job id <input type="number" id="id"/>
   		Job Title <input type="text" id="title"/>

    </body>

<script>
function populateJobs() {
	var select = document.getElementById("jobs");
    job_id = select.value;
    var input_id = document.getElementById("id");
    input_id.value = job_id;
    
    var selectedOption = select.options[select.selectedIndex];
    var job_title = selectedOption.text;
    var input_title = document.getElementById("title");
    input_title.value = job_title;
}
</script>
</html>