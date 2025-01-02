-- DROP
DROP TABLE IF EXISTS review_table CASCADE;
DROP TABLE IF EXISTS info CASCADE;
DROP TABLE IF EXISTS transaction CASCADE;
DROP TABLE IF EXISTS food CASCADE;
DROP TABLE IF EXISTS location CASCADE;
DROP TABLE IF EXISTS donor CASCADE;
DROP TABLE IF EXISTS user CASCADE;


-- CREATE
CREATE TABLE 'user' (
 'user_id' VARCHAR(255) NOT NULL AUTO_INCREMENT,
 'name' VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 'address' VARCHAR(75) COLLATE utf8mb4_unicode_ci NOT NULL,
 'phone' VARCHAR(12) COLLATE utf8mb4_unicode_ci NOT NULL,
 'email' VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY ('id'),
 UNIQUE KEY 'user_id' ('user_id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE donor (
    donor_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    address VARCHAR(75),
    phone VARCHAR(12),
    email VARCHAR(50)
)   ENGINE = innodb;

CREATE TABLE location (
    location_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    address VARCHAR(75),
    phone VARCHAR(12),
    email VARCHAR(50),
    latitude DECIMAL(10,6),
    longitude DECIMAL(10,6)
)   ENGINE = innodb;

CREATE TABLE food (
    food_id INT AUTO_INCREMENT PRIMARY KEY,
    food_name VARCHAR(50) NOT NULL,
    category VARCHAR(50),
    quantity INT,
    expiry_date DATE,
    notes VARCHAR(50),
    donor_name VARCHAR(50),
    donor_address VARCHAR(50),
    location VARCHAR(50),
    donor_id INT,
    location_id INT,
    FOREIGN KEY (donor_id) REFERENCES donor(donor_id),
    FOREIGN KEY (location_id) REFERENCES location(location_id)
)   ENGINE = innodb;

CREATE TABLE transaction (
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50),
    date DATE,
    quantity INT,
    notes VARCHAR(75),
    user_id VARCHAR(255),
    donor_id INT,
    location_id INT,
    food_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (donor_id) REFERENCES donor(donor_id),
    FOREIGN KEY (location_id) REFERENCES location(location_id),
    FOREIGN KEY (food_id) REFERENCES food(food_id)
)   ENGINE = innodb;

CREATE TABLE info (
    info_id INT(11) NOT NULL AUTO_INCREMENT,
    address VARCHAR(75),
    phone VARCHAR(12),
    description VARCHAR(200),
    PRIMARY KEY (`info_id`)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- INSERT
insert into user (name, address, phone, email) values ('Gearard Steinham', '114 S Indiana Ave, Bloomington, IN 47408', '332-255-8328', 'gsteinham0@acquirethisname.com');
insert into user (name, address, phone, email) values ('Annemarie Natwick', '425 E Kirkwood Ave, Bloomington, IN 47401', '109-685-6512', 'anatwick1@photobucket.com');
insert into user (name, address, phone, email) values ('Huntington Songust', '424 E 4th St, Bloomington, IN 47408', '921-766-9351', 'hsongust2@about.me');
insert into user (name, address, phone, email) values ('Marthena Udell', '412 E 6th St, Bloomington, IN 47408', '964-352-8923', 'mudell3@blogger.com');
insert into user (name, address, phone, email) values ('Chery Jewkes', '254 N Walnut St, Bloomington, IN 47404', '397-296-7122', 'cjewkes4@cargocollective.com');
insert into user (name, address, phone, email) values ('Jacklyn Zienkiewicz', '200 N Walnut St, Bloomington, IN 47408', '860-264-0166', 'jzienkiewicz5@latimes.com');
insert into user (name, address, phone, email) values ('Moreen Poncet', '115 N Washington St, Bloomington, IN 47408', '787-101-4884', 'mponcet6@clickbank.net');
insert into user (name, address, phone, email) values ('Adore Prosek', '123 S Walnut St, Bloomington, IN 47408', '697-610-5613', 'aprosek7@list-manage.com');
insert into user (name, address, phone, email) values ('Leigh Trusty', '316 E 4th St, Bloomington, IN 47408', '829-379-8888', 'ltrusty8@usa.gov');
insert into user (name, address, phone, email) values ('Cletis Gresch', 'Indiana Memorial Union Bldg, 900 E 7th St, Bloomington, IN 47405', '692-981-1789', 'cgresch9@rakuten.co.jp');
insert into user (name, address, phone, email) values ('Andromache Canty', '1025 E 7th St, Bloomington, IN 47405', '114-758-1143', 'acantya@amazonaws.com');
insert into user (name, address, phone, email) values ('Burty Hunstone', '700 N Woodlawn Ave, Bloomington, IN 47408', '878-414-0318', 'bhunstoneb@yelp.com');
insert into user (name, address, phone, email) values ('Taylor Grigsby', '1900 E 10th St, Bloomington, IN 47406', '397-720-6088', 'tgrigsbyc@xrea.com');
insert into user (name, address, phone, email) values ('Susana Lehmann', '1428 E 3rd St, Bloomington, IN 47401', '586-840-8443', 'slehmannd@sakura.ne.jp');
insert into user (name, address, phone, email) values ('Heddie Marrett', '1020 E Kirkwood Ave, Bloomington, IN 47405', '808-778-2764', 'hmarrette@prnewswire.com');
insert into user (name, address, phone, email) values ('Helli Olivelli', '1001 E 17th St, Bloomington, IN 47408', '851-543-2634', 'holivellif@ucoz.com');
insert into user (name, address, phone, email) values ('Tuckie Buddle', '501 N College Ave, Bloomington, IN 47404', '238-776-5555', 'tbuddleg@123-reg.co.uk');
insert into user (name, address, phone, email) values ('Tore Georgi', '1918 W 3rd St, Bloomington, IN 47404', '459-503-0271', 'tgeorgih@cisco.com');
insert into user (name, address, phone, email) values ('Alene Steddall', '308 W 4th St, Bloomington, IN 47404', '981-130-7142', 'asteddalli@businessweek.com');
insert into user (name, address, phone, email) values ('Suzie Tivers', '614 E 2nd St, Bloomington, IN 47401', '925-199-6112', 'stiversj@soup.io');

insert into donor (name, address, phone, email) values ('Elaina Sherbrooke', '404 E 4th St, Bloomington, IN 47408', '580-431-6872', 'esherbrooke0@state.gov');
insert into donor (name, address, phone, email) values ('Grove Pessler', '405 S Walnut St, Bloomington, IN 47401', '415-253-7312', 'gpessler1@latimes.com');
insert into donor (name, address, phone, email) values ('Kiley McVey', '1701 E 2nd St Suite 100, Bloomington, IN 47401', '347-727-7247', 'kmcvey2@youtu.be');
insert into donor (name, address, phone, email) values ('Randa Hanbury', '1701 E 2nd St Suite 100, Bloomington, IN 47401', '943-923-6965', 'rhanbury3@yale.edu');
insert into donor (name, address, phone, email) values ('Aylmer Chattock', '503 S High St, Bloomington, IN 47401', '224-804-0001', 'achattock4@163.com');
insert into donor (name, address, phone, email) values ('Richmond Giercke', '2425 E 3rd St, Bloomington, IN 47401', '923-909-2942', 'rgiercke5@cnet.com');
insert into donor (name, address, phone, email) values ('D''arcy Cleynaert', '608 S College Mall Rd, Bloomington, IN 47401', '266-222-3064', 'dcleynaert6@ustream.tv');
insert into donor (name, address, phone, email) values ('Maitilde Wheway', '3001 E 3rd St, Bloomington, IN 47401', '168-790-4088', 'mwheway7@nbcnews.com');
insert into donor (name, address, phone, email) values ('Flem MacKilroe', '418 N College Ave, Bloomington, IN 47404', '226-824-1841', 'fmackilroe8@sbwire.com');
insert into donor (name, address, phone, email) values ('Jemmy Starton', '401 N Morton St, Bloomington, IN 47404', '126-642-8225', 'jstarton9@amazon.de');
insert into donor (name, address, phone, email) values ('Cynthy Witson', '309 N Walnut St, Bloomington, IN 47404', '582-691-9668', 'cwitsona@histats.com');
insert into donor (name, address, phone, email) values ('Katrinka Keeley', '340 S Walnut St, Bloomington, IN 47401', '455-597-8587', 'kkeeleyb@yale.edu');
insert into donor (name, address, phone, email) values ('Connie Imison', '528 S College Ave, Bloomington, IN 47403', '822-276-3130', 'cimisonc@tripadvisor.com');
insert into donor (name, address, phone, email) values ('Bentley Madgin', '535 S Walnut St, Bloomington, IN 47401', '966-900-8970', 'bmadgind@blogspot.com');
insert into donor (name, address, phone, email) values ('Verena Brokenshire', '106 E 2nd St, Bloomington, IN 47401', 'vbrokenshiree@51.la');
insert into donor (name, address, phone, email) values ('Terese Davitashvili', '519 S Walnut St, Bloomington, IN 47401', '459-235-0273', 'tdavitashvilif@independent.co.uk');
insert into donor (name, address, phone, email) values ('Lora Roback', '306 N Walnut St, Bloomington, IN 47404', '782-842-9819', 'lrobackg@bloglovin.com');
insert into donor (name, address, phone, email) values ('North Drayn', '701 E 17th St, Bloomington, IN 47408', '403-705-3874', 'ndraynh@geocities.com');
insert into donor (name, address, phone, email) values ('Bibbye Thames', '1425 N Dunn St, Bloomington, IN 47408', '858-410-5982', 'bthamesi@google.fr');
insert into donor (name, address, phone, email) values ('Cherry Mardle', '1873 N Fee Ln, Bloomington, IN 47408', '473-713-4443', 'cmardlej@discovery.com');

insert into location (name, address, phone) values ('Hoosier Hills Food Bank', '2333 W Industrial Park Dr, Bloomington, IN 47404', '812-334-8374');
insert into location (name, address, phone) values ('Bloomington Township Trustee Food Pantry', '924 W 17th St Suite C, Bloomington, IN 47404', '812-336-4976');
insert into location (name, address, phone) values ('Crimson Cupboard Food Pantry', '800 N Union St, Bloomington, IN 47408', '812-855-1924');
insert into location (name, address, phone) values ('FUMC Wednesday Pantry', '219 E 4th St, Bloomington, IN 47408', '812-332-6396');
insert into location (name, address, phone) values ('Monroe County United Ministries', '827 W 14th Ct, Bloomington, IN 47404', '812-339-3429');
insert into location (name, address, phone) values ('Mother Hubbards Cupboard', '1100 W Allen St, Bloomington, IN 47403', '812-339-5887');
insert into location (name, address, phone) values ('Community Kitchen', '1515 S Rogers St, Bloomington, IN 47403', '812-332-0999');
insert into location (name, address, phone) values ('Pantry 279', '3610 W. State Road 46, Bloomington, IN 47404', '812-606-1524');
insert into location (name, address, phone) values ('The Salvation Army Bloomington Indiana', '111 North Rogers St, Bloomington, IN 47404', '812-336-4310');
insert into location (name, address, phone) values ('Healing Hands Outreach Center, Inc.', '1917 S Walnut St, Bloomington, IN 47401', '812-272-2515');
insert into location (name, address) values ("People's Open Pantry Food Pantry", '1136 S Morton St, Bloomington, IN 47403');

insert into location (name, address, phone, latitude, longitude) values ('Hoosier Hills Food Bank', '2333 W Industrial Park Dr, Bloomington, IN 47404', '812-334-8374', 39.17731, -86.56790);
insert into location (name, address, phone, latitude, longitude) values ('Bloomington Township Trustee Food Pantry', '924 W 17th St Suite C, Bloomington, IN 47404', '812-336-4976', 39.18237, -86.54386);

insert into location (name, address, phone, latitude, longitude) values ('Crimson Cupboard Food Pantry', '800 N Union St, Bloomington, IN 47408', '812-855-1924', 39.17585, -86.50884);

insert into location (name, address, phone, latitude, longitude) values ('FUMC Wednesday Pantry', '219 E 4th St, Bloomington, IN 47408', '812-332-6396', 39.16589, -86.53186);

insert into location (name, address, phone, latitude, longitude) values ('Monroe County United Ministries', '827 W 14th Ct, Bloomington, IN 47404', '812-339-3429', 39.17798, -86.54146);

insert into location (name, address, phone, latitude, longitude) values ('Mother Hubbards Cupboard', '1100 W Allen St, Bloomington, IN 47403', '812-339-5887', 39.15775, -86.54644);

insert into location (name, address, phone, latitude, longitude) values ('Community Kitchen', '1515 S Rogers St, Bloomington, IN 47403', '812-332-0999', 39.15223, -86.53944);

insert into location (name, address, phone, latitude, longitude) values ('Pantry 279', '3610 W. State Road 46, Bloomington, IN 47404', '812-606-1524', 39.21004, -86.58403);

insert into location (name, address, phone, latitude, longitude) values ('The Salvation Army Bloomington Indiana', '111 North Rogers St, Bloomington, IN 47404', '812-336-4310', 39.16707, -86.53898);

insert into location (name, address, phone, latitude, longitude) values ('Healing Hands Outreach Center, Inc.', '1917 S Walnut St, Bloomington, IN 47401', '812-272-2515', 39.14693, -86.53089);

insert into location (name, address, latitude, longitude) values ("People's Open Pantry", '1136 S Morton St, Bloomington, IN 47403', 39.15413, -86.53659);


INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010);


INSERT INTO food (food_name, category, quantity, expiry_date, notes, donor_name, donor_address, location)
VALUES
('Apples', 'Fruits', 100, '2024-03-01', 'Fresh and crispy', 'John Doe', '123 Apple St.', '1'),
('Bread', 'Bakery', 50, '2024-01-15', 'Whole wheat', 'Jane Smith', '456 Bread Blvd', '2'),
('Carrots', 'Vegetables', 75, '2024-02-20', 'Organic', 'Mike Johnson', '789 Carrot Rd.', '3'),
('Milk', 'Dairy', 30, '2024-01-25', 'Low fat', 'Anna Bell', '101 Dairy Ln.', '4'),
('Eggs', 'Poultry', 120, '2024-02-10', 'Free range', 'Chris Green', '202 Egg Ave.', '5'),
('Bananas', 'Fruits', 80, '2024-04-05', 'Rich in potassium', 'Olivia Brown', '303 Banana Circle', '6'),
('Chicken Thigh', 'Meat', 60, '2024-02-28', 'Organic free-range', 'Ethan White', '404 Chicken Way', '7'),
('Cheese', 'Dairy', 40, '2024-03-20', 'Cheddar', 'Sophia Wilson', '505 Cheese St.', '8'),
('Potatoes', 'Vegetables', 100, '2024-05-15', 'Golden', 'Liam Martinez', '606 Potato Rd.', '9'),
('Yogurt', 'Dairy', 70, '2024-03-10', 'Greek', 'Mia Davis', '707 Yogurt Ln.', '10'),
('Rice', 'Grains', 150, '2024-06-30', 'Basmati', 'Noah Harris', '808 Rice Ave', '11'),
('Tomatoes', 'Vegetables', 90, '2024-04-15', 'Heirloom', 'Emma Clark', '909 Tomato Way', '12'),
('Beef', 'Meat', 50, '2024-03-05', 'Grass-fed', 'Ava Lewis', '1010 Beef Blvd', '13'),
('Apples', 'Fruits', 120, '2024-04-20', 'Gala', 'Isabella Young', '1111 Apple Ln', '14'),
('Spinach', 'Vegetables', 85, '2024-05-25', 'Organic', 'Mason Walker', '1212 Spinach St.', '15'),
('Oranges', 'Fruits', 60, '2024-07-01', 'Valencia', 'Lucas Moore', '1313 Orange St.', '16'),
('Pork', 'Meat', 40, '2024-03-10', 'Lean cuts', 'Charlotte Taylor', '1414 Pork Ave', '17'),
('Broccoli', 'Vegetables', 70, '2024-06-20', 'Fresh', 'James Anderson', '1515 Broccoli Ln', '18'),
('Salmon', 'Seafood', 25, '2024-02-15', 'Wild-caught', 'Harper Thomas', '1616 Salmon Rd.', '1'),
('Oats', 'Grains', 110, '2024-08-30', 'Whole grain', 'Evelyn Jackson', '1717 Oat Circle', '2'),
('Pasta', 'Grains', 90, '2024-09-01', 'Gluten-free', 'Abigail Martin', '1818 Pasta Lane', '3'),
('Lettuce', 'Vegetables', 80, '2024-05-18', 'Romaine', 'William Hernandez', '1919 Lettuce Way', '4'),
('Chicken Breast', 'Meat', 55, '2024-03-22', 'Skinless', 'Sophia Martinez', '2020 Chicken Plaza', '5'),
('Mushrooms', 'Vegetables', 45, '2024-04-25', 'Shiitake', 'Benjamin White', '2121 Mushroom Blvd', '6'),
('Almonds', 'Nuts', 100, '2024-10-15', 'Raw', 'Amelia Clark', '2222 Almond Ave', '7'),
('Quinoa', 'Grains', 75, '2024-11-05', 'Organic', 'Logan Smith', '2323 Quinoa Quay', '8'),
('Blueberries', 'Fruits', 50, '2024-08-15', 'Wild', 'Sophie Wilson', '2424 Berry Blvd', '9'),
('Turkey', 'Meat', 30, '2024-03-31', 'Free-range', 'Ryan Brown', '2525 Turkey Trail', '10'),
('Cashews', 'Nuts', 65, '2024-12-20', 'Roasted', 'Lily Davis', '2626 Cashew Ct', '11'),
('Tilapia', 'Seafood', 40, '2024-02-28', 'Farm-raised', 'Aiden Lopez', '2727 Tilapia Terrace', '12'),
('Carrot Cake', 'Bakery', 25, '2024-04-10', 'Homemade', 'Nora Johnson', '2828 Carrot Cake Corner', '13'),
('Greek Yogurt', 'Dairy', 80, '2024-03-14', 'Low-fat', 'Isaac Jones', '2929 Greek Yogurt Grove', '14'),
('Kale', 'Vegetables', 90, '2024-07-20', 'Organic', 'Madison Garcia', '3030 Kale Court', '15'),
('Tofu', 'Vegetarian', 100, '2024-09-30', 'Silken', 'Ethan Martinez', '3131 Tofu Trail', '16'),
('Peanut Butter', 'Pantry', 60, '2024-10-25', 'Crunchy', 'Ava Taylor', '3232 Peanut Butter Path', '17'),
('Garlic Bread', 'Bakery', 70, '2024-05-05', 'With herbs', 'Oliver Anderson', '3333 Garlic Bread Blvd', '18');


insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('KMT', '2024-01-03', 18, 'Cross-group', 1, 1, 1, 1);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('AUS', '2023-12-24', 44, 'Multi-layered', 2, 2, 1, 2);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('STX', '2024-01-08', 26, 'Organized', 3, 3, 2, 3);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('AKQ', '2024-01-05', 62, 'neural-net', 4, 4, 2, 4);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('RKP', '2024-01-18', 47, 'multi-state', 5, 5, 3, 5);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('WMB', '2023-12-28', 17, 'Inverse', 6, 6, 3, 6);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('REU', '2024-01-02', 58, 'Synergized', 7, 7, 4, 7);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('NEW', '2023-12-21', 33, 'bottom-line', 8, 8, 4, 8);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('LEM', '2023-12-21', 61, 'service-desk', 9, 9, 5, 9);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('PHM', '2024-01-12', 33, 'orchestration', 10, 10, 5, 10);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('RKZ', '2024-01-16', 100, 'moratorium', 11, 11, 6, 11);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('AQI', '2024-01-17', 11, 'open system', 12, 12, 6, 12);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('BEZ', '2024-01-17', 96, 'Stand-alone', 13, 13, 7, 13);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('RCS', '2024-01-15', 24, 'secondary', 14, 14, 7, 14);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('RKE', '2024-01-05', 34, 'Graphic Interface', 15, 15, 8, 15);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('0', '2023-12-28', 57, 'Seamless', 16, 16, 8, 16);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('ZTA', '2023-12-21', 18, 'holistic', 17, 17, 9, 17);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('TIW', '2023-12-24', 67, '5th generation', 18, 18, 9, 18);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('IKO', '2023-12-21', 93, '4th generation', 19, 19, 10, 19);
insert into transaction (type, date, quantity, notes, user_id, donor_id, location_id, food_id) values ('WHU', '2023-12-26', 21, 'Quality-focused', 20, 20, 10, 20);

ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE 'review_table' ADD COLUMN location_id INT;
