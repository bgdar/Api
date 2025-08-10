package dar.news.configs;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.client.RestTemplate;

/**
 * AppConfig
 */
@Configuration
public class AppConfig {

  /**
   * Definisikan WebCllient yang bisa di inject ke lainya (service,controller)
   */
  @Bean
  public RestTemplate restTemplate() {
    return new RestTemplate();
  }

}
