# fiapd-with-viewer

 - FIAPStorage2 (IEEE1888 Storage) Application Server Container
 - FIAPStorage2 Simple Storage Viewer (Official)

## run
```bash
docker run --name fiapd-with-viewer -e POSTGRESQL_HOSTNAME=fiapd-db -p 8080:8080 -p 8443:8443 --network=xxxxx -d mouflonjp/fiapd-with-viewer
```

