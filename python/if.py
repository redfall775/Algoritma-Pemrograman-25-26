print("=== SELEKSI REKRUTMEN PT MAJU JAYA ===")

ipk = 3.65
pengalaman_kerja = 2  # dalam tahun

# Menggunakan operator logika 'and' dalam percabangan IF
if ipk >= 3.5 and pengalaman_kerja >= 2:
    status = "Lolos Seleksi (Prioritas Utama)"
elif ipk >= 3.0 or pengalaman_kerja >= 1:
    status = "Lolos Seleksi (Cadangan)"
else:
    status = "Tidak Lolos Seleksi"

print(f"Hasil Evaluasi:")
print(f"- IPK: {ipk}")
print(f"- Pengalaman: {pengalaman_kerja} tahun")
print(f"Kesimpulan: {status}")===–