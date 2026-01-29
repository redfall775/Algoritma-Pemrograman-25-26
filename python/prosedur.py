# PROSEDUR: Cuma buat eksekusi perintah (cetak layar)
def cetak_struk_belanja(nama_barang, harga):
    print("---------- NOTA TOKO ----------")
    print(f"Item  : {nama_barang}")
    print(f"Harga : Rp{harga}")
    print("-------------------------------")
    print("Terima Kasih sudah mampir!")

# Cara panggil prosedur:
cetak_struk_belanja("Kopi Kenangan", 25000)