@extends('layout.layout')
@section('login') 

<div class="container-login100">
     
    <div class="wrap-login100 p-l-100 p-r-100 p-t-100 p-b-50">
         @if (\Session::has('success'))
		      <div class="alert alert-success">
		        <p>{{ \Session::get('success') }}</p>
		      </div><br />
		     @endif
       <form name="login" action="{{URL::to('login_action')}}" method="post" class="login100-form validate-form">
          <span class="login100-form-title p-b-37">Sign In</span>
           <div class="panel-body">
				    	@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
           </div>
           @endif
          <input type="hidden" name="_token" value="{{(csrf_token())}}">
            
           <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Username ">
                <input class="input100" type="text" name="username" placeholder="username" >
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                <input class="input100" type="password" name="password" placeholder="password" >
                <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn">
                <button name="signin" name="sign" class="login100-form-btn">
                    Sign In </button>
            </div>
           
            <div class="text-center">
                <b>Have No Account ?&nbsp;<a href="{{URL::to('newaccount')}}" class="txt2 hov1">&nbsp;SignUp</a></b>
            </div>
        </form>	
    </div>
</div>
	
@endsection