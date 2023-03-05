
<?php 
if(isset($_POST['post-submit'])){
$image_fileDestination_new="";
$video_fileDestination_new="";

$caption = $_POST['caption'];
$text = $_POST['texts'];

$image = $_FILES['image'];
$image_fileName = $_FILES['image']['name'];
$image_fileTempName = $_FILES['image']['tmp_name'];
$image_fileSize = $_FILES['image']['size'];
$image_fileError = $_FILES['image']['error'];
$image_fileType = $_FILES['image']['type'];

$image_fileExt = explode('.', $image_fileName);
$image_fileActualExt = strtolower(end($image_fileExt));

$video = $_FILES['video'];
$video_fileName = $_FILES['video']['name'];
$video_fileTempName = $_FILES['video']['tmp_name'];
$video_fileSize = $_FILES['video']['size'];
$video_fileError = $_FILES['video']['error'];
$video_fileType = $_FILES['video']['type'];

$video_fileExt = explode('.', $video_fileName);
$video_fileActualExt = strtolower(end($video_fileExt));

if (!$image_fileName == "") {
    if ($image_fileError === 0) {
        if ($image_fileSize < 1000000000) {
            $image_fileNewName = uniqid('', true) . "." . $image_fileActualExt;
            $image_fileDestination = '../uploads/' . $image_fileNewName;
            move_uploaded_file($image_fileTempName, $image_fileDestination);
            $image_fileDestination_new = 'uploads/' . $image_fileNewName;
        } else {
            $imageError = "*Image size is too big";
        }
    } else {
        $imageError = "*Some error occured.Please choose an image one more time.";
    }
} else {
    $imageError = "*Select an image";
}

if (!$video_fileName == "") {
    if ($video_fileError === 0) {
        if (true) {
            $video_fileNewName = uniqid('', true) . "." . $video_fileActualExt;
            $video_fileDestination = '../uploads/' . $video_fileNewName;
            move_uploaded_file($video_fileTempName, $video_fileDestination);
            $video_fileDestination_new = 'uploads/' . $video_fileNewName;
        } else {
            $imageError = "*Image size is too big";
        }
    } else {
        $imageError = "*Some error occured.Please choose an image one more time.";
    }
} else {
    $imageError = "*Select an image";
}
$rec_Id=$Rec_Details['id'];
mysqli_query($conn, "insert into feed set user_id='$rec_Id', user_type='recruiter', caption='$caption', article='$text', image='$image_fileDestination_new', video='$video_fileDestination_new'");
}

?>

<style>
    @import url('https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css');
    .caption-input-field{
        width: 91%;
        background-color: #3A3845;
        border: none;
        outline: none;
        padding: 1rem 2rem;
        border-radius: 1rem;
        color: white;
    }
    .main-post-container{
        height: fit-content;
        margin-bottom: 5rem;
    }
    .first-row{
        margin-bottom: 1rem;
    }
    .text-area-field{
        background-color: #3A3845;
        color: white;
        border: none;
        outline: none;
        padding: 1rem 2rem;
        border-radius: 1rem;
    }
    .third-row{
        display: flex;
        align-items: center;
        height: fit-content;
        width: 100%;
        padding: 1rem 0;
    }
    .sub-btn{
        padding: .5rem 2rem;
        background-color: #3A3845;
        border-radius: 1rem;
        outline: none;
        border: none;
        display: inline-block;
        color: white;
    }
</style>
<div class="main-post-container">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="first-row">
        <img src="../<?php echo $Rec_Details['recruiter_pic']; ?>" alt="" class="profile-photo-md" />
        <input name='caption' placeholder="caption" class="caption-input-field" required>
        </div>
        <div class="second-row">
            <textarea required name="texts" id="exampleTextarea" cols="30" rows="5" class="form-control text-area-field" placeholder="Write what you wish"></textarea>
        </div>
        <div class="third-row">
            image<input type="file" name="image">
            video<input type="file" name="video">
            <button type="submit" class="sub-btn" name='post-submit'>post</button>
        </div>
    </form>
</div>





<!-- <div class="create-post">
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <img src="../<?php echo $student_pic; ?>" alt="" class="profile-photo-md" />
            <input name='caption' placeholder="caption">
            <div class="form-group">
            <textarea name="texts" id="exampleTextarea" cols="30" rows="3" class="form-control" placeholder="Write what you wish"></textarea>
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
        <div class="tools">
        <ul class="publishing-tools list-inline">
            <li><a href="#"><i class="ion-compose"></i></a></li>
            <li><a href="#"><i class="ion-images"></i></a></li>
            <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
        </ul>
        <button class="btn btn-primary pull-right">Publish</button>
        </div>
    </div>
    </div>
</div> -->