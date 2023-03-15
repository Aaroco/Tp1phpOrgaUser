<?php

class Organisation
{
    private string $nom;
    private string $adresse;
    private array $users;
    private int $nbUser;

    public function __construct(string $nom, string $adresse) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbUser = 0;

    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getAdresse(): string {
        return $this->adresse;
    }

// le set user en bas n'equivaut pas au vrai set user la c'est comme ajouter un user a l'organisation
    public function setUser(Users $user) {
        $this->users[] = $user;
    }


    public function getUsers(): array {
        return $this->users;
    }

    public function getNbUser(): int {
        return $this->nbUser;
    }
   //ou EFFACER la ligne dans le cosntructeru nbuser et mettre ca
    // public function getNbUser() {
   //     return count($this->users);
   // }

}
