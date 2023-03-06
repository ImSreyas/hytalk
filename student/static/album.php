<ul class="album-photos">
<?php
$album = mysqli_query($conn, "select * from album where user_id='$student_id'");
while($a = $album->fetch_assoc()){
    if($a['image']!='' || $a['image']!=null){
        ?> 
        <li>
            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
            <img src="../<?php echo $a['image'] ?>" alt="photo" />
            </div>
            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <img src="../<?php echo $a['image'] ?>" alt="photo" />
                </div>
            </div>
            </div>
            </li>
        <?php
    }
    if($a['video']!='' || $a['video']!=null){
        ?> 
        <li>
            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
            <video class="post-video" controls> <source src="../<?php echo $a['video'] ?>" type="video/mp4"> </video>
            </div>
            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <video class="post-video" controls> <source src="../<?php echo $a['video']; ?>" type="video/mp4"> </video>
                </div>
            </div>
            </div>
        </li>
        <?php
    }
}
?>    
</ul>