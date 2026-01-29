
}
import java.util.Scanner;

public class Main {
  public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);

    System.out.println("--- PROGRAM INPUT AMAN ---");
    System.out.print("Masukkan nama tugas: ");

    // Cek apakah ada input sebelum membaca (Mencegah NoSuchElementException)
    if (sc.hasNextLine()) {
      String tugas = sc.nextLine();
      System.out.println("\n[HASIL]");
      System.out.println("Tugas Anda: " + tugas);
    } else {
      System.out.println("\n[PERINGATAN] Kamu belum mengetik apa-apa!");
    }

    System.out.println("--------------------------");
    sc.close();
  }
}