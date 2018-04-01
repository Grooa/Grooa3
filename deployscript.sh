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

## Root files
#printf "Moving files at root\n"
#scp * ${SCP_DIR}/
#
## Assets
#printf "Moving assets\n"
#scp -r assets/ ${SCP_DIR}/assets/
#
## Overrides
#printf "Moving overrides\n"
#scp -r override/ ${SCP_DIR}/override/
#
## Setup
#printf "Moving setup files\n"
#scp -r setup/ ${SCP_DIR}/setup/

##
# Remove src control files
##
printf "Removing .git folder\n"
ssh ${SSH} "rm -rf ${THEME_DIR}/.git/"

echo

ssh ${SSH} ls -la ${THEME_DIR}

echo

printf "\nDeployment complete!\n"
