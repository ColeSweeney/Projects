 
CREATE TABLE Locations (
    location_id INT PRIMARY KEY,
    name VARCHAR(255),
    address VARCHAR(255),
    phone VARCHAR(15) NOT NULL UNIQUE
);
CREATE TABLE MenuItems (
    item_id INT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    price DECIMAL(10, 2)
);
CREATE TABLE Categories (
    category_id INT PRIMARY KEY,
    name VARCHAR(255)
);
CREATE TABLE MenuItemsCategories (
    item_id INT,
    category_id INT,
    PRIMARY KEY (item_id, category_id),
    FOREIGN KEY (item_id) REFERENCES MenuItems(item_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
);

INSERT INTO Locations (location_id, name, address, phone)
VALUES
    (1, 'Joes Place #1','345 Elm St, Westfield', '318-438-4118'),
    (2, 'Joes Place #2','456 E Oak St, Indianapolis', '478-798-9403');

INSERT INTO MenuItems (item_id, name, description, price)
VALUES
    (1, 'Fettuccine Alfredo','Creamy alfredo sauce on fettuccine with chicken', '12.99'),
    (2, 'Spicy Roll','Sushi rice, nori, and sashimi-grade tunna', '15.99'),
    (3, 'Grilled Seabass','Fresh Seabass grilledto perfection with lemon', '20.99'),
    (4, 'Greek Salad','Crisp romaine lettuce with Oil and Vinegar dressing, olives, feta and, red onions' , '9.99'),
    (5, 'Kale Salad','Fresh Kale with a strawberry vingert and vegan curtons', '12.99'),
    (6, 'Imposible Burger','Impossible meat, lettuce, tommatoe, onion', '25.99'),
    (7, 'Cheese Burger','Ground beef with wiscoins cheddar cheese ', '23.99'),
    (8, 'Blackbean cheese Burger','Blackbean pattie, with arugula and house made ketchup', '21.99');

INSERT INTO Categories (category_id, name)
VALUES
    (1,'Meat'),
    (2,'Pescatarian'),
    (3,'Vegetarian'),
    (4,'Vegan');

INSERT MenuItemsCategories (item_id, category_id)
VALUES
    (1, 1), -- Chicken Alfredo (Has meat)
    (2, 2), --  Spicy rolls (Fish)
    (3, 2), -- Seabass (Fish)
    (4, 3), -- Greek Salad (Vegetarian)
    (5, 4), -- Kale Salad (Vegan)
    (6, 4), -- Imposible Burger (vegan)
    (7, 1), -- Cheeseburger (has Meat)
    (8, 3); -- Blackbean cheese burger (Vegetarian)

