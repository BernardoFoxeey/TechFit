<?php
class Usuario
{
    private static PDO $pdo = null;

    public static function changePass($id, $newPass)
    {
        $stmt = "UPDATE Usuarios SET senha_hash=$newPass WHERE id_usuario = $id;";
        $stmt = self::$pdo->prepare($stmt);
        $stmt->execute();
    }
    public static function changeEmail($id, $newEmail)
    {
        $stmt = "UPDATE Usuarios SET email=$newEmail WHERE id = $id";
        $stmt = self::$pdo->prepare($stmt);
        $stmt->execute();
    }
    public static function getEmail($id)
    {
        $stmt = "SELECT email FROM usuarios WHERE id_usuario=$id";
        $stmt = self::$pdo->prepare($stmt);
        $stmt->execute();
        return $stmt->fetch();
    }


}
