<?php
interface Logging {
    public function log();
}

class RegistrationLog implements Logging {
    public function log()
    {
        echo "i am from registration log";
        echo "<br>";
    }
}

class LoginLog implements Logging {
    public function log()
    {
        echo "i am from login log";
        echo "<br>";
    }
}

class ErrorLog implements Logging {
    public function log()
    {
        echo "i am from error log";
    }
}

$registration = new RegistrationLog();
$login = new LoginLog();
$error = new ErrorLog();

$logs = array($registration, $login, $error);

foreach ($logs as $log)
{
    $log->log();
}