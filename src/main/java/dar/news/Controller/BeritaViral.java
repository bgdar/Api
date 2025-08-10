package dar.news.Controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import dar.news.service.GetDataBerita;
import jakarta.validation.Path.ReturnValueNode;

import java.util.Collections;
import java.util.HashMap;

@RestController
@RequestMapping("/berita")
public class BeritaViral {

  private final GetDataBerita getDataBerita;

  public BeritaViral(GetDataBerita getDataBerita) {
    this.getDataBerita = getDataBerita;
  }

  // HashMap<String, String> mapBerita = new HashMap<String, String>();

  /**
   * akses url ini untuk mengupdate Json data berita nya
   */
  @GetMapping("/update")
  public String updateBerita() {
    // ini private key berita punya saya jadi tolong di perhitungkan pemakaian nya
    // 🥲
    // karena di simpan di reasource maka bisa di akses beginni
    String pathJson = getClass().getClassLoader()
        .getResource("data/berita.json")
        .getPath();

    String newsData = this.getDataBerita
        .NewsData("https://newsdata.io/api/1/latest?apikey=pub_7d47985244484456ad84ee3fc97f9811", pathJson);

    return newsData;

  }

  /**
   * tambah data berita
   */
  // @GetMapping("/{nameBerita}")
  // public void SearchBerita(@PathVariable String nameBerita) {
  //
  // System.out.println("berita yang di dapat" + nameBerita);
  // mapBerita.put("news", nameBerita);
  //
  // }
  //
  // /**
  // * Function mengebalikan Data berita dalam bentuk HashMap
  // */
  // public HashMap<String, String> getCurrentNews() {
  //
  // return mapBerita;
  // }

}
