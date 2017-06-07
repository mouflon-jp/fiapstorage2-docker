# fiapd

 - FIAPStorage2 (IEEE1888 Storage) Application Server Container

## run
```bash
docker run --name fiapd -e POSTGRESQL_CONNECTION_STRING=jdbc:postgresql://fiapd-db/fiapstorage2 -p 8080:8080 -p 8443:8443 --network=xxxxx -d mouflonjp/fiapd
```

