package dar.news.service;

import java.io.FileWriter;
import java.io.IOException;

import org.springframework.stereotype.Service;
import org.springframework.web.client.RestTemplate;

import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

/**
 * getData
 */
@Service
public class GetDataBerita {

  private final RestTemplate restTemplate;

  // otomatis ambil dari AppConfig
  public GetDataBerita(RestTemplate restTemplate) {
    this.restTemplate = restTemplate;
  }

  /**
   * menyimpan Data berita dalam Bentuk Object (String Json)
   * return string : info data yang di save
   *
   */
  public String NewsData(String url, String pathJson) {
    String newsData = restTemplate.getForObject(url, String.class);

    // inisialisaisi Gson
    Gson gson = new GsonBuilder().setPrettyPrinting().create();
    // 3. Menulis ke file JSON
    try (FileWriter writer = new FileWriter(pathJson)) {
      // Mengubah objek Java menjadi string JSON
      String json = gson.toJson(newsData);

      // Menulis string JSON ke file
      writer.write(json);

      // Menampilkan konfirmasi di console
      return "File JSON berhasil dibuat: mahasiswa.json";

    } catch (IOException e) {
      // Menangani error jika gagal menulis file
      return "Terjadi kesalahan: " + e.getMessage();
    }

  }

}
