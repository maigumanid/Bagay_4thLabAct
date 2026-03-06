<?php
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $bio = $_POST['bio'];
    $hobbies = "";
    if(isset($_POST['hobbies'])){
        $hobbies = implode(", ", $_POST['hobbies']);
    }
    $imageName = time() . $_FILES['profileImage']['name'];
    $tempName = $_FILES['profileImage']['tmp_name'];
    $folder = "uploads/".$imageName;
    move_uploaded_file($tempName,$folder);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>

    <style>
        *{
            box-sizing:border-box;
        }

        body{
            margin:0;
            font-family:Segoe UI, Arial, sans-serif;
            background:#0f172a;
            color:#e5e7eb;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .card{
            width:480px;
            background:#1e293b;
            padding:35px;
            border-radius:14px;
            box-shadow:0 10px 30px rgba(0,0,0,0.6);
            text-align:center;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-3px);
        }

        img{
            width:140px;
            height:140px;
            border-radius:50%;
            object-fit:cover;
            border:3px solid #7c3aed;
            margin-bottom:15px;
        }

        h2{
            margin-bottom:10px;
            color:#f1f5f9;
        }

        .info{
            margin-top:20px;
            display:grid;
            gap:10px;
            text-align:left;
        }

        .info div{
            background:#0f172a;
            padding:10px;
            border-radius:6px;
            border:1px solid #334155;
            transition:0.25s;
        }

        .info div:hover{
            border-color:#7c3aed;
            box-shadow:0 0 6px #7c3aed;
        }

        .label{
            font-weight:bold;
            color:#cbd5f5;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="<?php echo $folder; ?>">
        <h2><?php echo $fullname; ?></h2>
        <div class="info">
            <div>
                <span class="label">Age:</span>
                <?php echo $age; ?>
            </div>
            <div>
                <span class="label">Course:</span>
                <?php echo $course; ?>
            </div>
            <div>
                <span class="label">Email:</span>
                <?php echo $email; ?>
            </div>
            <div>
                <span class="label">Gender:</span>
                <?php echo $gender; ?>
            </div>
            <div>
                <span class="label">Hobbies:</span>
                <?php echo $hobbies; ?>
            </div>
            <div>
                <span class="label">Biography:</span>
                <?php echo $bio; ?>
            </div>
        </div> 
    </div>
</body>
</html>