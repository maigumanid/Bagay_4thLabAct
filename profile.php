<?php
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $bio = $_POST['bio'];

    $hobbies = [];
    if(isset($_POST['hobbies'])){
        $hobbies = $_POST['hobbies'];
    }

    $imageName = time() . $_FILES['profileImage']['name'];
    $tempName = $_FILES['profileImage']['tmp_name'];
    $folder = "uploads/".$imageName;

move_uploaded_file($tempName,$folder);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            box-sizing:border-box;
        }

        body{
            margin:0;
            font-family:Segoe UI, Arial, sans-serif;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:20px;

            background:
            radial-gradient(circle at top left,#7c3aed,transparent 40%),
            radial-gradient(circle at bottom right,#2563eb,transparent 40%),
            #0f172a;
        }

        /* CARD */
        .card{
            width:100%;
            max-width:750px;
            background:rgba(30,41,59,0.65);
            border-radius:16px;
            box-shadow:0 20px 45px rgba(0,0,0,0.6);
            display:flex;
            flex-wrap:wrap;
            overflow:hidden;
            transition:0.3s;

            backdrop-filter:blur(15px);
            border:1px solid rgba(255,255,255,0.08);
        }

        .card:hover{
            transform:translateY(-5px);
        }
        
        /* LEFT PART SA CARD*/
        .left{
            flex:1;
            min-width:240px;
            background:#7c3aed;
            padding:30px;
            text-align:center;
        }

        .left img{
            width:140px;
            height:140px;
            border-radius:50%;
            object-fit:cover;
            border:4px solid white;
            margin-bottom:15px;
        }

        .left h2{
            margin:10px 0 5px 0;
        }

        .left p{
            margin:0;
            opacity:0.9;
        }

        /* RIGHT PART SA CARD*/
        .right{
            flex:2;
            min-width:300px;
            padding:30px;
        }

        .section{
            margin-bottom:20px;
        }

        .section h3{
            margin-bottom:10px;
            border-bottom:1px solid #334155;
            padding-bottom:5px;
        }

        /* INFO GRID */
        .info{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:10px;
        }

        .box{
            background:#0f172a;
            padding:10px;
            border-radius:6px;
            border:1px solid #334155;
        }

        /* HOBBY BADGES */
        .badges{
            display:flex;
            flex-wrap:wrap;
            gap:8px;
        }

        .badge{
            background:#7c3aed;
            padding:6px 12px;
            border-radius:20px;
            font-size:13px;
            transition:0.25s;
        }

        .badge:hover{
            transform:translateY(-2px);
            background:#8b5cf6;
            box-shadow:0 5px 10px rgba(124,58,237,0.4);
        }

        /* BIO */
        .bio{
            background:#0f172a;
            padding:12px;
            border-radius:6px;
            border:1px solid #334155;
        }

        /* BUTTON */
        .back{
            margin-top:20px;
            display:inline-block;
            padding:10px 18px;
            background:#7c3aed;
            color:white;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
        }

        .back:hover{
            background:#8b5cf6;
        }

        /* RESPONSIVE */
        @media (max-width:650px){
            .card{
                flex-direction:column;
            }

            .info{
                grid-template-columns:1fr;
            }
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="left">
            <img src="<?php echo $folder; ?>">
            <h2><?php echo $fullname; ?></h2>
            <p><?php echo $course; ?></p>
        </div>

        <div class="right">
            <div class="section">
                <h3>Profile Info</h3>
                
                <div class="info">
                    <div class="box"><b>Age:</b> <?php echo $age; ?></div>
                    <div class="box"><b>Gender:</b> <?php echo $gender; ?></div>
                    <div class="box"><b>Email:</b> <?php echo $email; ?></div>
                </div>
            </div>

            <div class="section">
                <h3>Hobbies</h3>
                <div class="badges">
                    <?php
                    foreach($hobbies as $h){
                    echo "<span class='badge'>$h</span>";
                    }
                    ?>
                </div>
            </div>

            <div class="section">
                <h3>Biography</h3>
                <div class="bio">
                    <?php echo $bio; ?>
                </div>
            </div>

            <a class="back" href="index.php">Create Another Profile</a>
        </div>
    </div>
</body>
</html>