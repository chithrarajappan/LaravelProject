<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\support\Facades\Auth;

class ExamLoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        //dd($request->all());
        $product = $this->validate(request(), [
          'username' => 'required',
          'password'=>'required|min:6',
        ]);
        $username= $request->get('username');
        $password= $request->get('password');
       
      if (Auth::attempt(['username'=>$username, 'password' => $password])) 
        {
            return redirect('dashbord')->with('success','Welcome Dashboard');  
        }
            return redirect('/')->with('fail','Invalid Username or Password');
    }
   
    public function newAccount()
    {
        return view('register');
    }
    
    public function postNewAccount(Request $request)
    {
        //dd($request->all());
        $product = $this->validate(request(), [
          'name'=>'required',
          'age'=>'required|min:2',
          'address'=>'required',
          'email' => 'required',
          'username'=>'required',
          'password'=>'required|min:6',
          'cpassword'=>'required|min:6|same:password',
        ]);
          $name = $request->get('name');
          $age = $request->get('age');
          $address = $request->get('address');
          $email = $request->get('email');
          $username = $request->get('username');
          $password = bcrypt($request->get('password'));
          $image = $request->file('file');

          $fileName = $image->getClientOriginalName();
          $mime_type = $image->getMimeType();
          $extension = $image->getClientOriginalExtension();
          $destinationPath = 'upload/';
          $image->move($destinationPath, $fileName);
       
          $users = new User();
          $users->name=$name;
          $users->age=$age;
          $users->address=$address;
          $users->photo=$fileName;
          $users->email=$email;
          $users->username=$username;
          $users->password=$password;
          $users->save();
	      return redirect('/')->with('success', 'New Account has been added');
    }
}
?>
    