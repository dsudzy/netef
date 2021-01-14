### Dump database 

1. docker exec into container.
2. run `mysqldump -u [username] -p[password] --databases wordpress > wordpress.sql`
3. exit container
4. run `docker cp CONTAINER_id:SRC_PATH DEST_PATH` [`docker cp 8aec5cc8a6d9:wordpress.sql .`]


### Restore remote
mysql -u [user] -p[password] [database_name] < [filename].sql
mysql -u<user> -p<pwd> -h<remote-host> [database-name] < dump.sql