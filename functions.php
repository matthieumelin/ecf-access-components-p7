<?php

require_once('./pdo.php');

// Users functions
function listUsers() {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM user");
    $query->execute();

    $result = $query->fetchAll();

    if ($result) {
        echo "Liste des utilisateurs:<br />\n";
        foreach ($result as $row) {
            echo $row["id"]." | ",
            $row["email"]." | ",
            $row["roles"]." | ",
            $row["password"]." | ",
            $row["firstname"]." | ",
            $row["lastname"]." | ",
            $row["phone"]." | ",
            $row["school_year_id"]." <br />\n ";
        }
    } else {
        echo "Aucun utilisateur.<br />\n";
    }
    echo "--------------------<br />\n";
}

function listUsersByRole($role) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM user WHERE roles='$role'");
    $query->execute();

    $result = $query->fetchAll();

    if ($result) {
        echo "Liste des utilisateurs avec le role `$role`:<br />\n";
        foreach ($result as $row) {
            echo $row["id"]." | ",
            $row["email"]." | ",
            $row["roles"]." | ",
            $row["password"]." | ",
            $row["firstname"]." | ",
            $row["lastname"]." | ",
            $row["phone"]." | ",
            $row["school_year_id"]." <br />\n ";
        }
    } else {
        echo "Aucun utilisateur avec le role $role.<br />\n";
    }
    echo "--------------------<br />\n";
}

function listUserDataById($id) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM user WHERE id='$id'");
    $query->execute();

    $result = $query->fetchAll();

    if ($result) {
        echo "Données de l'utilisateur avec l'id $id:<br />\n";
        foreach ($result as $row) {
            echo $row["id"]." | ",
            $row["email"]." | ",
            $row["roles"]." | ",
            $row["password"]." | ",
            $row["firstname"]." | ",
            $row["lastname"]." | ",
            $row["phone"]." | ",
            $row["school_year_id"]." <br />\n ";
        }
    } else {
        echo "Aucun utilisateur avec l'identifiant $id.<br />\n";
    }
    echo "--------------------<br />\n";
}

// School years functions
function listSchoolYears() {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM school_year");
    $query->execute();

    $result = $query->fetchAll();

    if ($result) {
        echo "Liste des school years:<br />\n";
        foreach ($result as $row) {
            echo $row["id"]." | ",
            $row["name"]." | ",
            $row["date_start"]." | ",
            $row["date_end"]." <br />\n ";
        }
    } else {
        echo "Aucune school years.<br />\n";
    }
    echo "--------------------<br />\n";
}

function listSchoolYearDataById($id) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM school_year WHERE id='$id'");
    $query->execute();

    $result = $query->fetchAll();

    if ($result) {
        echo "Données de la school year avec l'id $id:<br />\n";
        foreach ($result as $row) {
            echo $row["id"]." | ",
            $row["name"]." | ",
            $row["date_start"]." | ",
            $row["date_end"]." <br />\n ";
        }
    } else {
        echo "Aucune school year avec l'identifiant $id.<br />\n";
    }
    echo "--------------------<br />\n";
}

// School years functions
function listProjects() {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM project");
    $query->execute();

    $result = $query->fetchAll();

    if ($result) {
        echo "Liste des projets:<br />\n";
        foreach ($result as $row) {
            echo $row["id"]." | ",
            $row["name"]." | ",
            $row["description"]." <br />\n ";
        }
    } else {
        echo "Aucun projet.<br />\n";
    }
    echo "--------------------<br />\n";
}

function listProjectDataById($id) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM project WHERE id='$id'");
    $query->execute();

    $result = $query->fetchAll();

    if ($result) {
        echo "Données du projet avec l'id $id:<br />\n";
        foreach ($result as $row) {
            echo $row["id"]." | ",
            $row["name"]." | ",
            $row["description"]." <br />\n ";
        }
    } else {
        echo "Aucun projet avec l'identifiant $id.<br />\n";
    }
    echo "--------------------<br />\n";
}

// call functions
listUsers();
listUserDataById(1);
listUsersByRole("ROLE_ADMIN");
 
listSchoolYears();
listSchoolYearDataById(1);

listProjects();
listProjectDataById(1);