CREATE TABLE IF NOT EXISTS outbox (
      id INT AUTO_INCREMENT PRIMARY KEY,
      type VARCHAR(255) NOT NULL,
      payload TEXT NOT NULL,
      status ENUM('pending', 'sent', 'failed') DEFAULT 'pending',
      retries INT DEFAULT 0,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);