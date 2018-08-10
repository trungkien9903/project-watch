
-- Table hóa đơn
CREATE TABLE bill
(
  id int PRIMARY KEY AUTO_INCREMENT,
  customer_id int NOT NULL,
  total float,
  note text,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);


-- --------------------------------------------------------

-- Table chi tiết hóa đơn
CREATE TABLE bill_detail
(
  id int PRIMARY KEY AUTO_INCREMENT,
  bill_id int NOT NULL,
  product_id int NOT NULL,
  quantity int NOT NULL ,
  price float NOT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);


-- --------------------------------------------------------

-- Table khách hàng
CREATE TABLE customer (
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  gender varchar(10) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(100) NOT NULL,
  address varchar(200) NOT NULL,
  phone_number varchar(20) NOT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);



-- --------------------------------------------------------

-- Table tin mới
CREATE TABLE news 
(
  id int PRIMARY KEY AUTO_INCREMENT,
  title varchar(200) NOT NULL ,
  content text NOT NULL ,
  image varchar(100) NOT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);


-- --------------------------------------------------------
-- Table danh mục sản phẩm
CREATE TABLE category 
(
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  slug varchar(100) NOT NULL,
  parent int DEFAULT '0',
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);


-- --------------------------------------------------------

-- Table sản phẩm
CREATE TABLE product
(
  id int PRIMARY KEY AUTO_INCREMENT,
  category_id int(10) NOT NULL,
  name varchar(100) NOT NULL,
  slug varchar(100) NOT NULL,
  price float NOT NULL,
  sale_price float,
  content text,
  image varchar(255) NULL,
  strap varchar(100) NOT NULL, -- dây đeo
  movement varchar(50) NOT NULL, -- loại máy automatic & quartz
  gender varchar(20) NOT NULL,
  origin varchar(100) NOT NULL,
  status tinyint DEFAULT '0',
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

-- -- Table banner
CREATE TABLE banner
(
  id int PRIMARY KEY AUTO_INCREMENT,
  link varchar(100) NOT NULL,
  image varchar(100) NOT NULL,
  status tinyint DEFAULT '0',
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);


-- --------------------------------------------------------


-- Table tài khoản
CREATE TABLE user
(
  id int PRIMARY KEY AUTO_INCREMENT,
  full_name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  phone varchar(20),
  address varchar(255),
  remember_token varchar(100),
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP
);



-- --------------------------------------------------------


-- Constraints for table product

ALTER TABLE product ADD FOREIGN KEY FK_product_categpry (category_id) REFERENCES category (id);
ALTER TABLE bill ADD FOREIGN KEY FK_bill_customer (customer_id) REFERENCES customer(id);
ALTER TABLE bill_detail ADD FOREIGN KEY FK_bill_detail_bill (bill_id) REFERENCES bill(id);
ALTER TABLE bill_detail ADD FOREIGN KEY FK_bill_detail_product (product_id) REFERENCES product(id);
ALTER TABLE product ADD FOREIGN KEY FK_product_category (category_id) REFERENCES category(id);

