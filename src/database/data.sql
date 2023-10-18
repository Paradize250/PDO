CREATE TABLE IF NOT EXISTS post (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(255),
    email VARCHAR(255),
    titre VARCHAR(500),
    commentaire TEXT,
    competence VARCHAR(255),
    niveau VARCHAR(255),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO post (nom,email,titre,commentaire,competence,niveau) VALUES
('jon doe','jjo@yahoo.uk','un titre pour jojj','There are a number of mailing lists devoted to talking about PHP and related projects. This list describes them all, has links to searchable archives for all of the lists, and explains how to subscribe to the lists.','python,html','expert'),
('jane doe','jiji@yahoo.uk','un titre pour jijij','A good place to start is by skimming through the ever-growing list of frequently asked questions (with answers, of course). Then have a look at the rest of the online manual and other resources in the documentation section. ','php,html','intermediaire'),
('karl doe','kk@yahoo.uk','un titre pour kk','Chances are that there is a User Group in your neighborhood, which are generally a great resource both for beginners and experienced PHP users. Check out the User Group listing on PHP.ug to see if there is one close by.  ','python','debutant');