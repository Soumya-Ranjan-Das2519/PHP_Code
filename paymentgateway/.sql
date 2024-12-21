USE payment_gateway;

CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    amount DECIMAL(10, 2) NOT NULL,
    card_number VARCHAR(16) NOT NULL,
    expiry_date VARCHAR(5) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    response_data TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
