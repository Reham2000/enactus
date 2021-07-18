<?php
 


/*
==========================  
  insert new member By/ Amr Mohamed
==========================
*/

function insert_member ($f_name , $l_name , $email , $phone , $birthday ,$commity ,$season ,$university ,$collage_name ,$collage_year ,$about ,$facebook ,$twitter ,$insta ,$linked_in,$img){
    global $con;
    $stmt = $con->prepare("INSERT INTO members(first_name,last_name,email,birthday,phone,commity,season,university,collage_name,collage_year,about,facebook,twitter,insta,linked_in,img) Value(:first_name,:last_name,:email,:birthday,:phone,:commity,:season,:university,:collage_name,:collage_year,:about,:facebook,:twitter,:insta,:linked_in,:img)");
    $stmt->execute(
    array(
        ":first_name"       => $f_name,
        ":last_name"        => $l_name,
        ":email"            => $email,
        ":birthday"         => $birthday,
        ":phone"            => $phone,
        ":commity"        => $commity,
        ":season"           => $season,
        ":university"       => $university,
        ":collage_name"     => $collage_name,
        ":collage_year"     => $collage_year,
        ":about"            => $about,
        ":facebook"         => $facebook,
        ":twitter"          => $twitter,
        ":insta"            => $insta,
        ":linked_in"        => $linked_in,
        ":img"              => $img
    ));
    echo "
    <script>
        toastr.success('Great , Member has been successfully added .')
    </script>";
    header("Refresh:3;url=members.php");
}


/*
==========================  
  update new member By/ Amr Mohamed
==========================
*/

function  update_member ($member_id,$f_name , $l_name , $email , $phone , $birthday ,$commity ,$season ,$university ,$collage_name ,$collage_year ,$about ,$facebook ,$twitter ,$insta ,$linked_in,$img){
    global $con;
    $stmt = $con->prepare("UPDATE members SET first_name = ?,last_name = ?,email = ?,birthday = ?,phone = ?,commity = ?,season = ?,university = ?,collage_name = ?,collage_year = ?,about = ?,facebook = ?,twitter = ?,insta = ?,linked_in = ?,img = ? WHERE id =?");
    $stmt->execute(
    array(
        $f_name,
        $l_name,
        $email,
        $birthday,
        $phone,
        $commity,
        $season,
        $university,
        $collage_name,
        $collage_year,
        $about,
        $facebook,
        $twitter,
        $insta,
        $linked_in,
        $img,
        $member_id

    ));
    echo "
    <script>
        toastr.success('Great , Member INFO has Been Successfully Update  .')
    </script>";
    header("Refresh:3;url=members.php");
}


/*
==========================  
  get all data  By/ Amr Mohamed
==========================
*/

function getAllData($table){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


/*
==========================  
  get all data with id  By/ Amr Mohamed
==========================
*/

function getData_with_id($table,$id){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table WHERE id = ?");
    $stmt->execute(array($id));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rows;
}


// selectHighBoard
function selectHighBoard(){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM hosters WHERE position_name != :Member");
    $stmt->execute(array(
        ':Member' => "Member"
    ));
    return $stmt->fetchAll();
}



/*
==========================  
  update about us data  By/ Reham Osama
==========================
*/


function  update_about_us ($name , $content,$about_id){
    global $con;
    $stmt = $con->prepare("UPDATE about_us SET section_name = ?, content = ? WHERE id =?");
    $stmt->execute(
    array(
        $name,
        $content,
        $about_id

    ));
    echo "
    <script>
        toastr.success('Great , About US INFO has Been Successfully Update  .')
    </script>";
    header("Refresh:1;url=about.php");
}

/*
==========================  
  update event data  By/ Reham Osama
==========================
*/


function  updateEvent($name ,$year ,$desc, $link,$img,$event_id){
    global $con;
    $stmt = $con->prepare("UPDATE event SET ename = ?, eyear = ?,img = ?, descrip = ?,link = ? WHERE id =?");
    $stmt->execute(
    array(
        $name,
        $year,
        $img,
        $desc,
        $link,
        $event_id

    ));
    echo "
    <script>
        toastr.success('Great , Event INFO has Been Successfully Update  .')
    </script>";
    header("Refresh:3;url=event.php");
}





/*
==========================  
  add new Event By/ Reham Osama
==========================
*/

function addEvent($name ,$year ,$desc, $link,$img){
    global $con;
    $stmt = $con->prepare("INSERT INTO event(ename,eyear,img,descrip,link) VALUE(:eName,:year,:Img,:desc,:link)");
    $stmt->execute(array(
        ":eName"         =>  $name,
        ":Img"          =>  $img,
        ":desc"          =>  $desc,
        ":year"          =>  $year,
        ":link"          =>  $link
    ));

    echo "
    <script>
        toastr.success('Great , Event has been successfully added .')
    </script>";
    header("Refresh:3;url=event.php");
}
