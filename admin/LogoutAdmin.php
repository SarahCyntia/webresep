<?php
session_start();
session_destroy();
header ('location: LoginAdmin.php');
?>

<style>
    .button {
    width: 100%;
    padding: 12px;
    background-color: #ff6f61;
    color: #fff;
    font-size: 1.1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #e05c50;
}

@media (max-width: 480px) {
    .logout-container {
        padding: 30px;
        width: 90%;
    }

    .logout-container h1 {
        font-size: 1.8rem;
    }

    input[type="text"], input[type="password"] {
        font-size: 0.9rem;
    }

    button {
        font-size: 1rem;
    }
}
</style>


