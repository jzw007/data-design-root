<?php
class User{
	private $userId;
	private $userEmail;
	private $userName;

	public function __construct(int $newUserId, string $newUserEmail, string $newUserName) {
	}


	/**
	 * id for the User,this is the primary key..
	 * @return int
	 */
	public function getUserId() {
		return $this->userId;

	}

	// setUserId...

	/**
	 * email of User
	 * @return string
	 */
	public function getUserEmail() {
		return $this->userEmail;
	}
	// setUserEmail..
	/**
	 * name of the User
	 * @return string
	 */
	public function getUserName() {
		return $this->userName;
	}
	//setUserName..
}
