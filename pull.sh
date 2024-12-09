#!/bin/bash

# Start the SSH agent
eval "$(ssh-agent -s)"

# Add the SSH private key (new one without a passphrase)
ssh-add /home/bawarq/.ssh/id_rsa

# Navigate to the directory containing your Git repository
cd /home/bawarq/public_html/

# Pull the latest changes from the master branch
git pull origin master
