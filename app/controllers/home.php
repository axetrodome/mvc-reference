<?php
class home extends Controller{
	// protected $user;
	// public function __construct(){
	// 	$this->user = $this->model('User');
	// }
	public function index($name = ''){
		// echo $name,'<br>';
		// $user = $this->user; //this is an object now because we return it as an object
		// $user->name = 'Axel';
		// $user->name = $name;
		// echo $user->name;
		$this->view('home/index',['name' => $user->name]);

		// User::create([
		// 	'username' => 'axelmhar',
		// 	'email' => 'someemail@yahoo.com'
		// ]);
	}
	public function create($username = '', $email = ''){
		// $this->user->create([
		// 	'username' => $username,
		// 	'email' => $email
		// ]);
		User::create([
			'username' => $username,
			'email' => $email
		]);
	}
	// public function test(){
	// 	echo 'testings';
	// }
}