
//1b
CREATE TRIGGER sup_fournisseur
BEFORE DELETE ON fournisseurs
FOR EACH ROW
DELETE FROM specialiser
WHERE code_four = OLD.code_four


//2;
CREATE PROCEDURE retour_type_moy_meilleur
(IN libel_type1 VARCHAR(20), IN libel_type2 VARCHAR(20),
OUT libel_type_meilleur VARCHAR(20), OUT diff_tarif DECIMAL)
BEGIN
-- variable hôte pour le tarif contrat moyen du premier type
SET @tar_cont_moy1 = 0;
SELECT AVG(Tar_cont) INTO @tar_cont_moy1
FROM chaudieres
JOIN types ON chaudieres.code_type = types.code_type
WHERE Libel_type = libel_type1;

 -- variable hôte pour le tarif contrat moyen du second type
SET @tar_cont_moy2 = 0;
SELECT AVG(Tar_cont) INTO @tar_cont_moy2
FROM chaudieres
JOIN types ON chaudieres.code_type = types.code_type
WHERE Libel_type = libel_type2;

IF @tar_cont_moy1 >= @tar_cont_moy2 THEN
   SET libel_type_meilleur = libel_type2;
   SET diff_tarif = @tar_cont_moy1 - @tar_cont_moy2;
ELSE
	SET libel_type_meilleur = libel_type1;
	SET diff_tarif = @tar_cont_moy2 - @tar_cont_moy1;
END IF;

END

//3b
CREATE TRIGGER ajout_bateau
AFTER INSERT ON bateaux
FOR EACH ROW
INSERT INTO chargementsBateaux(immat, chargementMaxi) VALUES(NEW.immatriculation , NEW.poidsLimite - NEW.poidsVide);

//3c

CREATE TRIGGER maj_bateau
AFTER UPDATE ON bateaux
FOR EACH ROW
UPDATE chargementsBateaux
SET chargementMaxi = NEW.poidsLimite - NEW.poidsVide
WHERE immat = NEW.immatriculation;


//4
CREATE PROCEDURE calcul_rabais
(IN monNumContrat INTEGER, OUT monRabais DECIMAL)
-- paramètres
-- monNumContrat : numéro du contrat en entrée
-- monRabais : rabais en sortie
BEGIN
-- variable hôte pour le tarif total du contrat
SET @total_contrat = 0;
END

//site web
CREATE TRIGGER sup_util
BEFORE DELETE ON utilisateurs
FOR EACH ROW
DELETE FROM participer
WHERE id_util = OLD.id
//site web
CREATE TRIGGER sup_salari
BEFORE DELETE ON salarie
FOR EACH ROW
DELETE FROM probleme
WHERE id_Salarie = OLD.id_Salarie


CREATE TRIGGER sup_activite
BEFORE DELETE ON activite
FOR EACH ROW
DELETE FROM participer
WHERE id_part = OLD.id