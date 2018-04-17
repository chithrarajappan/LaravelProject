@extends('layout.layout')
@section('register') 

<div class="container-login100">
        
    <div class="form-bottom">
        <form name="newaccount" action="{{URL::to('newaccount_action')}}" method="post" class="login100-form validate-form" enctype="multipart/form-data">
          <span class="login100-form-title p-b-37">Sign Up</span>
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
                   
            <div class="form-group">
                <label class="sr-only" for="form-last-name"> Name</label>
                <input type="text" name="name" placeholder="Enter your Name..." class="form-name form-control" id="form-name" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="form-location">Age</label>
                <input name="age" type="number" placeholder="Enter your Age..."  class="form-age form-control" required id="form-age">
            </div>
            <div class="form-group">
                <label class="sr-only" for="form-location"> Address</label>
                <textarea name="address" placeholder="Enter your Address..."  class="form-address form-control" required id="form-address" cols="5" rows="5" maxlength="50"></textarea>
            </div>
            <div class="form-group">
                <label class="sr-only" for="form-logo">Logo</label>
                <input type="file" name="file" placeholder="Photo..." class="form-file form-control" id="form-file" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="form-email">Email</label>
                <input type="email" name="email" placeholder="Enter your Email..." class="form-email form-control" id="form-email" required>
            </div>
             <div class="form-group">
                <label class="sr-only" for="form-User name">User name</label>
                <input type="text" name="username" placeholder="Enter your Username..." class="form-User name form-control" id="form-User name" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="form-password">Password</label>
                <input type="password" name="password" placeholder="Enter your Password..." class="form-password form-control" id="form-password" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="form-password">Confirm Password</label>
                <input type="password" name="cpassword" placeholder="Enter your Confirm Password..." class="form-password form-control" id="form-password" required>
            </div>
            <div class="container-login100-form-btn">
            <button name="signin" type="submit" class="login100-form-btn">
                Submit </button>&nbsp;&nbsp;
                <button name="cancel" type="reset" class="login100-form-btn">
                Cancel
            </button>
        </div>
     </form>
   </div>
</div>

	
@endsection