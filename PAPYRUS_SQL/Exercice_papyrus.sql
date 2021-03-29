----------------------------------------------------------LES BESOINS D’AFFICHAGE----------------------------------------------------------------------
-----Exercices papyrus :
--1- Quelles sont les commandes du fournisseur 09120?:
SELECT NUMCOM 
FROM papyrus.ENTCOM 
WHERE NUMFOU = '9120'

--2- Afficher le code des fournisseurs pour lesquels des commandes ont été passées:
SELECT NUMFOU,COUNT(numcom) AS 'nombre de commande' 
FROM papyrus.ENTCOM 
GROUP BY NUMFOU

--3- Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés:
SELECT COUNT(numcom) AS 'nombre de commande', COUNT(DISTINCT numfou) AS 'nombre de fournisseur' 
FROM papyrus.ENTCOM 

--4- Editer les produits ayant un stock inférieur ou égal au stock d'alerte et dont la quantité annuelle est inférieur à 1000 (informations à fournir : n° produit, libelléproduit, stock, stockactuel d'alerte, quantitéannuelle):
SELECT codart,libart,stkphy,stkale,QTEANN 
FROM papyrus.PRODUIT 
WHERE STKPHY <= STKALE AND QTEANN < 1000 

--5- Quels sont les fournisseurs situés dans les départements 75 78 92 77 ? L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique:
----- Par département décroissant :-----
SELECT nomfou, substring(posfou,1,2) AS 'Départements' 
FROM papyrus.FOURNIS 
WHERE substring(posfou,1,2) IN ('75', '78', '92', '77') 
ORDER BY posfou DESC, nomfou
----- Par ordre alphabétique :-----
SELECT nomfou, substring(posfou,1,2) AS 'Départements' 
FROM papyrus.fournis 
WHERE substring(posfou,1,2) IN ('75', '78', '92', '77') 
ORDER BY nomfou DESC, nomfou ASC

--6- Quelles sont les commandes passées au mois de mars et avril?:
SELECT NUMCOM, DATCOM 
FROM papyrus.ENTCOM 
WHERE MONTH(DATCOM) = 3 OR MONTH(DATCOM) = 4

--7- Quelles sont les commandes du jour qui ont des observations particulières ?(Affichage numéro de commande, date de commande):
SELECT NUMCOM,DATCOM 
FROM papyrus.ENTCOM WHERE OBSCOM NOT LIKE ''

--8- Lister le total de chaque commande par total décroissant (Affichage numéro de commande et total):
SELECT NUMCOM, SUM(QTECDE * PRIUNI) AS TOTAL 
FROM papyrus.LIGCOM  
GROUP BY NUMCOM 
ORDER BY TOTAL DESC

--9- Lister les commandes dont le total est supérieur à 10000€; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.(Affichage numéro de commande et total):
SELECT NUMCOM, SUM(QTECDE * PRIUNI) AS 'TOTAL' 
FROM papyrus.LIGCOM 
WHERE QTECDE < 1000
GROUP BY NUMCOM 
HAVING SUM(QTECDE * PRIUNI)>10000  

--10- Lister les commandes par nom fournisseur (Afficher le nom du fournisseur, le numéro de commande et la date):
SELECT NOMFOU,NUMCOM,DATCOM 
FROM papyrus.FOURNIS,papyrus.ENTCOM 
WHERE entcom.NUMFOU = fournis.NUMFOU

--11- Sortir les produits des commandes ayant le mot "urgent' en observation?(Afficher le numéro de commande, le nom du fournisseur, le libellé du produit et le sous total= quantité commandée * Prix unitaire):
SELECT entcom.NUMCOM,NOMFOU,LIBART,SUM(QTECDE * PRIUNI) AS 'Sous total'  
FROM papyrus.ENTCOM,papyrus.FOURNIS,papyrus.LIGCOM,papyrus.PRODUIT
WHERE OBSCOM = 'commande urgente' AND entcom.NUMFOU = FOURNIS.NUMFOU AND ENTCOM.NUMCOM = LIGCOM.NUMCOM AND produit.CODART = LIGCOM.CODART
GROUP BY entcom.NUMCOM,NOMFOU,LIBART

--12- Coder de deux manières différentes la requête suivante:Lister le nom des fournisseurs susceptibles de livrer au moins un article
SELECT NOMFOU
FROM papyrus.ENTCOM,papyrus.FOURNIS,papyrus.LIGCOM
WHERE entcom.NUMFOU = fournis.NUMFOU AND entcom.NUMCOM = ligcom.NUMCOM AND QTELIV >= 1
GROUP BY NOMFOU

--13- Coder de 2 manières différentes la requête suivante : Lister les commandes (Numéro et date) dont le fournisseur est celui de la commande 70210: 
----- 1ère méthode : -----
SELECT `entcom`.`numcom` AS Numero,entcom.`datcom` AS DateCommande
FROM entcom 
WHERE entcom.`numcom` = 70210;
----- 2ème méthode : -----


--14- Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R). On affichera le libellé de l’article et prix1:
SELECT libart,prix1
FROM papyrus.VENTE,papyrus.PRODUIT
WHERE produit.CODART = vente.CODART AND STKPHY > 0 AND PRIX1 < (
SELECT min(prix1) FROM papyrus.VENTE,papyrus.PRODUIT 
WHERE produit.CODART = vente.CODART AND LIBART  Like 'R%' )
GROUP BY LIBART,PRIX1

--15 Editer la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte. La liste est triée par produit puis fournisseur:
SELECT LIBART,fournis.NUMFOU
FROM papyrus.PRODUIT,papyrus.FOURNIS,papyrus.VENTE
WHERE FOURNIS.NUMFOU = VENTE.NUMFOU AND vente.CODART = PRODUIT.CODART AND STKPHY <= (
SELECT SUM(STKALE * 1.5) 
FROM papyrus.PRODUIT
WHERE STKALE > 0 AND STKPHY > 0)
ORDER BY LIBART,fournis.NUMFOU

--16- Éditer la liste des fournisseurs susceptibles de livrer les produit dont le stock est inférieur ou égal à 150 % du stock d'alerte et un délai de livraison d'au plus 30 jours. La liste est triée par fournisseur puis produit:
SELECT LIBART,fournis.NUMFOU
FROM papyrus.PRODUIT,papyrus.FOURNIS,papyrus.VENTE
WHERE FOURNIS.NUMFOU = VENTE.NUMFOU AND vente.CODART = PRODUIT.CODART AND STKPHY <= (
SELECT SUM(STKALE * 1.5) 
FROM papyrus.PRODUIT
WHERE STKALE > 0 AND STKPHY > 0 AND DELLIV < 30)
ORDER BY LIBART,fournis.NUMFOU

--17- Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur trié par total décroissant: 
SELECT numfou, SUM(STKPHY) AS STOCK
FROM papyrus.VENTE,papyrus.PRODUIT
WHERE vente.CODART = produit.CODART
GROUP BY NUMFOU
ORDER BY STOCK DESC

--18- En fin d'année, sortir la liste des produits dontla quantité réellement commandée dépasse 90% de la quantité annuelleprévue:
SELECT LIBART, SUM(QTECDE) as Quantite 
FROM papyrus.PRODUIT,papyrus.LIGCOM
WHERE PRODUIT.CODART = LIGCOM.CODART
GROUP BY LIBART, QTEANN
HAVING (QTEANN * 0.90) < SUM(QTECDE)

--19- Calculer le chiffre d'affaire par fournisseur pour l'année 93 sachant que les prix indiqués sont hors taxes et que le taux de TVA est 20%:
SELECT NUMFOU, SUM(QTECDE * PRIUNI *1.20) AS prixttc
FROM papyrus.LIGCOM,papyrus.ENTCOM
WHERE ENTCOM.NUMCOM = LIGCOM.NUMCOM
GROUP BY NUMFOU

-------------------------------------------LES BESOINS DE MISE A JOUR---------------------------------------------------------------

--1- Application d'une augmentation de tarif de 4% pour le prix 1, 2% pour le prix2 pour le fournisseur 9180 :

UPDATE papyrus.VENTE
SET PRIX1 = PRIX1*1.04, PRIX2 = PRIX2 *1.02
WHERE NUMFOU = 9180

--2- Dans la table vente, mettre à jour le prix2 des articles dont le prix2 est null, en affectant a valeur de prix :
UPDATE papyrus.VENTE
SET PRIX2=PRIX1
WHERE PRIX2=0

--3- Mettre à jour le champ obscom en positionnant '*****' pour toutes les commandes dont le fournisseur a un indice de satisfaction <5 :
UPDATE papyrus.ENTCOM 
JOIN papyrus.FOURNIS ON Fournis.NUMFOU = ENTCOM.NUMFOU
SET entcom.obscom = CONCAT(entcom.obscom,'*****')
WHERE fournis.SATISF < 5

--4- Suppression du produit I110 :

DELETE FROM `vente` 
WHERE `vente`.`codart` = 'I110'

DELETE FROM `produit` 
WHERE `produit`.`codart` = 'I110'

----------------------------------------------------FIN DES EXERCICES--------------------------------------------------------------------
 


