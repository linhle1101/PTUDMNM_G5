@if ($errors->any())
    <div style='color:red;width:30%; margin:0 auto'>
      <div >
        {{ __('Whoops! Something went wrong.') }}
      </div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <style>
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 48px 0 0; /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      background-color:#404e68!important
      
    }
    .sidebar a
    {
        color:white!important;
    }
    .navbar {
        
        font-weight:bold;
        margin:0 auto;
        margin-bottom: 20px;
     

    }
    .navbar-nav
    {
        margin:0 auto;
        width:1000px;
        
    }
    .navbar-nav a
    {
        color:black!important;
    }
    .content {
      margin-left: 240px; /* Width of sidebar */
    }
     /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
}

/* Form container styles */
form {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
    width: 40%;
    margin: 50px auto;
}

form label {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
    color: #333;
}

form .form-control {
    font-size: 14px;
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
}

form .form-control:focus {
    border-color: #007bff;
    outline: none;
    background-color: #fff;
}

/* Button Styling */
form .btn {
    font-size: 14px;
    padding: 8px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: auto;
    display: block;
    margin: 0 auto;
}

form .btn:hover {
    background-color: #0056b3;
}

/* Title styles */
div[style*="text-align:center"] {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
    color: #333;
}

/* For smaller screens */
@media screen and (max-width: 768px) {
    form {
        width: 80%;
    }
}
  </style>
<x-account-panel>
 <form method = 'post' action="{{route('saveinfo')}}" style='width:30%; margin:0 auto'>
 <div style='text-align:center;font-weight:bold;color:#15c;'>CẬP NHẬT THÔNG TIN CÁ NHÂN</div>
 <label>Họ và Tên</label> 
 <input type='text' class='form-control form-control-sm' name='name' value="{{$user->name}}">
 <label>Email</label>
 <input type='text' class='form-control form-control-sm' name='email' value="{{$user->email}}">
 <label>Số điện thoại</label>
 <input type='text' class='form-control form-control-sm' name='phone' value="{{$user->phone}}">
 <input type ='hidden' value='{{$user->id}}' name='id'>
 
 {{ csrf_field() }}
 <div style='text-align:center;'><input type='submit' class='btn btn-primary mt-1' value='Lưu'></div>
 </form>
 </x-account-panel>
 