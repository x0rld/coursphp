<?php

require_once __DIR__ . '/../../utils/databases/DatabaseManager.php';
require_once __DIR__ . '/../../models/User.php';

class AuthService {

    private DatabaseManager $manager;

    public function __construct(DatabaseManager $manager) {
        $this->manager = $manager;
    }

    public function subscribe(string $login, string $password): ?User {
        if($this->exists($login)) {
            return null;
        }
        $hashed = hash('sha256', $password);
        $affectedRows = $this->manager->exec('INSERT INTO User (login, password) VALUES (?, ?)', [
            $login,
            $hashed
        ]);
        if($affectedRows === 0) {
            return null;
        }
        return new User($this->manager->getLastInsertId(), $login, $hashed);
    }

    public function exists(string $login): bool {
        $found = $this->manager->find('SELECT id FROM User WHERE login = ?', [$login]);
        return $found !== null;
    }

    public function log(string $login, string $password): ?string {
        $hashed = hash('sha256', $password);
        $userData = $this->manager->find('SELECT id FROM User WHERE login = ? AND password = ?', [
           $login,
           $hashed
        ]);
        if($userData === null) {
            return null;
        }
        $token = bin2hex(random_bytes(32));
        $affectedRows = $this->manager->exec('UPDATE User SET token = ? WHERE id = ?', [
            $token,
            $userData['id']
        ]);
        if($affectedRows === 0) {
            return null;
        }
        return $token;
    }

    public function getUserIdFromToken(string $token): int  {
        $userData = $this->manager->find('SELECT id FROM User WHERE token = ?', [
            $token
        ]);
        if($userData === null) {
            return -1;
        }
        return $userData['id'];
    }
}