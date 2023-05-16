<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230516203225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, mot_de_passe VARCHAR(50) NOT NULL)');
        $this->addSql('CREATE TABLE parametre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client VARCHAR(255) NOT NULL, mot_de_passe_actuel VARCHAR(20) NOT NULL, confirmation_mot_de_passe VARCHAR(20) NOT NULL, email_actuel VARCHAR(50) NOT NULL, nouvel_email VARCHAR(50) NOT NULL)');
        $this->addSql('CREATE TABLE reservation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, int INTEGER NOT NULL, email VARCHAR(50) NOT NULL, date_reservation DATE NOT NULL, heure_reservation TIME NOT NULL, nombre_personne INTEGER NOT NULL, telephone_client VARCHAR(15) NOT NULL, allergie CLOB DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE parametre');
        $this->addSql('DROP TABLE reservation');
    }
}
