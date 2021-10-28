<?php
class User {
    public $username;

    public function setUsername($name) {
        $this->username=$name;
    }
    public function getUsername(){
        return $this->username;
    }
}

$user = new User();
$user->setUsername('rlnd');
echo $user->getUsername();

$rlnd = new User();
$rlnd->setUsername('rlnd');

$valentine = new user();
$valentine->setUsername('Valentine');

echo 'twee gebruikers: '.$rlnd->getUsername(). ' en '.$valentine->getUsername().'.';
