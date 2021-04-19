# Generic Streaming Service
This is a generic streaming service similar to Netflix, Amazon Video, etc. It will employ micro services and use laravel for its backend. The first client will be either in React or Vue and ought to be independant from any of the apis, living within this repo at ./clients/vue

So far all work has been in the Accounts api and the shared modules, the other services are mostly empty Laravel installs.

## Shared-Modules
Each Service and each shared module should later become their own git repositories. Softlinks to shared modules from the services should then be replaced with git submodules. For now I will be linking the shared modules into each service via soft links, keeping this all under one repo will be convenient for the time being.

## Micro Service APIs
This project contains four micro services.

### Auth
Authenticate the user, allow the user to select a profile. The profile will contain a list of mirrors for the other client apis. Mirror lists will be selected based on current location and account/profile selected.

### Accounts
This service will supply the client with account/profile specific data, such as account, profile & feed.

### Public Resources
The public resources api will supply the client with any publicly available data and media, descriptions, trailors, images. For perfomance it will not require oauth or any cookies to access resources.

### Streaming
The streaming services will be optimized for streaming and will supply only video feeds via signed links supplied by the Accounts api.
