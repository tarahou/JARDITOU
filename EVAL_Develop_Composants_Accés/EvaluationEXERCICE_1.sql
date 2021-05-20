---------------------------------------------------EXERCICE_1------------------------------------------------
1-- 1 - Liste des contacts français :
SELECT
`CompanyName` AS `Societe`, 
`ContactName` AS `Contact`,
`ContactTitle` AS `Fonction`,
`Phone` AS `Telephone`
FROM `customers`
WHERE `Country` = 'France';

-- 2 - Produits vendus par le fournisseur « Exotic Liquids » :
SELECT
`products`.`ProductName` AS `Produit`,
`products`.`UnitPrice` AS `Prix`
FROM `products`
INNER JOIN `suppliers`
ON `products`.`SupplierID` = `suppliers`.`SupplierID`
WHERE `suppliers`.`CompanyName` = 'Exotic Liquids';

-- 3 - Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant :
SELECT
`suppliers`.`CompanyName` AS `Fournisseur`,
COUNT(`products`.`ProductID`) AS `NbreProduits`  
FROM `suppliers`
INNER JOIN `products`
ON `suppliers`.`SupplierID` = `products`.`SupplierID`
WHERE `suppliers`.`Country` = 'France'
GROUP BY `suppliers`.`SupplierID` 
ORDER BY `NbreProduits` DESC; 

-- 4 - Liste des clients Français ayant plus de 10 commandes :
SELECT
`customers`.`CompanyName` AS `Client`,
COUNT(`orders`.`CustomerID`) AS `NbreCommandes`
FROM `customers`
INNER JOIN `orders`
ON `customers`.`CustomerID` = `orders`.`CustomerID`
WHERE `customers`.`Country` = 'France'
GROUP BY `customers`.`CustomerID`
HAVING `NbreCommandes` > 10 
ORDER BY `Client` ASC;

-- 5 - Liste des clients ayant un chiffre d’affaires > 30.000 :
SELECT
`customers`.`CompanyName` AS `Client`,
SUM(`order details`.`UnitPrice` * `order details`.`Quantity`) as `CA`,
`customers`.`Country` AS `Pays`
FROM ((`customers`
INNER JOIN `orders` ON `orders`.`CustomerID` = `customers`.`CustomerID`)
INNER JOIN `order details` ON `order details`.`OrderID` = `orders`.`OrderID`)
GROUP BY `customers`.`CustomerID`
HAVING `CA` > 30000
ORDER BY `CA` DESC;

-- 6 – Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids » :
SELECT DISTINCT
`orders`.`ShipCountry` AS `Pays`
FROM (((`orders`
INNER JOIN `order details` ON `order details`.`OrderID` = `orders`.`OrderID`)
INNER JOIN `products` ON `products`.`ProductID` = `order details`.`ProductID`)
INNER JOIN `suppliers` ON `suppliers`.`SupplierID` = `products`.`SupplierID`)
WHERE `suppliers`.`CompanyName` = 'Exotic Liquids'
ORDER BY `Pays` ASC;

-- 7 – Montant des ventes de 1997 :
SELECT 
SUM(`order details`.`Quantity` * `order details`.`UnitPrice`) AS 'Montant Ventes 97' 
FROM `order details`
INNER JOIN `orders` 
ON `orders`.`OrderID` = `order details`.`OrderID`
WHERE `orders`.`OrderDate` 
LIKE '1997%';

-- 8 – Montant des ventes de 1997 mois par mois :
SELECT 
MONTH(`orders`.`OrderDate`) AS `Mois 97`, 
SUM(`order details`.`UnitPrice` * `order details`.`Quantity`) AS `Montant Ventes`
FROM `order details`
INNER JOIN `orders` 
ON `orders`.`OrderID` = `order details`.`OrderID`
WHERE `orders`.`OrderDate` 
LIKE '1997%'
GROUP BY `Mois 97`;

-- 9 – Depuis quelle date le client « Du monde entier » n’a plus commandé ?
SELECT MAX(OrderDate) AS 'Date de dernière commande'
FROM `orders`,`customers` 
WHERE `orders`.`CustomerID`= `customers`.`CustomerID`
AND `CompanyName` = 'Du monde entier';

-- 10 – Quel est le délai moyen de livraison en jours ?
SELECT ROUND(AVG(DATEDIFF(ShippedDate, OrderDate)))
AS 'Délai moyen de livraison en jours' 
FROM `orders`

---------------------------------------------------- FIN -------------------------------------------------