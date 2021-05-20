----------------------------------------------------EXERCICE_3----------------------------------------------------------------

DELIMITER |

CREATE PROCEDURE `Validation Commande`(
  IN `ID Produit` INT, 
  IN `ID Commande` INT
)
BEGIN
  DECLARE `Pays Fournisseur` VARCHAR(50);
  DECLARE `Pays Client` VARCHAR(50);

  SET `Pays Fournisseur` = (
    SELECT DISTINCT `suppliers`.`Country`
    FROM `products`
    INNER JOIN `suppliers`
    ON `products`.`SupplierID` = `suppliers`.`SupplierID`
    WHERE `products`.`ProductID` = `ID Produit`
  );

  SET `Pays Client` = (
    SELECT DISTINCT `orders`.`ShipCountry`
    FROM `orders`
    INNER JOIN `order details`
    ON `orders`.`OrderID` = `order details`.`OrderID`
    WHERE `order details`.`OrderID` = `ID Commande`
  );

  IF `Pays Client` != `Pays Fournisseur` 
  THEN
    -- Envoie un message d'erreur:
    SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Le pays du client et du fournisseur sont différent.';
  END IF;
END |

-- INSERT trigger:
CREATE TRIGGER `Insertion Commande` BEFORE INSERT
ON `order details` FOR EACH ROW
BEGIN
  CALL `Validation Commande`(NEW.`ProductID`, NEW.`OrderID`);
END |

-- UPDATE trigger:
CREATE TRIGGER `Modification Commande` BEFORE UPDATE
ON `order details` FOR EACH ROW
BEGIN
  CALL `Validation Commande`(NEW.`ProductID`, NEW.`OrderID`);
END |

DELIMITER ;
