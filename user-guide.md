### Dump database 

1. docker exec into container.
2. run `mysqldump --databases wordpress > wordpress.sql`
3. exit container
4. run `docker cp CONTAINER_id:SRC_PATH DEST_PATH`
