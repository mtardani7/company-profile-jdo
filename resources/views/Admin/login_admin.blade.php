<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<nav class="navbar" data-bs-theme="dark" style="height: 60px; background-color: #1A4870"></nav>

<div class="teks" style="padding-top: 10px; text-align: center;">
    <h2 style=" font-weight: 700;">Login Admin</h2>
    <img src="{{ asset('assets/image/logo.png') }}" alt="Logo" style="width: 370px; padding-top: 20px;">
</div>
  
<div class="form" style="margin-left: 150px; margin-top: 30px;">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Username</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="width: 945px; border: 1px black solid;">
    </div>
    
    <label for="inputPassword5" class="form-label" style="font-weight: bold;">Password</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" style="width: 945px; border: 1px black solid;">
    <div id="passwordHelpBlock" class="form-text"></div> 

    <div style="display: flex; margin-left: 450px; margin-top: 30px; margin-bottom: 20px;">
        <button type="button" class="btn btn" style="border-radius: 30px; background-color: #1A4870; color: white;">Login</button>
    </div>
</div>
