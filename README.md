# Rs-Vulnerable-Web-Store
A online store that is filled to the brim with vulnerabilities, made for those learning web app hacking and deployable via Docker or LAMP stack

The fake store has been built on the latest front end technologies and runs on PHP (8.2 or lower) - Just because it looks modern doesn’t mean it’s secure. It features search, a cart and an account area. Cross site scripting attacks can be ran on all of the site including in input boxes and via URLs too.

The account section is located in the cart page, the store doesn’t use a database but customer accounts are kept in another way. (hint… don’t look at the php code for the cart page unless you want to ruin the fun and find out)

There is an account with the username and password “admin” but there is also another account you should be able to find the details for.

Just place the files in a web root and navigate to the site, or you can use docker.

# Docker Install

To pull the docker image enter in your docker cli terminal window

'docker pull tobehacked/lab_services:lab1'

Replace lab1 with the lab you want to select. Eg to pull lab7 the command would look like docker pull tobehacked/lab_services:lab7

This may take sometime to download, the image is around 400mb large but is compressed to 150mb on the docker hub

Now we need to get the image ID so we can start it up, to do so enter

'sudo docker images'

Then look for the image ID, in our case its 4a84805557fa
''
REPOSITORY                TAG       IMAGE ID       CREATED        SIZE
tobehacked/lab_services   lab1      4a84805557fa   26 hours ago   456MB
''
Now we can start the docker image by entering this command (replacing the image ID at the end with your one)

docker run -t 4a84805557fa

When you run that command you might see an warning from apache regarding ServerName, as your machine is not setup to serve multiple sites this is fine. Next to it you’ll see an IP address, this is the IP you can enter in your web browser to access the lab, in our case it’s 172.17.0.2

apache2: Could not reliably determine the server's fully qualified domain name, using **172.17.0.2**

Now you can play around in the lab and test your security skills. Once you’re done and you want to shutdown the docker image from running we can run some commands to do that

Firstly run “docker ps” so we can get the process ID of our running image, the command output should be like this

user@localhost$ docker ps	
CONTAINER ID   IMAGE          COMMAND                  CREATED         STATUS         PORTS     NAMES
a66f75db122d   4a84805557fa   "docker-php-entrypoi…"   4 minutes ago   Up 4 minutes   80/tcp    stupefied_blackburn

We need this container ID to shut the container / image down, with that id we can run the command “docker kill” and put our ID at the end. In our case it would look like

docker kill a66f75db122d
