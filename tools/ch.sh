#!/bin/bash

# Set the path to the folder and file
FOLDER_PATH="/path/to/berita"
FILE_PATH="${FOLDER_PATH}/index.php"

# Set the backup location
BACKUP_LOCATION="/path/to/backup/location"

# Backup the folder and file
tar -czf "${BACKUP_LOCATION}/backup_$(date +'%Y-%m-%d').tar.gz" "${FOLDER_PATH}"

# Check if the folder or file has been deleted
if [ ! -d "${FOLDER_PATH}" ] || [ ! -f "${FILE_PATH}" ]; then
  # Restore from backup
  tar -xzf "${BACKUP_LOCATION}/backup_$(date +'%Y-%m-%d').tar.gz" -C "${FOLDER_PATH}"
  
  # Set the permission of the folder and file to 555
  chmod 555 "${FOLDER_PATH}"
  chmod 555 "${FILE_PATH}"
fi
