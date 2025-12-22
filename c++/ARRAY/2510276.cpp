#include <iostream>
#include <vector>
#include <string> // Tambahan untuk string
#include <algorithm> // Tambahan jika ingin pakai fungsi max/min bawaan (opsional)

using namespace std;

int main() {
    string nim;
    cout << "Masukkan NIM: ";
    cin >> nim;

    // Cek jika input kosong agar tidak error saat akses digit[0]
    if (nim.empty()) {
        cout << "NIM tidak boleh kosong!" << endl;
        return 1;
    }

    // Ubah tiap karakter jadi digit
    vector<int> digit;
    for (char c : nim) {
        // Hanya masukkan jika itu angka (opsional, untuk keamanan)
        if (isdigit(c)) {
            digit.push_back(c - '0');
        }
    }

    // Hitung total
    int total = 0;
    for (int d : digit) total += d;

    // Cari maks & min
    // Inisialisasi dengan nilai pertama
    int maks = digit[0];
    int mins = digit[0];

    // Loop untuk mengecek sisanya
    for (int d : digit) {
        if (d > maks) maks = d; // Jika nemu yg lebih besar, update maks
        if (d < mins) mins = d; // Jika nemu yg lebih kecil, update mins
    }

    // --- BAGIAN INI YANG HILANG DI KODEMU ---
    // Tampilkan Output
    cout << "Total: " << total << endl;
    cout << "Maks: " << maks << endl;
    cout << "Min: " << mins << endl;

    return 0; // Penutup program yang baik
} // <--- Kurung kurawal penutup (PENTING)