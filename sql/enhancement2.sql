INSERT INTO clients(`clientFirstName`, `clientLastName`, `clientEmail`, `clientPassword`, `comment`) VALUES ('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 'I am the real Ironman');

UPDATE clients SET clientLevel= '3' WHERE clientFirstName = 'Tony' AND clientLastName = "Stark";

UPDATE inventory SET invDescription='Do you have 6 kids and like to go off-roading? The Hummer gives you the spacious interior with an engine to get you out of any muddy or rocky situation.' WHERE invMake = 'GM' and invModel = 'Hummer';

SELECT invModel, classificationName 
FROM inventory
INNER JOIN carclassification
ON inventory.classificationId = carclassification.classificationId
WHERE classificationName = 'SUV';

DELETE FROM inventory WHERE invMake = 'Jeep' AND invModel = 'Wrangler';

UPDATE inventory
SET invImage = CONCAT('/phpmotors', invImage), invThumbnail = CONCAT('/phpmotors', invThumbnail);