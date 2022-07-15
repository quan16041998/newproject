create database if not EXISTS `1808g`;
USE `1808g`;

CREATE TABLE if NOT EXISTS `collection`(
	`CollectionID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT null,
	`urlimg` VARCHAR(255) NOT NULL,
	`introduce` text NOT null
);

CREATE TABLE if NOT EXISTS  `stylist`(
`SID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`dob` DATE NOT NULL,
`contact` VARCHAR(20) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`history` TEXT NOT NULL,
`urlimg` varchar(255) NOT null
);

CREATE TABLE if NOT EXISTS `product`(
	`CID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`product_code` VARCHAR(255) NOT NULL,
	`fabric` VARCHAR(255) NOT NULL,
	`price` varchar(30) NOT NULL,
	`size` varchar(30) NOT NULL,
	`urlimg` VARCHAR(255) NOT NULL,
	`CollectionID` INT  NOT NULL,
	`SID` INT NOT NULL,
	foreign KEY (`CollectionID`) REFERENCES `Collection`(`CollectionID`),
	FOREIGN KEY (`SID`) REFERENCES `stylist`(`SID`)
);
CREATE TABLE if NOT EXISTS `customer` (
`CusID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`dob` DATE NOT NULL,
`contact` VARCHAR(20) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`address` VARCHAR(60)
);
CREATE TABLE if NOT EXISTS `admin`(
`username` VARCHAR(255) PRIMARY KEY  NOT NULL,
`password` VARCHAR(255) NOT NULL,
`name` VARCHAR(255) NOT NULL,
`dob` DATE NOT NULL,
`contact` VARCHAR(20) NOT NULL,
`email` VARCHAR(50) NOT NULL
);
INSERT INTO `stylist`(`name`,`dob`,`contact`,`email`,`history`,`urlimg`)
VALUES ('Dinh Tien Quan','1998-04-16','0898288386','quan16041998@gmail.com','Considered by the Hollywood Reporter as one of Hollywood 25 most influential stylists, Dinh Tien Quan describes his styling as "fresh and innovative." He dresses celebrities such as John Boyega, Michael B. Jordan, Odell Beckham Jr., Gucci Mane, and Lil Baby. Rembert also styles women, including pop stars of the caliber of Lizzo and Rita Ora.
', 'anh02.jpg'),
('Do Khac Duong','2003-2-28','0898888888','duongdokhac@gmail.com','A stylist who collaborates with practically all the Hollywood elite, I Duong Do works with many actors on the big screen and does not miss big red carpet events such as the Oscars. Among his clients are Bradley Cooper, Rami Malek, Dwayne Johnson, Ryan Reynolds, Chris Evans, John Kravinsky, and Milo Ventimiglia. He recently added singer Charlie Puth, who appears on the stylist social media in Isabel Marant, to the list. Under his direction, Adrien Brody wore Dior at the 2021 Cannes Film Festival.','anh03.jpg'),
('Bui Anh Tuan', '2003-03-03','0123456789','tuanxiaomi@gmail.com','
Manager of emerging talents and producer of film and TV projects, Tuan Bui proves to have a multifaceted soul and not just that of the classic stylist. Among his clientele, he can boast established actors such as Iron Man star Robert Downey Jr., Keanu Reeves, and 50 Shades of Gray star Jamie Dornan, as well as emerging actors like Jason Momoa of Game of Thrones and Regé-Jean Page, the sex symbol from Netflix Bridgerton.


','anh03.jfif');



INSERT INTO `collection`(`name`,`urlimg`,`introduce`)
VALUES  ('Winter 2022','00001-burberry-fall-2022-menswear-credit-brand.webp','Chaos—the distintegration of norms and boundaries, social and fashion-wise—has reveberated through the ways shows have been done and undone this season. Riccardo Tisci served up his own multi-messaging version of it for Burberry in London—a massive real-life event held at London’s Central Hall Westminster. That is, right across from the Houses of Parliament, a seat of European democracy where, to quote Shakespeare'),
		('Sumer 2022', '00011-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp','What the soon-to-be doctors diagnosed in Dolce & Gabbana this evening is unknown, but from my very spacious bench—“They’ll never be able to squeeze us together like sardines again!” observed my neighbor from a meter away—it looked liked like a serious case of creative development. In their preshow briefing (also spacious) the designers said they had worked with the owners of the Parco dei Principi hotel in Sorrento to infuse elements of Gio Ponti’s architectural wonder into their collection. There were plenty of straightforwardly cosmetic connections made; the beautiful blue tiling patterns in the hotel were handsome additions to silk sarongs, a rib-knit “wetsuit” (modeled with a hilariously small surfboard), dressing gowns, pants, and shirting. More complex was its reproduction in fully proportioned knit sweaters, or different-wash patchwork on jeans.'),
		('Watch', 'anh06.jpg','masterpiece of creation'),
        ('Shoes','giay11.png','Beautiful Shoes');

INSERT INTO product( product_code, fabric, price, size, urlimg, CollectionID, SID)
VALUES
('MD_QA01', 'velvet', 1500,'S-M-L', '00001-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA02', 'kaki', 2000,'S-M-L', '00002-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA03', 'jean', 1500,'S-M-L', '00003-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA04', 'kaki', 2000,'S-M-L', '00004-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA05', 'cashmere', 2000,'S-M-L', '00005-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA06', 'kaki', 2200,'S-M-L', '00006-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA07', 'kaki', 1900,'S-M-L', '00007-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA08', 'jean', 2100,'S-M-L', '00008-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA09', 'cashmere', 1800,'S-M-L', '00009-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA10', 'kaki', 2000,'S-M-L', '00010-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA11', 'velvet', 1800,'S-M-L', '00011-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA12', 'silk', 2000,'S-M-L', '00012-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA13', 'cellulosic fibres', 2000,'S-M-L', '00013-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA14', 'wool', 2200,'S-M-L', '00014-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA15', 'cashmere', 2000,'S-M-L', '00015-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA16', 'cashmere', 2000,'S-M-L', '00016-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA17', 'kaki', 2100,'S-M-L', '00017-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA18', 'cotton', 1850,'S-M-L', '00018-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA19', 'cashmere', 2000,'S-M-L', '00019-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA20', 'cashmere', 1720,'S-M-L', '00020-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA21', 'wool', 2000,'S-M-L', '00021-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA22', 'cashmere', 1600,'S-M-L', '00022-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA23', 'kaki', 1800,'S-M-L', '00023-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA24', 'cashmere', 2200,'S-M-L', '00024-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA25', 'jean', 2300,'S-M-L', '00025-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA26', 'cashmere', 2000,'S-M-L', '00026-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA27', 'cotton', 1900,'S-M-L', '00027-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA28', 'kaki', 2000,'S-M-L', '00028-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA29', 'cashmere', 2300,'S-M-L', '00029-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA30', 'cashmere', 2000,'S-M-L', '00030-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA31', 'kaki', 2200,'S-M-L', '00031-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA32', 'kaki', 2000,'S-M-L', '00032-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA33', 'cashmere', 1900,'S-M-L', '00033-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA34', 'cellulosic fibres', 1800,'S-M-L', '00034-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA35', 'cotton', 2200,'S-M-L', '00035-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA36', 'cashmere', 2150,'S-M-L', '00036-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA37', 'silk', 1950,'S-M-L', '00037-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA38', 'wool', 2222,'S-M-L', '00038-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA39', 'leather', 1900,'S-M-L', '00039-burberry-fall-2022-menswear-credit-brand.webp', 1,1),
('MD_QA40', 'leather', 2000,'S-M-L', '00040-burberry-fall-2022-menswear-credit-brand.webp', 1,1);





INSERT INTO product(product_code, fabric, price, size, urlimg, CollectionID, SID)
VALUES
('MH_QA01', 'cotton', 2500,'S-M-L', '00001-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA02', 'cotton', 2500,'S-M-L', '00002-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA03', 'cotton', 2300,'S-M-L', '00003-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA04', 'cotton', 2200,'S-M-L', '00004-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA05', 'cotton', 2000,'S-M-L', '00005-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA06', 'cotton', 2100,'S-M-L', '00006-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA07', 'cotton', 1900,'S-M-L', '00007-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA08', 'cotton', 2500,'S-M-L', '00008-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA09', 'cotton', 1800,'S-M-L', '00009-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA10', 'cotton', 2500,'S-M-L', '00010-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA11', 'cotton', 2300,'S-M-L', '00011-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA12', 'cotton', 2500,'S-M-L', '00012-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA13', 'cotton', 1800,'S-M-L', '00013-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA14', 'cotton', 2500,'S-M-L', '00014-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA15', 'cotton', 1900,'S-M-L', '00015-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA16', 'cotton', 2500,'S-M-L', '00016-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA17', 'cotton', 2100,'S-M-L', '00017-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA18', 'cotton', 2200,'S-M-L', '00018-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA19', 'cotton', 2500,'S-M-L', '00019-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA20', 'cotton', 2700,'S-M-L', '00020-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA21', 'cotton', 2500,'S-M-L', '00021-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA22', 'cotton', 2300,'S-M-L', '00022-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA23', 'cotton', 2200,'S-M-L', '00023-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA24', 'cotton', 2400,'S-M-L', '00024-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA25', 'cotton', 2500,'S-M-L', '00025-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA26', 'cotton', 2400,'S-M-L', '00026-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA27', 'cotton', 2300,'S-M-L', '00027-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA28', 'cotton', 2100,'S-M-L', '00028-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA29', 'cotton', 2500,'S-M-L', '00029-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA30', 'cotton', 2100,'S-M-L', '00030-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA31', 'cotton', 2500,'S-M-L', '00031-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA32', 'cotton', 2700,'S-M-L', '00032-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA33', 'cotton', 2500,'S-M-L', '00033-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA34', 'cotton', 1900,'S-M-L', '00034-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA35', 'cotton', 2000,'S-M-L', '00035-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA36', 'cotton', 2300,'S-M-L', '00036-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA37', 'cotton', 2500,'S-M-L', '00037-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA38', 'silk', 1900,'S-M-L', '00038-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA39', 'cotton', 2300,'S-M-L', '00039-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2),
('MH_QA40', 'cotton', 2100,'S-M-L', '00040-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp', 2,2);


INSERT INTO product(product_code, fabric, price, size, urlimg, CollectionID, SID)
VALUES
    ('PK_DH01', 'Rose gold. Sapphire crystal case back.', 15000,'S-M-L', '6002R_001_1.jpg', 3,3),
    ('PK_DH02', 'Rose gold. Sapphire crystal case back.', 15000,'S-M-L', '5304_301R_001_1.jpg', 3,3),
    ('PK_DH03', 'White gold, the Cyclops lens and the five-piece link Jubilee bracelet.', 20000,'S-M-L', 'Datejust 31 278289RBR.jpg', 3,3),
    ('PK_DH04', 'White Gold Set With Diamonds', 490000,'S-M-L', 'image/products/GMT-Master II Ice 116769TBR.jpq', 3,3),
    ('PK_DH05', 'Sapphire and gold',  990000,'S-M-L', 'Richard Mille RM 57-03 Tourbillon Sapphire Dragon.jpg', 3,3),
    ('PK_DH06', 'White Gold', 774228,'S-M-L', ' Richard Mille RM 51-01 Tourbillon Tiger And Dragon.jpg', 3,3),
    ('PK_DH07', 'Platinum', 258076,'S-M-L', 'patek-6102p-001.png', 3,3),
    ('PK_DH08', 'Titanim and rose gold', 51000,'S-M-L', 'Pilot Type 20 Tourbillon.jpg', 3,3),
    ('PK_DH09', 'Sapphire', 104133,'S-M-L', 'TAKASHI MURAKAMI SAPPHIRE RAINBOW.png', 3,3),
    ('PK_DH10','Gold and diamond',1000000,'S-M-L','anh01.jpg',3,3),
    ('PK_DH11','Gold and diamond',1000000,'S-M-L','anh02.jpg',3,3),
    ('PK_DH12','Gold and diamond',1000000,'S-M-L','anh03.jpg',3,3),
    ('PK_DH13','Gold and diamond',1000000,'S-M-L','anh04.jpg',3,3),
    ('PK_DH14','Gold and diamond',1000000,'S-M-L','anh05.jpg',3,3),
			('PK_DH15','Gold and diamond',1000000,'S-M-L','anh06.jpg',3,3),
			('PK_DH16','Gold and diamond',1000000,'S-M-L','anh07.jpg',3,3),
			('PK_DH17','Gold and diamond',1000000,'S-M-L','anh08.jpg',3,3),
			('PK_DH18','Gold and diamond',1000000,'S-M-L','anh09.jpg',3,3),
			('PK_DH19','Gold and diamond',1000000,'S-M-L','anh10.jpg',3,3),
			('PK_DH20','Gold and diamond',1000000,'S-M-L','anh11.jpg',3,3),
			('PK_DH21','Gold and diamond',1000000,'S-M-L','anh12.jpg',3,3),
			('PK_DH22','Gold and diamond',1000000,'S-M-L','anh13.jpg',3,3);



INSERT into `admin` (`username`,`password`,`name`,`dob`,`contact`,`email`)
VALUES ('admin','$2a$10$/NgMGlLUOL2UVNtNGBjIneKyFiYLv3JCo23CVc4GfQr3A9wyYWKpq','quan','1998-04-16','0898288386','quan16041998@gmail.com');

INSERT into `customer` (`name`,`dob`,`contact`,`email`,`address`)
VALUES ('quan','1998-04-16','0898288386','quan16041998@gmail.com','Ha Noi');



INSERT INTO product( product_code, fabric, price, size, urlimg, CollectionID, SID)
VALUES
('PK_GY01', 'leather', 1500, 'S-M-L', 'giay01.webp', 4,1),
('PK_GY02', 'leather', 2000, 'S-M-L', 'giay02.webp', 4,1),
('PK_GY03', 'leather', 1600, 'S-M-L', 'giay03.webp', 4,1),
('PK_GY04', 'leather', 1500, 'S-M-L', 'giay04.webp', 4,1),
('PK_GY05', 'leather', 1300, 'S-M-L' ,'giay05.webp', 4,1),
('PK_GY06', 'leather', 1500, 'S-M-L', 'giay06.webp', 4,1),
('PK_GY07', 'leather', 1100, 'S-M-L', 'giay07.webp', 4,1),
('PK_GY08', 'leather', 1500, 'S-M-L', 'giay08.webp', 4,1),
('PK_GY09', 'leather', 1200, 'S-M-L', 'giay09.webp', 4,1),
('PK_GY10', 'leather', 1300, 'S-M-L', 'giay10.webp', 4,1),
('PK_GY11', 'leather', 1500, 'S-M-L' ,'giay11.png', 4,1),
('PK_GY12', 'leather', 1400, 'S-M-L', 'giay12.webp', 4,1),
('PK_GY13', 'leather', 1500, 'S-M-L', 'giay13.webp', 4,1),
('PK_GY14', 'leather', 1400, 'S-M-L', 'giay14.png', 4,1),
('PK_GY15', 'leather', 1500, 'S-M-L', 'giay15.png', 4,1),
('PK_GY16', 'leather', 1800, 'S-M-L' ,'giay16.jpg', 4,1),
('PK_GY17', 'leather', 1800, 'S-M-L', 'giay17.webp', 4,1),
('PK_GY18', 'leather', 1700, 'S-M-L', 'giay18.webp', 4,1),
('PK_GY19', 'leather', 1500, 'S-M-L', 'giay19.jpg', 4,1),
('PK_GY20', 'leather', 1900, 'S-M-L', 'giay20.jpg', 4,1);
