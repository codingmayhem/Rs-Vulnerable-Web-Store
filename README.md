# Rs-Vulnerable-Web-Store
A online store that is filled to the brim with vulnerabilities, made for those learning web app hacking and deployable via Docker or LAMP stack

The fake store has been built on the latest front end technologies and runs on PHP (8.2 or lower) - Just because it looks modern doesn’t mean it’s secure. It features search, a cart and an account area. Cross site scripting attacks can be ran on all of the site including in input boxes and via URLs too.

The account section is located in the cart page, the store doesn’t use a database but customer accounts are kept in another way. (hint… don’t look at the php code for the cart page unless you want to ruin the fun and find out)

There is an account with the username and password “admin” but there is also another account you should be able to find the details for.

Just place the files in a web root and navigate to the site, in future a Docker image will be provided too
