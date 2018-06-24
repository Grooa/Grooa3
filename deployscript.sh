#!/bin/bash

SSH=""
THEME_DIR="/www/Theme/Grooa3"

printf "Setting variables\n"

if [[ -z "${GROOA_SSH}" ]]; then
    echo "DEPLOYMENT ERROR: Missing env variable GROOA_SSH, for ssh address to production server"
    exit 1
else
    SSH="${GROOA_SSH}"
fi

SCP_DIR="${SSH}:${THEME_DIR}"

##
# Move files
##

# Root files
printf "Moving files\n"
rsync -r --exclude 'node_modules' --exclude 'git' . ${SCP_DIR}
