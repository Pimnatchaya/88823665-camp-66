@extends('layouts.default')

@section('content')
<div class="register-page" style="background-color:rgb(255, 240, 245)">
    <div class="register-box">
        <div class="register-logo">
          <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.register-logo -->
        <div class="card">
          <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>
            <form action="{{ url('/register') }}" onsubmit="return clickme()" method="post">
                @csrf
              <div class="input-group mb-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
                <div class="input-group-text"><span class="bi bi-person"></span></div>
                <div class ="valid-feedback">
                  ok 
                </div>  
                <div class="invalid-feedback" id="invalid-name">
                  กรุณาระบุชื่อ
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                <div class="invalid-feedback" id="invalid-email">กรุณากรอกอีเมลที่ถูกต้อง</div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" id ="password" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                <div class="invalid-feedback" id="invalid-password">รหัสผ่านต้องมี ตัวเลข, ตัวพิมพ์เล็ก และตัวพิมพ์ใหญ่</div>
              </div>
              <!--begin::Row-->
              <div class="row">
                <div class="col-8">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="mycheckbox" />
                    <label class="form-check-label" for="mycheckbox">
                      I agree to the <a href="#">terms</a>
                    </label>
                  </div>
                  <div class="invalid-feedback d-block" id="invalid-checkbox" style="display: none; color: blue;">
                  กรุณายอมรับเงื่อนไขก่อนสมัครสมาชิก
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" onclick="clickme()">Sign In</button>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!--end::Row-->
            </form>
            
            <!-- /.social-auth-links -->
            <p class="mb-0">
              <a href="login.html" class="text-center"> I already have a membership </a>
            </p>
          </div>
          <!-- /.register-card-body -->
        </div>
      </div>
</div>
@endsection

@section('scripts')
<script>
  console.log("Hello World!")
  
</script>
<script>
  //aleart("Hello World!")
  let myvel
  var myvel2
  const PI=3.14
  pi = 2
  console.log(PI, pi)

  let myarry = [];
   myarry = Array()

  myarry[0] = 1
  myarry["1"] = 2
  myarry.push(3)
  myarry.push(4)
  console.log(myarry)
  myarry.pop()
  console.log(myarry)
  for(a=1; a< 10; a++){
    console.log(a);
  }
  </script>

  <script>
  function clickme(){
    let name = $('#name');
    let email = $('#email');
    let password =$('#password');
    let mycheckbox = $('mycheckbox')
    let isValid = true;

    if (name.val().trim() === ""){
      name.addClass('is-invalid');
      $('#invalid-name').show();
      isValid = false;
    }else{
      name.removeClass('is-invalid');
    }
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.val())){
      email.addClass('is-invalid');
      $('#invalid-email').show();
      isValid = false;
    }else{
      email.removeClass('is-invalid');
    }
    let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
    if (!passwordPattern.test(password.val())){
      password.addClass('is-invalid');
      $('#invalid-password').show();
      isValid = false;
    }else{
      password.removeClass('is-invalid');
    }

    if (!mycheckbox.is(':checked')){
      $('#invalid-chechbox').show();
      isvalid = false;
    }else{
      mycheckbox.removeClass('invalid-checkbox');
    }
    return isValid;
        /*name.value = "new test"
        name = $('#name').val("new with jquery")
        $('#name').addclass('is-invalid') //error
        $('#name').addclass(is-valid) //ok
       
        return false;*/
  }
  $(document).ready(function(){
    // alert("Hello World")
  })
</script>
@endsection