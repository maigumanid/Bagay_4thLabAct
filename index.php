<!DOCTYPE html>
<html>
<head>
<title>Create Profile</title>

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
.container{
width:100%;
max-width:500px;
background:rgba(30,41,59,0.7);
backdrop-filter:blur(10px);
border:1px solid rgba(255,255,255,0.08);
padding:30px;
border-radius:14px;
box-shadow:0 10px 30px rgba(0,0,0,0.6);
}

h2{
text-align:center;
margin-bottom:25px;
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
gap:5px;
font-size:13px;
}

button{
margin-top:10px;
padding:12px;
border:none;
border-radius:8px;
background:#7c3aed;
color:white;
font-weight:bold;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#8b5cf6;
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

<label>Email</label>
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
<input type="file" name="profileImage" accept="image/*" required>

<button type="submit">Generate Profile</button>

</form>

</div>

</body>
</html>