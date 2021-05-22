<?php

namespace App\Controllers\Login;

use App\Controllers\Base\BaseController;

class Login extends BaseController
{
	public function index()
	{
		return view('views_login/view_login');
	}

	public function checkLogin()
	{
		// echo '<pre>';
		// print_r($this->request->getPost());
		// die;
		$usernameInput = $this->request->getPost('usernameInput');
		$passwordInput = $this->request->getPost('passwordInput');
		if ($usernameInput != null || $passwordInput != null) {

			$query_adminByusername = $this->DB->table('tb_user')->where('username', $usernameInput)->get();

			if ($query_adminByusername->resultID->num_rows == 1) {

				$passwordGenerate = $this->My_Library->hash_password($passwordInput);

				$query_adminBypassword = $this->DB->table('tb_user')->where('password', $passwordGenerate)->where('username', $usernameInput)->get();

				if ($query_adminBypassword->resultID->num_rows == 1) {

					$query_adminBypassword = $this->DB->table('tb_user')->where('username', $usernameInput)->get()->getRow();

					if ($query_adminBypassword->status == 1) {

						if ($this->setSession($usernameInput)) {
							$res = array('status' => 'success');
						} else {
							$res = array('status' => 'error', 'msg' => 'Session มีปัญหา กรุณาติดต่อโปรแกรมเมอร์');
						}
					} else if ($query_adminBypassword->status == 2) {
						$res = array('status' => 'error', 'msg' => 'Username ถูกระงับการใช้งาน');
					} else {
						$res = array('status' => 'error', 'msg' => 'Username ถูกปิดการใช้งาน');
					}
				} else {
					$res = array('status' => 'error', 'msg' => 'Password ไม่ถูกต้อง');
				}
			} else {
				$res = array('status' => 'error', 'msg' => 'Username ไม่ถูกต้อง');
			}
		} else {
			$res = array('status' => 'error', 'msg' => 'กรุณาใส่ Username และ Password');
		}
		echo json_encode($res);
		die;
	}


	public function setSession($username)
	{
		$query_adminByusername = $this->DB->table('tb_user')->select('*')->where('username', $username)->get()->getRow();
		$session_admin = array(
			'user_id' => $query_adminByusername->user_id,
			'username' => $query_adminByusername->username,
			'firstname' => $query_adminByusername->firstname,
			'phone' => $query_adminByusername->phone,
			'role' => $query_adminByusername->role,
			'status' => $query_adminByusername->status,
		);

		$this->session->set('session_admin', $session_admin);
		if ($this->session->has('session_admin')) {
			return true;
		} else {
			return false;
		}
	}
}
