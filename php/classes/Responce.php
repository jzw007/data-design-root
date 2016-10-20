<?php

class responce{
	private $responceId;
	private $respoceUserId;
	private $responceChallengeId;
	private $responceUserName;
	private $responceDateTime;

	/**
	 * id for the response to the challenge, primary key
	 * @return int
	 */
	public function getResponceId() {
		return $this->responceId;
	}

	/**
	 * id of the user for this response, foreign key
	 * @return string
	 */
	public function getRespoceUserId() {
		return $this->respoceUserId;
	}

	/**
	 * id of the challenge issued.foreign key
	 * @return string
	 */
	public function getResponceChallegeId() {
		return $this->responceChallengeId;
	}

	/**
	 * id of the responce, foreign key
	 * @return mixed
	 */
	public function getResponceUserName() {
		return $this->responceUserName;
	}

	/**
	 * date and time of the responce sent, in PHP DateTime object
	 * @return mixed
	 */
	public function getResponceDateTime() {
		return $this->responceDateTime;
	}
}