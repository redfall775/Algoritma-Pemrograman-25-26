# FUNGSI: Ngolah data dan BALIKIN hasil (return)
def hitung_pajak(harga_asli):
    pajak = harga_asli * 0.11  # Pajak 11%
    return pajak

# Cara panggil fungsi:
harga_barang = 50000
pajak_yang_harus_dibayar = hitung_pajak(harga_barang)

print(f"Harga Barang : Rp{harga_barang}")
print(f"Pajak (11%)  : Rp{pajak_yang_harus_dibayar}")
print(f"Total Bayar  : Rp{harga_barang + pajak_yang_harus_dibayar}")