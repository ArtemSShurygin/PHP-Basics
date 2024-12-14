#
Не отправить файлы на github
error: open("hw6/db/mysql.sock"): Invalid argument
 - - удалил файл


#
SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo for database failed: Name or service not known


#
SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo for database failed: Temporary failure in name resolution
Error response from daemon: Ports are not available: exposing port TCP 0.0.0.0:3306 -> 0.0.0.0:0: listen tcp 0.0.0.0:3306: bind: Only one usage of each socket address (protocol/network address/port) is normally permitted.

*    docker-compose.yaml
database:
    ports:
      - "3306:3306"

* * исправить на "3307:3306"
