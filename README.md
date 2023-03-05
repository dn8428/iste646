# iste646
ISTE-646 Masterminds
## Contents of Repo
- [docker/](./docker) - Contains files to run a LAMP docker container for local development
- [src/](./src) - Contains the GetSimple files
- [docs/](./docs) - Contains documentation


## How to develop locally
In order to prevent us from all steping on each other toes in the CAD instance, we can consider that to be a 'production' environment and only push our changes up to it occasionally.

For our 'development' envioronment, I created a docker-compose.yml file which contains all the configuration needed to spin up a LAMP stack container and mount the source in it. For information about the container itself see the docker hub page [here](https://hub.docker.com/r/mattrayner/lamp). To run it, simply make sure docker is installed and then from the `docker/` directory run the command `docker compose up` and it will automatically pull the image and get it all setup. After some time you will be able to access the website from the IP the machine running the container (localhost if on your own machine) at port 8080. So just type `localhost:8080` into your browser. 
