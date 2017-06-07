# fiapstorage2-docker

 - FIAPStorage2 (IEEE1888) Dockerfile

# Run

```bash
docker run --name fiapd-db -p 5432:5432 --network=xxxxx -d mouflonjp/fiapd-db
docker run --name fiapd -e POSTGRESQL_CONNECTION_STRING=jdbc:postgresql://fiapd-db/fiapstorage2 -p 8080:8080 -p 8443:8443 --network=xxxxx -d fiapd
```