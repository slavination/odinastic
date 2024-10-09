#!/bin/bash

# Set the directory path and file extensions
DIR_PATH='/home/user/domainku.xyz/public_html/important_folder/'
FILE_EXT='.php'

# Set the backup directory
BACKUP_DIR='/root/backups/'

# Create the backup directory if it doesn't exist
if [ ! -d "$BACKUP_DIR" ]; then
    mkdir -p "$BACKUP_DIR"
fi

# Backup the files
for file in "$DIR_PATH"*$FILE_EXT; do
    filename=$(basename "$file")
    backup_file="$BACKUP_DIR$filename.bak"
    cp "$file" "$backup_file"
done

# Monitor the files and restore them if they are deleted or tampered with
while true; do
    for file in "$DIR_PATH"*$FILE_EXT; do
        filename=$(basename "$file")
        backup_file="$BACKUP_DIR$filename.bak"
        if [ ! -f "$file" ] || ! cmp -s "$file" "$backup_file"; then
            cp "$backup_file" "$file"
        fi
    done
    sleep 300 # Check every 5 minutes
done
