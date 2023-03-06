<?php 
$sl = mysqli_query($conn, "select * from recruiter");
while($s = $sl->fetch_assoc()){
    ?> 
    <div class="student-list-main-container">
        <div class="student-div-upper-div">
            <div class="student-image-container"><img class="student-image" src="../<?php echo $s['recruiter_pic']; ?>"></div>
            <div>
                <div class="student-name"><?php echo $s['Name']; ?></div>
                <div><?php echo $s['Email']; ?></div>
                <div><?php echo $s['Designation']; ?></div>
                <div><?php echo $s['Company_details']; ?></div>
            </div>
        </div>
        <div class="user-delete"><a class="user-d-link" href="php/deleteRecruiter.php?id=<?php echo $s['id']; ?>">Delete</a></div>
    </div>
    <?php
}
?>