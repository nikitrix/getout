<?php
class ssh2 {
  private $host = 'host';
  private $user = 'user';
  private $port = '22';
  private $password = 'password';
  private $con = null;
  private $log = '';

  function __construct($host='', $port=''  ) {
     if( $host!='' ) $this->host  = $host;
     if( $port!='' ) $this->port  = $port;
     $this->con  = ssh2_connect($this->host, $this->port);
     if( !$this->con ) {
       $this->log .= "Connection failed !";
     }
  }

  function authPassword( $user = '', $password = '' ) {
     if( $user!='' ) $this->user  = $user;
     if( $password!='' ) $this->password  = $password;
     if( !ssh2_auth_password( $this->con, $this->user, $this->password ) ) {
       $this->log .= "Authorization failed !";
     }
  }

  function cmdExec( $srvname = '', $cmd = '' ) {
    $stream = ssh2_exec( $this->con, $cmd );
    $result = "";
    $result .= "<pre>";
    if (stream_set_blocking( $stream, true )) {
      while($line = fgets($stream)) {
          $result .= $line;
      }
    }
    $result .= "</pre>";
    return $result;
  }

  function getLog() {
     return $this->log;
  }
}
?>
