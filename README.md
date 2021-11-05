# getout
A simple PHP tool for administrators who want to quickly execute one or more shell commands via SSH on one or more Linux servers.
Through a simple website you can use it.

## Requirements
Folowing extensions are needed.

- PHP SSH2 Module (PECL-Extension)
  - On OpenSUSE 13.2 above
    - Installing PECL
    >sudo yast -i gcc autoconf php5 php5-pear php5-devel

    - Installing libssh2
    >zypper in libssh2-devel

    - Installing SSH2 PECL Package
    >sudo pecl install ssh2

    - Modify the php.ini
    >vi /etc/php5/apache2/php.ini

     Add "extension=ssh2.so" to the extension part of php.ini
