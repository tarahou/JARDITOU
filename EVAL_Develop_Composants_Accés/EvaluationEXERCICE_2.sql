--------------------------------------------EXERCICE_2------------------------------------------------------
-- 9 – Depuis quelle date le client « Du monde entier » n’a plus commandé ?

DELIMITER |
CREATE PROCEDURE `derniere_commande`(IN `nom_client` VARCHAR(50))
BEGIN
SELECT MAX(OrderDate) AS 'Date de dernière commande'
FROM `orders`,`customers` 
WHERE `orders`.`CustomerID`= `customers`.`CustomerID`
AND `CompanyName` = `nom_client`;
END |

DELIMITER ;

-------
CALL `derniere_commande`('Du monde entier');

----------------OR-----------------

DELIMITER |
CREATE PROCEDURE `derniere_commande`(IN `id_client` VARCHAR(5))
BEGIN
SELECT MAX(OrderDate) AS 'Date de dernière commande'
FROM `orders`,`customers` 
WHERE `orders`.`CustomerID`= `customers`.`CustomerID`
AND `CompanyName` = 'Du monde entier';
END |

DELIMITER ;

-------
CALL `derniere_commande`('DUMON');


-----------------------------------------------------------------------------------

-- 10 – Quel est le délai moyen de livraison en jours ?

DELIMITER |

CREATE PROCEDURE `delais_moyen_livraison`()
BEGIN
  SELECT 
  ROUND(AVG(DATEDIFF(ShippedDate, OrderDate))) AS 'Delais moyen de livraison en jours'
  FROM `orders`;
END |

DELIMITER ;

------- 
CALL `delais_moyen_livraison`();

-----------------------------------------------FIN----------------------------------------------------------