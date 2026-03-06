<!DOCTYPE html>
<html>
<head>
    <title>Profile Generator</title>
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

        .container{
            width:480px;
            background:#1e293b;
            padding:35px;
            border-radius:14px;
            box-shadow:0 10px 30px rgba(0,0,0,0.6);
            transition:0.3s;
        }

        .container:hover{
            transform:translateY(-3px);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#f1f5f9;
        }

        form{
            display:grid;
            gap:14px;
        }

        label{
            font-size:14px;
            color:#cbd5f5;
        }

        input, textarea{
            width:100%;
            padding:10px;
            border-radius:6px;
            border:1px solid #334155;
            background:#0f172a;
            color:white;
            transition:0.25s;
        }

        input:focus, textarea:focus{
            outline:none;
            border-color:#7c3aed;
            box-shadow:0 0 5px #7c3aed;
        }

        .gender, .hobbies{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
        }

        .gender label,
        .hobbies label{
            display:flex;
            align-items:center;
            gap:4px;
            font-size:13px;
        }

        input[type="file"]{
            background:#0f172a;
            border:none;
        }

        button{
            margin-top:10px;
            padding:12px;
            border:none;
            border-radius:8px;
            background:#7c3aed;
            color:white;
            font-size:15px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#8b5cf6;
            transform:scale(1.03);
            box-shadow:0 5px 15px rgba(124,58,237,0.5);
        }                   
    </style>
</head>

<body>
    <div class="container">
        <h2>Create Your Profile</h2>
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <label>Full Name</label>
            <input type="text" name="fullname" required>
            <label>Age</label>
            <input type="number" name="age" required>
            <label>Course / Program</label>
            <input type="text" name="course" required>
            <label>Email Address</label>
            <input type="email" name="email" required>
            <label>Gender</label>
            <div class="gender">
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="Other"> Other</label>
            </div>
            <label>Hobbies</label>
            <div class="hobbies">
                <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                <label><input type="checkbox" name="hobbies[]" value="Gaming"> Gaming</label>
                <label><input type="checkbox" name="hobbies[]" value="Sports"> Sports</label>
                <label><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
                <label><input type="checkbox" name="hobbies[]" value="Travel"> Travel</label>
            </div>
            <label>Short Biography</label>
            <textarea name="bio" rows="3"></textarea>
            <label>Upload Profile Image</label>
            <input type="file" name="profileImage" required>
            <button type="submit">Generate Profile</button>
        </form>
    </div>
</body>
</html>