<?php

class challenge{
private $challengeId;
private $challengeAuthor;
private $challengeEmail;

/**
* the id for this challenge; is the primary key..
* @return int
*/
public function getChallengeId() {
return $this->challengeId;
}

/**
 * the author of the challenge, is the foriegn key
* @return string
*
*/
public function getChallengeAuthor() {
return $this->challengeAuthor;
}

/**
 * email of the author of the challenge, this is a foriegn key
* @return string
*/
public function getChallengeEmail() {
return $this->challengeEmail;
}


}
