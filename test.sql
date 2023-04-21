/*

CREATE TABLE aisles(
    aisleID INT NOT NULL AUTO_INCREMENT,
    isleName(25) VARCHAR NOT NULL,
    refrigerated BOOLEAN DEFEAULT 0,
    PRIMARY KEY(aisleID)
);

CREATE TABLE products(
    productID INT NOT NULL AUTO_INCREMENT,
    productName VARCHAR(25),
    productPrice FLOAT(4,2),
    aisleID INT,
    PRIMARY KEY(productID),
    FOREIGN KEY(aisleID) REFERENCES aisles(aisleID)
);

*/

CREATE TABLE item(
    itemID INT NOT NULL AUTO_INCREMENT,
    itemName VARCHAR(25) NOT NULL,
    itemPrice FLOAT(4,2),
    PRIMARY KEY(itemID)
);

CREATE TABLE purchase(
    purchaseID INT NOT NULL AUTO_INCREMENT,
    itemOne INT Not Null,
    itemTwo INT,
    itemThree INT,
    itemFour INT,
    itemFive INT,
    itemSix INT,
    itemSeven INT,
    itemEight INT,
    itemNine INT,
    itemTen INT,
    itemEleven INT,
    itemTwelve INT,
    itemThirteen INT,
    itemFourteen INT,
    itemFifteen INT,
    PRIMARY KEY(purchaseID),
    FOREIGN KEY(itemOne) REFERENCES item(itemID),
    FOREIGN KEY(itemTwo) REFERENCES item(itemID),
    FOREIGN KEY(itemThree) REFERENCES item(itemID),
    FOREIGN KEY(itemFour) REFERENCES item(itemID),
    FOREIGN KEY(itemFive) REFERENCES item(itemID),
    FOREIGN KEY(itemSix) REFERENCES item(itemID),
    FOREIGN KEY(itemSeven) REFERENCES item(itemID),
    FOREIGN KEY(itemEight) REFERENCES item(itemID),
    FOREIGN KEY(itemNine) REFERENCES item(itemID),
    FOREIGN KEY(itemTen) REFERENCES item(itemID),
    FOREIGN KEY(itemEleven) REFERENCES item(itemID),
    FOREIGN KEY(itemTwelve) REFERENCES item(itemID),
    FOREIGN KEY(itemThirteen) REFERENCES item(itemID),
    FOREIGN KEY(itemFourteen) REFERENCES item(itemID),
    FOREIGN KEY(itemFifteen) REFERENCES item(itemID)
);

CREATE TABLE contact(
    contactID INT NOT NULL AUTO_INCREMENT,
    phoneNumber INT NOT NULL,
    email VARCHAR(25) NOT NULL,
    facebook VARCHAR(25),
    addy VARCHAR(25),
    PRIMARY KEY(contactID)
);

CREATE TABLE pay(
    paymentID INT NOT NULL AUTO_INCREMENT,
    creditCardNumber INT,
    paypal VARCHAR(30),
    cashapp VARCHAR(30),
    venmo VARCHAR(30),
    PRIMARY KEY(paymentID)
);

CREATE TABLE users(
    userID INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    contactID INT NOT NULL,
    paymentID INT NOT NULL,
    PRIMARY KEY(userID),
    FOREIGN KEY(contactID) REFERENCES contact(contactID),
    FOREIGN KEY(paymentID) REFERENCES pay(paymentID)
);

CREATE TABLE orders(
    userID INT,
    purchaseID INT,
    FOREIGN KEY(userID) REFERENCES users(userID),
    FOREIGN KEY(purchaseID) REFERENCES purchase(purchaseID)
);